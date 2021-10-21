<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderAdminController;

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
Route::post('/shop/cart/empty',[CartController::class,'EmptyCart']);// get the contact page
Route::get('/shop/cart/remove/{id}',[CartController::class,'RemoveProduct']);//go to gallery and get images
Route::post('/shop/products/AddtoCart',[CartController::class,'AddtoCart']);//Add product to cart using ajax
Route::get('/shop/cart',[CartController::class,'GetCart']);// get the cart page
/*************************************************************************************************** */
/***********************************    shop      ************************************************** */
/*************************************************************************************************** */
Route::get('/shop/home',[ShopController::class,'GetShop']);//get the home page
Route::get('/shop/products',[ShopController::class,'GetProducts']);//get the products page
Route::get('/shop/customize',[ShopController::class,'GetCustomize']);// get the csutomize page
Route::get('/shop/contact',[ShopController::class,'Getcontact']);// get the contact page
Route::get('/shop/login',[ShopController::class,'GetLogin']);//go to the login page
Route::get('/shop/register',[ShopController::class,'GetRegister']);//go to the login page
Route::post('/shop/search',[ShopController::class,'SearchProduct']);//go to the login page

Route::get('/lang/{lang}',[ShopController::class,'ChangeLang']);//go to the login page
/*************************************************************************************************** */
/***********************************    Order      ************************************************* */
/*************************************************************************************************** */
Route::post('/shop/checkout/place-delivery',[OrderController::class,'PlaceOrderDelivery']);//delivery temp customer
Route::post('/shop/checkout/place-take',[OrderController::class,'PlaceOrderTake']);//takeaway temp customer
Route::post('/shop/checkout/place_deafult',[OrderController::class,'PlaceOrderDefault']);//default shipping address
Route::post('/shop/checkout/place-takeaway-customer',[OrderController::class,'PlaceOrderCustomerTakaway']);//takeaway customer
Route::post('/shop/checkout/place-newaddress',[OrderController::class,'PlceOrderNewAddress']);// new address delivery

Route::post('/shop/customize/build',[OrderController::class,'BuildCake']);// build customized cake

/*************************************************************************************************** */
/***********************************    Customer      ********************************************** */
/*************************************************************************************************** */
Route::post('/shop/register/signup',[CustomerController::class,'SignUp']);//go to the login page
Route::get('/shop/logout',[CustomerController::class,'Logout']);//go to the logout page
Route::post('/shop/login/signin',[CustomerController::class,'Sigin']);//sign in customer
Route::post('/shop/contact/send',[CustomerController::class,'SendMessage']);//sign in customer


Route::group(['middleware'=>['CustomerCheckout']],function () {//if not logged in as customer
    Route::get('/shop/checkout',[CustomerController::class,'CheckOut']);//go to the checkout page 
});


/*************************************************************************************************** */
/***********************************    Admin     ************************************************** */
/*************************************************************************************************** */

Route::view('/admin/login','admin.login');//login view
Route::post('/admin/auth',[AdminController::class,'Auth']);//login admin


Route::group(['middleware'=>['AuthMiddleware']],function () {//if not logged in as admin

/****************  Admin Controller ****************************************/
Route::get('/admin/logout',[AdminController::class,'Logout']);//go to gallery and get images
Route::post('/admin/change',[AdminController::class,'ChangePassword']);//go to gallery and get images
Route::view('/admin/changepass','admin.changepass');//get the change password form
Route::view('/admin/forget','admin.forget');//forgetpassword view
Route::post('/admin/email',[AdminController::class,'SendEmail']);//login admin
Route::view('/admin/register','admin.register');//get the registration form
Route::post('admin/new_admin',[AdminController::class,'NewAdmin']);//add new admin
Route::get('/admin/dashboard',[AdminController::class,'GetDashboard']);//go to gallery and get images
Route::view('/admin/register','admin.register');//get the registration form
/**************************************************************************************/


/****************  Order Controller ****************************************/
Route::get('/admin/order',[OrderAdminController::class,'GetOrders']);//get the orders list
Route::get('/admin/order/{id}',[OrderAdminController::class,'OrderDetails']);//view category id passed


/****************  Gallery Controller  ****************************************/
Route::post('/admin/gallery/delete',[GalleryController::class,'RemoveImage']);//go to gallery and get images
Route::post('/admin/upload',[GalleryController::class,'Upload_Image']);//add new admin
Route::get('/admin/gallery',[GalleryController::class,'GetGallery']);//go to gallery and get images
/**************************************************************************************/


/****************  Category Controller ****************************************/
Route::get('/admin/addcat',[CategoryController::class,'GetCategories']);//get the registration form
Route::get('/admin/deletecat/{id}',[CategoryController::class,'DeleteCategory']);//delete category id passed
Route::get('/admin/viewcat/{id}',[CategoryController::class,'ViewCategory']);//view category id passed
Route::post('/admin/addcategory',[CategoryController::class,'AddCategory']);//insert new product
/**************************************************************************************/


/****************  Product Controller ****************************************/
Route::get('/admin/add',[ProductController::class,'GetAddForm']);//get the add new item form
Route::get('/admin/list',[ProductController::class,'GetProducts']);//get all the products
Route::post('/admin/additem',[ProductController::class,'AddItem']);//insert new product
Route::get('/admin/list/delete/{id}',[ProductController::class,'DeleteProduct']);//delete product id passed
Route::get('/admin/list/view/{id}',[ProductController::class,'ViewProduct']);//view product id passed
Route::post('/admin/updateprod',[ProductController::class,'UpdateProduct']);//update product
/**************************************************************************************/

});//end middleware