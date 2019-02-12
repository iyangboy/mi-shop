<?php

// zingfront 面试题
Route::get('zingfront/word-pairs', 'ZingFront\WordPairsController@index')->name('word-pairs.index');
Route::post('zingfront/word-pairs', 'ZingFront\WordPairsController@store')->name('word-pairs.store');
Route::get('zingfront/num-sum', 'ZingFront\NumSumController@index')->name('num-sum.index');
Route::post('zingfront/num-sum', 'ZingFront\NumSumController@store')->name('num-sum.store');
Route::get('zingfront/jerry', function () {
    return view('zingfront.jerry');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
/* 提示栏信息
session()->flash('success', 'This is a success alert—check it out!');
session()->flash('danger', 'This is a danger alert—check it out!');
session()->flash('warning', 'This is a warning alert—check it out!');
session()->flash('info', 'This is a info alert—check it out!');
*/

/*
 * 支付测试
 */
/*
Route::get('alipay', function () {
    return app('alipay')->web([
        'out_trade_no' => time(),
        'total_amount' => '1',
        'subject'      => 'test subject - 测试',
    ]);
});
*/

// 秒杀商品-当秒杀商品有剩余库存时才校验登录凭证
Route::post('seckill_orders', 'OrdersController@seckill')->name('seckill_orders.store')->middleware('random_drop:50');

// Route::get('/', 'PagesController@root')->name('root');
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products', 'ProductsController@index')->name('products.index');

// 用户身份验证相关的路由
Auth::routes();
/*
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
*/

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function () {
    // 客户地址
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

    // 商品
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

    // 购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    // 订单
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
    Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
    Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
    Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');

    // 支付
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
    Route::post('payment/{order}/installment', 'PaymentController@payByInstallment')->name('payment.installment');

    // 优惠券
    Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');

    // 众筹订单
    Route::post('crowdfunding_orders', 'OrdersController@crowdfunding')->name('crowdfunding_orders.store');

    // 分期付款
    Route::get('installments', 'InstallmentsController@index')->name('installments.index');
    Route::get('installments/{installment}', 'InstallmentsController@show')->name('installments.show');
    Route::get('installments/{installment}/alipay', 'InstallmentsController@payByAlipay')->name('installments.alipay');
    Route::get('installments/alipay/return', 'InstallmentsController@alipayReturn')->name('installments.alipay.return');

    // 秒杀商品
    // Route::post('seckill_orders', 'OrdersController@seckill')->name('seckill_orders.store');
});
Route::post('installments/alipay/notify', 'InstallmentsController@alipayNotify')->name('installments.alipay.notify');

Route::post('installments/wechat/refund_notify', 'InstallmentsController@wechatRefundNotify')->name('installments.wechat.refund_notify');

Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');

Route::get('products/{product}', 'ProductsController@show')->name('products.show');
