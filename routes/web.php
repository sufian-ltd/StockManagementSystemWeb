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

Route::get('/','LoginController@index')->name('index');
Route::get('/home','LoginController@home')->name('home');
Route::get('/brand','AdminController@brand')->name('brand');
Route::get('/editBrand/{id}','AdminController@editBrand')->name('editBrand');
Route::get('/updateBrand/{id}','AdminController@updateBrand')->name('updateBrand');
Route::get('/deleteBrand/{id}','AdminController@deleteBrand')->name('deleteBrand');

Route::get('/category','AdminController@category')->name('category');
Route::get('/editCategory/{id}','AdminController@editCategory')->name('editCategory');
Route::get('/updateCategory/{id}','AdminController@updateCategory')->name('updateCategory');
Route::get('/deleteCategory/{id}','AdminController@deleteCategory')->name('deleteCategory');

Route::get('/shwProduct','AdminController@shwProduct')->name('shwProduct');
// Route::get('/adminProduct','AdminController@adminProduct')->name('adminProduct');
Route::get('/addProductView','AdminController@addProductView')->name('addProductView');
Route::get('/showDeletedProductView','AdminController@showDeletedProductView')->name('showDeletedProductView');
Route::get('/undoDeleteProduct/{id}','AdminController@undoDeleteProduct')->name('undoDeleteProduct');
Route::get('/saveProduct','AdminController@saveProduct')->name('saveProduct');
Route::get('/editProduct/{id}','AdminController@editProduct')->name('editProduct');
Route::get('/updateProduct/{id}','AdminController@updateProduct')->name('updateProduct');
Route::get('/deleteProduct/{id}','AdminController@deleteProduct')->name('deleteProduct');
Route::get('/searchProduct','AdminController@searchProduct')->name('searchProduct');

Route::get('/supplier','AdminController@supplier')->name('supplier');
Route::get('/addSupplier','AdminController@addSupplier')->name('addSupplier');
Route::get('/saveSupplier','AdminController@saveSupplier')->name('saveSupplier');


Route::get('/deliverOrder/{id}','AdminController@deliverOrder')->name('deliverOrder');
Route::get('/cancelOrder/{id}','AdminController@cancelOrder')->name('cancelOrder');
Route::get('/order','AdminController@order')->name('order');

Route::get('/transaction','AdminController@transaction')->name('transaction');
Route::get('/viewReport','AdminController@viewReport')->name('viewReport');
Route::get('/maintenance','AdminController@maintenance')->name('maintenance');
Route::get('/supermaintenance','LoginController@supermaintenance')->name('supermaintenance');

Route::get('/customerAdmin','AdminController@customerAdmin')->name('customerAdmin');

Route::get('/customer','SupplierController@customer')->name('customer');
Route::get('/product/{id}','SupplierController@product')->name('product');
Route::get('/addOrder','SupplierController@addOrder')->name('addOrder');
Route::get('/addPaymentView','SupplierController@addPaymentView')->name('addPaymentView');
Route::get('/savePayment','SupplierController@savePayment')->name('savePayment');
Route::get('/pendingOrder','SupplierController@pendingOrder')->name('pendingOrder');
Route::get('/approvedOrder','SupplierController@approvedOrder')->name('approvedOrder');
Route::get('/cancelOrderSupplier/{id}','SupplierController@cancelOrderSupplier')->name('cancelOrderSupplier');
Route::get('/supplierHome','SupplierController@supplierHome')->name('supplierHome');

Route::get('/superAdminHome','LoginController@superAdminHome')->name('superAdminHome');
Route::get('/superAdminViewAdmin','LoginController@superAdminViewAdmin')->name('superAdminViewAdmin');
Route::get('/superAdminViewSupplier','LoginController@superAdminViewSupplier')->name('superAdminViewSupplier');
Route::get('/superAdminViewCustomer','LoginController@superAdminViewCustomer')->name('superAdminViewCustomer');
Route::get('/addAdmin','LoginController@addAdmin')->name('addAdmin');
Route::get('/showPdf/{id}','AdminController@showPdf')->name('showPdf');