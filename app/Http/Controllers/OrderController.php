<?php

namespace App\Http\Controllers;

use PDF;
use App\Mail\OrderPaid;
use App\GiftCardPurchase;
use App\Order;
use App\RewardPoint;
use Illuminate\Http\Request;
use App\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function manage_stock($product, $qty){
        DB::table('products')->where('id', $product->id)->decrement('stock', intval($qty));
    }
    public function sms($number, $msg){


            $url = 'https://smspanellogin.com/api/bulkSmsApi';
            $data = array(
                'sender_id' => 103,
                'apiKey' => 'ZWNoZW1iZDplY2hlbWJkMjAyMA==',
                'mobileNo' => $number,
                'message' => $msg
            );

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            $output = curl_exec($curl);
            curl_close($curl);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_zipcode' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'payment_method' => 'required',
        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_zipcode = $request->input('shipping_zipcode');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');


        if (!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_zipcode = $request->input('shipping_zipcode');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
        } else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_zipcode = $request->input('billing_zipcode');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
        }


        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        //$order->status = 'pending';

        // Add to wallet
        $items = \Cart::session(auth()->id())->getContent();
        $newWallet = 0.0;
        foreach ($items as $item) {
            $newWallet = $newWallet + $item['price'] * $item['quantity'] * $item['associatedModel']['cash_back_percent'] / 100;
        }
        $oldWallet = Wallet::where('user_id', auth()->id());
        if (!$oldWallet->count()) {
            $wallet = new Wallet();
            $wallet->user_id = auth()->id();
            $wallet->amount = $newWallet;
            $wallet->save();
        } else {
            // $amount = $oldWallet->amount + $newWallet;
            DB::table('wallets')
                ->where('user_id', auth()->id())
                ->increment('amount', $newWallet);
        }
        //ADD TO REWARD POINT

        $newReward = 0.0;
        foreach ($items as $item) {
            $newReward = $newReward + $item['associatedModel']['reward_point'];
        }
        $oldReward = RewardPoint::where('user_id', auth()->id());
        if (!$oldReward->count()) {
            $reward = new RewardPoint();
            $reward->user_id = auth()->id();
            $reward->point = $newReward;
            $reward->save();
        } else {
            // $amount = $oldReward->amount + $newReward;
            DB::table('reward_points')
                ->where('user_id', auth()->id())
                ->increment('point', $newReward);
        }
        //


        //save order Items

        // $cartItems = \Cart::session(auth()->id())->getContent();

        // foreach ($cartItems as $items) {
        //     $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size]);
        // }


        //payment option
        if (request('payment_method') == 'cash_on_delivery') {
          $referred_by = Cookie::get('referral');
            //redirect to bkash
            //return redirect()->route('some route');

            //send mail

            $order->payment_method = 'cash_on_delivery';
            $order->save();
            $msg = 'Your order has been placed. \n Your order tracking code ' . $order->order_number . ' Total price ' . $order->grand_total . ' BDT. Please pay to +800 or to ..';
            $user = DB::table('users')->where('id', auth()->id())->first();

            $this->sms($user->phone, $msg);
            $cartItems = \Cart::session(auth()->id())->getContent();

            foreach ($cartItems as $items) {
                $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size,'referred_by'=>$referred_by, 'product_commission' => $items->associatedModel->product_commission]);
                $prod = DB::table('products')->where('id', $items->associatedModel->id)->first();
                $this->manage_stock($prod, $items->quentity);
            }

            Mail::to($order->user->email)->send(new OrderPaid($order));
            $order->generateSubOrders();
            \Cart::session(auth()->id())->clear();
            return redirect()->route('home')->withMessage('Order has been placed');
        }

        // Gift Card

        if (request('payment_method') == 'gift_card') {

            $price = \Cart::session(auth()->id())->getTotal();
            $card = GiftCardPurchase::where([
                ['user_id', '=', auth()->id()],
                ['uid', '=', $request->input('uid')]
            ])->get();

            if ($card->count()) {
                foreach ($card as $item) {
                    if ($item->uid === $request->input('uid')) {
                        if ($price <= $item->amount and $item->purchas_done) {
                            DB::table('gift_card_purchases')
                                ->where([
                                    ['user_id', '=', auth()->id()],
                                    ['uid', '=', $request->input('uid')]
                                ])
                                ->decrement('amount', $price);

                            $order->payment_method = 'gift_card';
                            $order->is_paid = 1;
                            $order->save();

                            $msg = 'Your order has been placed. \n Your order tracking code ' . $order->order_number . ' Total price ' . $order->grand_total;
                            $user = DB::table('users')->where('id', auth()->id())->first();
                            $this->sms($user->phone, $msg);

                            $cartItems = \Cart::session(auth()->id())->getContent();
                            foreach ($cartItems as $items) {
                                $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size,'referred_by'=>Cookie::get('referral')]);
                                $prod = DB::table('products')->where('id', $items->associatedModel->id)->first();
                                $this->manage_stock($prod, $items->quentity);
                            }

                            Mail::to($order->user->email)->send(new OrderPaid($order));
                            $order->generateSubOrders();

                            \Cart::session(auth()->id())->clear();
                            return redirect()->route('dash')->withMessage('Order Placed');
                        } else {
                            return redirect()->route('cart.checkout')->withErrors('Not enough in card');
                        }
                    }
                }
                $newCard = GiftCardPurchase::where([
                    ['user_id', '=', auth()->id()],
                    ['uid', '=', $request->input('uid')]
                ])->get();
                foreach ($newCard as $card) {
                    # code...
                    if ($newCard->amount <= 0) {
                        DB::table('gift_card_purchases')
                            ->where([
                                ['user_id', '=', auth()->id()],
                                ['id', '=', $card->id]
                            ])
                            ->delete();
                    }
                }
            } else {
                return redirect()->route('cart.checkout')->withErrors('This Is Not Your Card');
            }
        }
        //Point
        if (request('payment_method') == 'reward_point') {
            $check = RewardPoint::where('user_id', auth()->id())->get();
            $point = floar($check[0]->point / 100) * 100;
            if (\Cart::session(auth()->id())->getTotal() <= $point) {

                DB::table('reward_points')
                    ->where('user_id', auth()->id())
                    ->decrement('point', floor(\Cart::session(auth()->id())->getTotal()/100)*100);
                $order->payment_method = 'reward_point';
                $order->is_paid = 1;
                $order->save();

                $msg = 'Your order has been placed. \n Your order tracking code ' . $order->order_number . ' Total price ' . $order->grand_total;
                $user = DB::table('users')->where('id', auth()->id())->first();
                $this->sms($user->phone, $msg);
                $cartItems = \Cart::session(auth()->id())->getContent();

                foreach ($cartItems as $items) {
                    $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size,'referred_by'=>Cookie::get('referral')]);
                    $prod = DB::table('products')->where('id', $items->associatedModel->id)->first();
                    $this->manage_stock($prod, $items->quentity);
                }

                Mail::to($order->user->email)->send(new OrderPaid($order));
                $order->generateSubOrders();

                \Cart::session(auth()->id())->clear();
                return redirect()->route('home')->withMessage('Order has been placed');
            } else {
                return redirect()->route('home')->withMessage('Not enough in wallet');
            }
        }


        //Wallet
        if (request('payment_method') == 'wallet') {
            $check = Wallet::where('user_id', auth()->id())->get();
            if (\Cart::session(auth()->id())->getTotal() <= $check[0]->amount) {
                DB::table('wallets')
                    ->where('user_id', auth()->id())
                    ->decrement('amount', \Cart::session(auth()->id())->getTotal());
                DB::table('wallets')
                    ->where('user_id', auth()->id())
                    ->increment('amount_spend', \Cart::session(auth()->id())->getTotal());
                $order->payment_method = 'wallet';
                $order->is_paid = 1;
                $order->save();
                $msg = 'Your order has been placed. \n Your order tracking code ' . $order->order_number . ' Total price ' . $order->grand_total;
                $user = DB::table('users')->where('id', auth()->id())->first();
                $this->sms($user->phone, $msg);

                $cartItems = \Cart::session(auth()->id())->getContent();

                foreach ($cartItems as $items) {
                    $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size,'referred_by'=>Cookie::get('referral')]);
                    $prod = DB::table('products')->where('id', $items->associatedModel->id)->first();
                    $this->manage_stock($prod, $items->quentity);
                }

                Mail::to($order->user->email)->send(new OrderPaid($order));
                $order->generateSubOrders();
                \Cart::session(auth()->id())->clear();
                return redirect()->route('home')->withMessage('Order has been placed');
            } else {
                return redirect()->route('home')->withMessage('Not enough in wallet');
            }
        }

        if (request('payment_method') == 'bkash') {
            $order->payment_method = 'bkash';
            $order->save();
            $msg = 'Your order has been placed. \n Your order tracking code ' . $order->order_number . ' Total price ' . $order->grand_total;

            $user = DB::table('users')->where('id', auth()->id())->first();
            $this->sms($user->phone, $msg);

            $cartItems = \Cart::session(auth()->id())->getContent();

            foreach ($cartItems as $items) {
                $order->items()->attach($items->id, ['price' => $items->price, 'quantity' => $items->quantity, 'size'=>$items->attributes->size,'referred_by'=>Cookie::get('referral'), 'product_commission' => $items->associatedModel->product_commission]);
                $prod = DB::table('products')->where('id', $items->associatedModel->id)->first();
                $this->manage_stock($prod, $items->quentity);
            }

            Mail::to($order->user->email)->send(new OrderPaid($order));
            $order->generateSubOrders();

            \Cart::session(auth()->id())->clear();
            return redirect()->route('home')->withMessage('Order has been placed');
        }
        //empty the cart
        //\Cart::session(auth()->id())->clear();

        //send email or sms to customer

        //take user to Order Completion page

        //return redirect()->route('home')->withMessage('Order has been placed');
    }
    
    
    
    public function viewOrderInvoice($order_id)
    {
        $orderDetails = Order::where('id',$order_id)->first();

        //$this->order = $order;

        //$oi = Order::where('id',$order_id)->get();

        $order_Items = DB::table('order_items')->join('products', 'order_items.product_id', '=', 'products.id')->where('order_id',$order_id)->get();

        return view('order_invoice')->with(compact('orderDetails', 'order_Items'));
    }

    public function donwloadInv()
    {
        $orderDetails = Order::where('id', request('id'))->first();

        $order_Items = DB::table('order_items')->join('products', 'order_items.product_id', '=', 'products.id')->where('order_id',request('id'))->get();

        $pdf = PDF::loadView('order_invoice',  ['orderDetails' => $orderDetails, 'order_Items' => $order_Items]);

        return $pdf->download('order_invoice.pdf');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
