<?php

use App\Order;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');

Route::get('/cron', function () {
    return view('cron');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/delete/{itemId}', 'CartController@delete')->name('cart.destroy');

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');

Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon')->middleware('auth');

Route::resource('orders', 'OrderController')->middleware('auth','CheckReferral');

Route::resource('shops', 'ShopController')->middleware('auth');

Route::resource('wholesales', 'WholesaleController')->middleware('auth');

Route::resource('wishlists', 'WishlistController')->middleware('auth');

Route::get('/products/search', 'ProductController@search')->name('products.search');

Route::get('/product/{prodId}', 'ProductSinglePage@index')->name('prod.single');


Route::group(['prefix' => 'admin'], function () {

    Route::get('expenses/print/{id}','ExpenseController@index')->name('expenses.print');
    Route::get('expenses/publish/{id}','ExpenseController@index2')->name('expenses.print2');
    Route::get('/pay-commision/{id}', 'SubOrderController@pay2')->name('pay.com');

    Voyager::routes();

    // Route::get('/order/pay/{suborder}', 'SubOrderController@pay')->name('order.pay');
});


Route::group(['prefix' => 'seller', 'middleware' => 'auth', 'as' => 'seller.', 'namespace' => 'Seller'], function () {

    Route::redirect('/', 'seller/orders');

    Route::resource('/orders',  'OrderController');

    Route::get('/orders/delivered/{suborder}',  'OrderController@markDelivered')->name('order.delivered');
});


Route::group(['prefix' => 'inventory', 'namespace' => 'Inventory'], function () {

    Route::redirect('/', 'inventory');

    Route::resource('/',  'InventoryController');

    // Route::get('/orders/delivered/{suborder}',  'OrderController@markDelivered')->name('order.delivered');
});



Route::resource('products', 'ProductController');

Route::get('/user/dashboard', 'DhashboardController@index')->name('dash')->middleware('auth');

Route::get('/gifts', 'GiftPageController@index')->name('gift');

Route::resource('gift-cards', 'GiftCardPurchaseController')->middleware('auth');

Route::get('/login/affiliate', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/affiliate', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/affiliate', 'Auth\LoginController@affLogin');
Route::post('/register/affiliate', 'Auth\RegisterController@createAffUser');

Route::view('/affiliate', 'affiliate.index');
Route::get('/reviews/{prodId}', 'ReviewsController@make_review')->middleware('auth')->name('make-review');

Route::view('/wholesale/products', 'wholesale')->name('wholesale.prod');
Route::get('/pages/{id}', 'CustomPagesController@index')->name('custom.pages');

Route::view('/refurbish/products', 'refurbish')->name('refurbished.prod');
Route::get('/pages/{id}', 'CustomPagesController@index')->name('custom.pages');

Route::get('/project365', 'Project365Controller@index')->name('project365');
Route::get('/project/posts/{slug}', 'Project365Controller@postssingle')->name('post');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/contact-post', 'ContactController@store')->name('contact.post');

Route::get('/site-reviews', 'SiteReviewController@index')->name('site.review');
Route::get('/site-reviews/store', 'SiteReviewController@store')->name('site.review.store');


Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/faq/search', 'FaqController@search')->name('faq.search');
Route::get('/shop/products', 'ShopPage@index')->name('shop.prod');
// Route::view('/how-to-tutorials', 'how-to')->name('how');
Route::view('/video/{id}', 'video')->name('video');
Route::view('/ebook', 'ebook')->name('ebook');
Route::get('/ebook/request', 'EbookRequestController@index')->name('ebook.r');

//Route::get('/home', 'HomeController@index')->name('home');
// Route::view('/chat', 'chat')->middleware('auth')->name('chat');
Route::get('/chat', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return view('chat');
})->middleware('auth')->name('chat');
Route::resource('messages', 'MessageController')->only(['index','store']);

Route::get('userlist', 'MessageController@user_list')->name('user.list');
Route::get('usermessage/{id}', 'MessageController@user_message')->name('user.message');
Route::post('senemessage', 'MessageController@send_message')->name('user.message.send');
Route::post('senemessage-admin', 'MessageController@send_message2')->name('user.message.send');

Route::post('/ini-msg/{msg}/{to}', 'MessageController@init_message')->name('init.msg');
Route::get('/affiliate-register','Affiliates@index');
Route::post('/affiliate-apply','Affiliates@store');


// Route::get('/webs', function () {
//     Artisan::call('websocket:serve');
// });

Route::get('/posts/{id}', 'Project365Controller@post_by_cat',)->name('post.by.cat');
Route::get('/product/attr/{id}', 'ProductController@by_attr')->name('prod.attr');
Route::get('/apply-for-financing', 'FinanceRequestController@index')->name('f.req');
Route::post('/make-finance-request', 'FinanceRequestController@store')->name('f.p.req');
Route::view('/edit-profile', 'auth.edit-profile')->middleware('auth')->name('edit-profile');
Route::post('/update-profile', 'UpdateProfile@index')->middleware('auth')->name('update-profile');


Route::get('/view-pdf-invoice/{id}','OrderController@viewOrderInvoice')->name('invoice.show');
Route::get('/download-invoice/{id}','OrderController@donwloadInv')->name('invoice.download');