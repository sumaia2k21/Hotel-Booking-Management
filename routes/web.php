<?php

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\backend\Catagory_Controller;
use App\Http\Controllers\backend\Facilities_controller;
use App\Http\Controllers\backend\Hotel_Controller;
use App\Http\Controllers\backend\Page_controller;
use App\Http\Controllers\backend\Reg_user_controller;
use App\Http\Controllers\backend\Room_controller;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\About_controller;
use App\Http\Controllers\frontend\Contact_controller;
use App\Http\Controllers\frontend\indexcontroller;
use App\Http\Controllers\frontend\Main_controller;
use App\Http\Controllers\frontend\Service_controller;
use App\Http\Controllers\frontend\User_Controller;
use App\Http\Controllers\mastercontroller;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin/login',[UserController ::class,'login'])->name('admin.login');
Route::post('/admin/loginpost',[UserController ::class,'loginpost'])->name('admin.login.post');

Route::group(['prefix'=>'/admin','middleware'=>['auth','role']],function(){
     //admin start
     Route::get('/',[mastercontroller ::class,'master'])->name('master');
     Route::get('/dashboard',[mastercontroller ::class,'dashboard'])->name('dashboard');
     //logout
     Route::get('/logout',[UserController ::class,'logout'])->name('admin.logout');
     //profile
     Route::get('/profilecreate',[mastercontroller ::class,'profilecreate'])->name('profile');
   
     //Catagory start
     Route::get('/add_catagory',[Catagory_Controller::class,'add_catagory'])->name('add_catagory');
     //db add_catagory
     Route::post('/catagory_list',[Catagory_Controller::class,'catagory_list'])->name('catagory_list');
     //end db add_catagory
     Route::get('/catagory/delete/{id}',[Catagory_Controller::class,'delete'])->name('catagory.delete');
     
     Route::get('/manage_catagory',[Catagory_Controller::class,'manage_catagory'])->name('manage_catagory');
     //catagory under room start
     Route::get('/catagory/{id}/rooms',[Catagory_Controller::class,'allRoom'])->name('catagory.room');
     //end
     //catagory end
     //Facilities start
     Route::get('/add_facilities',[Facilities_controller::class,'add_facilities'])->name('add_facilities');
     //db facility start
     Route::post('/facility_list',[Facilities_controller::class,'facility_list'])->name('facility_list');
     //db facility end
     
     Route::get('/facilities/{id}/delete',[Facilities_controller::class,'delete'])->name('facility.delete');
     Route::get('/facilities/{id}/edit',[Facilities_controller::class,'edit'])->name('facility.edit');
     Route::put('/facilities/{id}/update',[Facilities_controller::class,'update'])->name('facility.update');

     Route::get('/manage_facilities',[Facilities_controller::class,'manage_facilities'])->name('manage_facilities');
     //facilities end

     //Room start
     Route::get('/add_room',[Room_controller::class,'add_room'])->name('add_room');
     //db add room start
     Route::post('/roomlist',[Room_controller::class,'roomlist'])->name('roomlist');
     //db end

     Route::get('/room/delete/{id}',[Room_controller::class,'delete'])->name('room.delete');
     Route::get('/room/edit/{id}',[Room_controller::class,'edit'])->name('room.edit');
     Route::put('/room/update/{id}',[Room_controller::class,'update'])->name('room.update');

     Route::get('/manage_room',[Room_controller::class,'manage_room'])->name('manage_room');
     //room end
     //page start
     Route::get('/about_us',[Page_controller::class,'about_us'])->name('about_us');
     
     Route::get('/contact_us',[Page_controller::class,'contact_us'])->name('contact_us');
     Route::post('/contact_us/store',[Page_controller::class,'contact_uspost'])->name('contact_us.store');
     // Route::get('/read_enquiry',[Page_controller::class,'read_enquiry'])->name('read_enquiry');
     //page end
     //booking start
     Route::get('/new_booking',[Booking_controller::class,'new_booking'])->name('new_booking');
     Route::get('/all_booking',[Booking_controller::class,'all_booking'])->name('all_booking');
     Route::get('/booking/delete/{id}',[Booking_controller::class,'delete'])->name('booking.delete');
     //booking end
     //hotelinfo form start
     Route::get('/hotelinfo',[Hotel_Controller::class,'hotelinfo'])->name('hotelinfo');
     Route::post('/hotelinfo/store',[Hotel_Controller::class,'hotelinfopost'])->name('hotelinfo.store');
     //hotelinfolist
     Route::get('/hotelinfo_list',[Hotel_Controller::class,'hotelinfo_list'])->name('hotelinfo_list');
     //end 
     //user 
     Route::get('/customers',[UserController::class,'customerlist'])->name('customer.list');
     Route::get('/users',[UserController::class,'userlist'])->name('user.list');
     //  admin end
});
   



//forntend
Route::get('/index',[indexcontroller::class,'index'])->name('index');
//home
Route::get('/home',[indexcontroller::class,'home'])->name('home');
//about
Route::get('/about',[About_controller::class,'about'])->name('about');
//contact
Route::get('/contact',[Contact_controller::class,'contact'])->name('contact');
// read quiray
Route::get('/read_enquiry',[Contact_controller::class,'read_enquiry'])->name('read_enquiry');
// read quiray
//db contact us start
Route::post('/readenquiry/store',[Contact_controller::class,'readenquiry'])->name('readenquiry');

Route::get('/enquiry/delete/{id}',[Contact_controller::class,'delete'])->name('enquiry.delete');
//db end contact
//service start
Route::get('/survice',[Service_controller::class,'survice'])->name('survice');
//service end


Route::group(['prefix'=>'/guest','middleware'=>'auth'],function(){
     //room satrt
     Route::get('/room',[Room_controller::class,'room'])->name('room');

     //logout
     Route::get('/guest_logout',[User_Controller ::class,'guestlogout'])->name('guest.logout');

});


//  frontend user login
// user-login
// Route::get('/user_login',[User_Controller::class,'user_login'])->name('user_login');

//  Route::get('/user_reg',[User_Controller::class,'user_reg'])->name('user_reg');

// view profile start
 Route::get('/viewprofile',[User_Controller::class,'viewprofile'])->name('viewprofile');
 //My Booking details
 Route::get('/my_booking',[User_Controller::class,'mybooking'])->name('mybooking.status');


//signup satrt
Route::get('/signup',[User_Controller::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[User_Controller::class,'signupformpost'])->name('user.signup.store');

Route::post('/dologin',[User_Controller::class,'dologin'])->name('user.do.login');




//booking form start
Route::get('/bookingform/{id}',[Booking_controller::class,'bookingform'])->name('bookingform');
Route::post('/booking/store',[Booking_controller::class,'bookingstore'])->name('booking.store');

//catagory under room (frontend)
Route::get('/category_wise-room/{id}',[Catagory_Controller::class,'catagory_under_room'])->name('catagory-under-room');



Route::get('/testroom',[Main_controller::class,'testroom'])->name('testroom');









