<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//FRONTEND
Route::any('', 'FrontendController_Home@index');
Route::post('/public/service', 'FrontendController_Home@homeservice');
//BACKTEND
Route::any('/home', 'BackendController_Home@index');


//AUTH

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
 Route::get('auth/register', 'Auth\AuthController@getRegister');
 Route::post('auth/register', 'Auth\AuthController@postRegister');

 	// Services
 Route::get('/admin/services', 'ServiceController@services');
 Route::get('/admin/HairTreatment', 'HairTreatmentController@HairTreatment');
 
 //Services Post
 Route::post('/addserv', 'ServiceController@add');
 Route::post('/addHair', 'HairTreatmentController@addHair');

 


// Branch
 Route::get('/admin/FHomes', 'FHOMESController@FHomes');
 Route::get('/admin/Road1', 'ROAD1Controller@Road1');


 
//Post
Route::get('/admin/postController', 'postController@post');

// Products
Route::get('/admin/Products', 'ProductsController@Products');

//Monthly Income
Route::get('/admin/Monthly', 'MonthlyController@Monthly');

//CustomersList
Route::get('/admin/CustomersList', 'CustomersListController@CustomersList');

//About
Route::get('/admin/About', 'AboutController@About');

// BIR FORM


// brach inventory

Route::get('/admin/inventoryroad1', 'inventroad1Controller@inventroad1');
// FrontEnd Branch

Route::get('/admin/servicehome', 'ServiceHomeController@index')->name('admin.servicehome');



// Staff routes
Route::get('/admin/Staff', 'StaffController@labasbeau');
Route::post('/admin/Staff', 'StaffController@Staff');
Route::post('/staffupdate', 'StaffController@Update');
Route::get('/delete/{Employee_ID}', 'StaffController@delete');

// Products Routes
Route::get('/admin/Products', 'ProductsController@Prod');
Route::post('/admin/Products', 'ProductsController@Products');
Route::post('/Productsupdate', 'ProductsController@update');
Route::get('/DELETE/{id}', 'ProductsController@DELETE');


//Transaction Routes


Route::get('/admin/Transaction', 'TransactionController@Transac');
Route::post('/admin/Transaction/gagoka', 'TransactionController@Transaction');
Route::post('/TransactionUpdate', 'TransactionController@Update');
Route::get('/DELETES/{id}', 'TransactionController@DELETES');





Route::get('/admin/users', 'usersController@users');

// Transaction register
Route::get('/admin/users', 'confirmController@bago');
Route::post('/admin/users', 'confirmController@users');
Route::get('/admin/Transaction/new','ArchiveController@history');


// Frontend Branch
Route::get('/manager/Road1', 'Road1InventoryController@InventoryRoad1');
Route::post('/manager/Road1', 'Road1InventoryController@AddingProducts');


// Branch Customer

Route::get('/manager/Customer', 'CustomerRecordController@CustomerRecord');
Route::post('/manager/Customer', 'CustomerRecordController@AddingCustomer');
Route::get('/public/Customer/Search', 'CustomerRecordController@CustomerRecord');

Route::get('/admin/homeservice', 'FrontendController_Home@View');
Route::post('/public/subscribe', 'FrontendController_Home@subscribe');
Route::get('/admin/subscribe', 'FrontendController_Home@Views');


// Admin Dashboard
Route::get('/admin/dashboard', 'admindashboardController@admindash');


Route::post('/admin/Events', 'EventsController@Events');
Route::post('/adminevents', 'EventsController@eupdate');
Route::get('/admin/Events', 'EventsController@Viewsss');
Route::get('/DELETESS/{id}', 'EventsController@DELETESS');



// Dashboard

Route::get('/admin/Branch/Road1', 'admindashboardController@Road1');
Route::get('/admin/Branch/Tungko', 'admindashboardController@Tungko');
Route::get('/admin/Branch/Sampol', 'admindashboardController@Sampol');
Route::get('/branch/road1graph', 'admindashboardController@road1anal');
Route::get('/branch/tungkograph', 'admindashboardController@tungkoanal');
Route::get('/branch/sapangpalaygraph', 'admindashboardController@sapangpalayanal');

// Archive s


Route::get('/admin/archivelist','ArchiveController@View');


Route::get('/admin/Transaction', 'TransactionController@Dropser');

Route::get('/admin/Transaction/{id}', 'ArchiveController@Archive'); 

Route::get('/admin/Staff/{id}', 'StaffController@documents');
		

// Service Final


Route::get('/admin/Service_and_Category', 'ServiceCategoryController@View');
Route::post('/admin/Service_and_Category', 'ServiceCategoryController@Add');

Route::get('/DELETESSS/{id}', 'ServiceCategoryController@DELETESSS');

Route::post('/admin/Transaction', 'TransactionController@finalSave'); 

Route::post('/admin/users/okna', 'confirmController@changepass');

Route::get('/admin/archivelist/{id}', 'ArchiveController@staffAchive'); 
Route::get('/admin/Staff/{id}', 'ArchiveController@staffrestore'); 
Route::post('/admin/Service_and_Category/service', 'ServiceCategoryController@sersave');

Route::post('/updateser', 'ServiceCategoryController@Servupdate');



Route::get('/admin/Transaction', 'TransactionController@face'); 


Route::post('/road1/transactionlist/save', 'transactionlistController@finalna'); 
Route::get('/road1/transactionlist', 'transactionlistController@list'); 
Route::get('/road1/transactionlist/saves', 'transactionlistController@search'); 


Route::get('/admin/Login', 'BackendController_Home@logintrails');

// //Password Reset
// Route::get('password/email', 'Auth\PasswordController@getEmail');
// Route::post('password/email', 'Auth\PasswordController@postEmail');

// // Password reset routes...
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
// Route::post('password/reset', 'Auth\PasswordController@postReset');	