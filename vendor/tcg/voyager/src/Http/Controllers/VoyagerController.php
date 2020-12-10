<?php

namespace TCG\Voyager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use League\Flysystem\Util;
use TCG\Voyager\Facades\Voyager;

class VoyagerController extends Controller
{
    public function index()
    {
        $this_year_orders = DB::table('orders')->whereYear('created_at', '=', date('Y'))->get();

        $this_month_orders = DB::table('orders')->whereMonth('created_at', '=', date('m'))->get();

        $order_today = DB::table('orders')->whereDay('created_at', '=', date('d'))->get();

        //vendors

        $this_year_orders_seller = DB::table('sub_orders')->whereYear('created_at', '=', date('Y'))->where('seller_id', auth()->id())->get();

        $this_month_orders_seller = DB::table('sub_orders')->whereMonth('created_at', '=', date('m'))->where('seller_id', auth()->id())->get();

        $order_today_seller = DB::table('sub_orders')->whereDay('created_at', '=', date('d'))->where('seller_id', auth()->id())->get();

        $total_item = 0;
        $pending = 0;
        $profit_m = 0;
        $profit_y = 0;

        $orders = DB::table('orders')->get();
        foreach($orders as $ord){
            if($ord->is_paid){
                $total_item = $total_item + $ord->item_count;
            }
            if($ord->status === 'pending' || $ord->status === 'processing'){
                $pending = $pending + 1;
            }
        }

        //Vendor
        $s_total_item = 0;
        $s_pending = 0;
        $s_profit_m = 0;
        $s_profit_y = 0;

        $s_orders = DB::table('sub_orders')->where('seller_id', auth()->id())->get();
        foreach($s_orders as $ord){
            if($ord->status !== 'pending' || $ord->status !== 'processing'){
                $s_total_item = $s_total_item + $ord->item_count;
            }
            if($ord->status === 'pending' || $ord->status === 'processing'){
                $s_pending = $s_pending + 1;
            }
        }
        foreach($this_month_orders_seller as $ord){
            if($ord->status !== 'pending' || $ord->status !== 'processing'){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $s_profit_m = $s_profit_m + $prod->price - $prod->buying_price;
                }
            }
        }
        foreach($this_year_orders_seller as $ord){
            if($ord->status !== 'pending' || $ord->status !== 'processing'){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $s_profit_y = $s_profit_y + $prod->price - $prod->buying_price;
                }
            }
        }


        foreach($this_month_orders as $ord){
            if($ord->is_paid){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $profit_m = $profit_m + $prod->price - $prod->buying_price;
                }
            }
        }
        foreach($this_year_orders as $ord){
            if($ord->is_paid){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $profit_y = $profit_y + $prod->price - $prod->buying_price;
                }
            }
        }
        $exp_m = DB::table('expenses')->whereMonth('created_at', '=', date('m'))->sum('amount');
        $exp_y = DB::table('expenses')->whereYear('created_at', '=', date('Y'))->sum('amount');
        $rev_m = $profit_m - $exp_m;
        $rev_y = $profit_y - $exp_y;

        //return view('inventory.index', );

        return Voyager::view('voyager::index', [
            'order_by_month' => $this_month_orders,
            'order_today' => $order_today,
            'this_year_orders' =>$this_year_orders,

            'seller_order_by_month' => $this_month_orders_seller,
            'seller_order_today' => $order_today_seller,
            'seller_this_year_orders' =>$this_year_orders_seller,

            'pending' => $pending,
            'item' => $total_item,
            'month_profit' => $profit_m,
            'year_profit' => $profit_y,

            's_pending' => $s_pending,
            's_item' => $s_total_item,
            's_month_profit' => $s_profit_m,
            's_year_profit' => $s_profit_y,

            'exp_year' => $exp_y,
            'exp_month' => $exp_m,
            'rev_m' => $rev_m,
            'rev_y' => $rev_y
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('voyager.login');
    }

    public function upload(Request $request)
    {
        $fullFilename = null;
        $resizeWidth = 1800;
        $resizeHeight = null;
        $slug = $request->input('type_slug');
        $file = $request->file('image');

        $path = $slug.'/'.date('F').date('Y').'/';

        $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());
        $filename_counter = 1;

        // Make sure the filename does not exist, if it does make sure to add a number to the end 1, 2, 3, etc...
        while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
            $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension()).(string) ($filename_counter++);
        }

        $fullPath = $path.$filename.'.'.$file->getClientOriginalExtension();

        $ext = $file->guessClientExtension();

        if (in_array($ext, ['jpeg', 'jpg', 'png', 'gif'])) {
            $image = Image::make($file)
                ->resize($resizeWidth, $resizeHeight, function (Constraint $constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            if ($ext !== 'gif') {
                $image->orientate();
            }
            $image->encode($file->getClientOriginalExtension(), 75);

            // move uploaded file from temp to uploads directory
            if (Storage::disk(config('voyager.storage.disk'))->put($fullPath, (string) $image, 'public')) {
                $status = __('voyager::media.success_uploading');
                $fullFilename = $fullPath;
            } else {
                $status = __('voyager::media.error_uploading');
            }
        } else {
            $status = __('voyager::media.uploading_wrong_type');
        }

        // echo out script that TinyMCE can handle and update the image in the editor
        return "<script> parent.helpers.setImageValue('".Voyager::image($fullFilename)."'); </script>";
    }

    public function assets(Request $request)
    {
        try {
            $path = dirname(__DIR__, 3).'/publishable/assets/'.Util::normalizeRelativePath(urldecode($request->path));
        } catch (\LogicException $e) {
            abort(404);
        }

        if (File::exists($path)) {
            $mime = '';
            if (Str::endsWith($path, '.js')) {
                $mime = 'text/javascript';
            } elseif (Str::endsWith($path, '.css')) {
                $mime = 'text/css';
            } else {
                $mime = File::mimeType($path);
            }
            $response = response(File::get($path), 200, ['Content-Type' => $mime]);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        }

        return response('', 404);
    }
}
