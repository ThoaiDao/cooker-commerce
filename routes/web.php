<?php

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

//trang chu
Route::get('/',[
    'as' => 'trang-chu', 
    'uses' => 'PageController@getIndex'
]);

//Loai san pham
Route::get('loai-san-pham/{type}',[
    'as' => 'loaisanpham',
    'uses' =>'PageController@getLoaiSp'
]);
//chi tiet san pham
Route::get('chi-tiet-san-pham/{id}',[
    'as' => 'chitietsanpham',
    'uses' => 'PageController@getChiTietSp'
]);
//Lien he
Route::get('lien-he',[
    'as' => 'lienhe',
    'uses' => 'PageController@getLienHe'
]);
// gioi thieu
Route::get('gioi-thieu',[
    'as' => 'gioithieu',
    'uses' => 'PageController@getGioiThieu'
]);

//Dang nhap va tai khoan
Route::post('dang-nhap',[
     'as'=>'login_',
     'uses'=>'UserController@postDangNhap'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'UserController@logout'
]);
Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignIn'
]);
Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignIn'
]);
Route::get('my-account',[
    'as'=>'my-account',
    'uses'=>'PageController@getMyAccount'
]);

Route::get('dangnhap',[
    'as'=>'login',
    'uses'=>'UserController@getDangNhap'
]);
//Cart
Route::get('gio-hang',[
    'as'=>'gio-hang',
    'uses'=>'CartController@getGioHang'
]);
Route::get('cart/add/{id}',[
    'as' => 'cart',
    'uses' =>'CartController@addItem'
]);

Route::get('cart/delete/{id}',[
    'as'=>'remove',
    'uses'=>'CartController@deleteItem'
]);

Route::get('cart/update',[
    'as'=>'update',
    'uses'=>'CartController@update'
]);
//admin middleware start
Route::group(['prefix' => 'admin', 'middleware'=> ['auth' => 'admin']], function () {
    Route::get('admin',[
        'as' => 'admin-trang',
        'uses'=>'AdminLoginController@index'
        ]);
    Route::get('profile',[
        'as' => 'profile',
        'uses'=>'AdminLoginController@profile'
        ]);
    Route::get('addProduct',[
        'as' => 'addProduct',
        'uses'=>'AdminLoginController@addProduct'
        ]);
    Route::post('saveProduct',[
        'as' => 'saveProduct',
        'uses'=>'AdminLoginController@saveProduct'
    ]);
    
    Route::get('editProduct/{id}',[
        'as' => 'editProduct',
        'uses'=>'AdminLoginController@editProduct'
    ]);
    Route::post('updateProduct/{id}',[
        'as' => 'updateProduct',
        'uses'=>'AdminLoginController@updateProduct'
    ]);
    Route::get('deleteProduct/{id}',[
        'as'=>'deleteProduct',
        'uses'=>'AdminLoginController@deleteProduct'
    ]);
    Route::get('listCustomer',[
        'as' => 'customer_list',
        'uses'=>'AdminLoginController@listCustomer'
    ]);
    Route::get('user',[
        'as' => 'member_list',
        'uses'=>'AdminLoginController@listUser'
    ]);
    Route::get('user',[
        'as' => 'member_list',
        'uses'=>'AdminLoginController@listUser'
    ]);
    //Search
    Route::get('searchProduct',[
        'as' => 'searchProduct',
        'uses'=>'AdminLoginController@searchProduct'
    ]);
    Route::get('search-User',[
        'as' => 'search_User',
        'uses'=>'AdminLoginController@search_user'
    ]);
    Route::get('searchCustomer',[
        'as' => 'searchCustomer',
        'uses'=>'AdminLoginController@searchCustomer'
    ]);
    Route::get('listOrder',[
        'as' => 'listOrder',
        'uses'=>'AdminLoginController@listOrder'
    ]);
});
//Tim kiem
Route::get('timkiem',[
    'as' => 'search',
    'uses'=>'SearchController@search'
]);
//Tai khoan
Route::get('thongtintaikhoan/{id}',[
    'as' => 'tt_taikhoan',
    'uses'=>'ProfileController@profile'
]);

Route::post('updateProfile/{id}',[
    'as' => 'updateProfile',
    'uses'=>'AdminLoginController@updateProfile'
]);


Route::get('quanlidonhang/{id}',[
    'as' => 'ql_donhang',
    'uses'=>'ProfileController@order'
]);


//Checkout
Route::get('checkout',[
    'as' => 'checkout',
    'uses'=>'CheckoutController@checkOut'
]);
Route::get('check_out',[
    'as'=>'check_out',
    'uses'=>'CheckoutController@getCheckout'
]);
Route::post('check_out',[
    'as'=>'check_out',
    'uses'=>'CheckoutController@postCheckOut'
]);



