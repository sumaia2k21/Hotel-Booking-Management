<?php

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\backend\Catagory_Controller;
use App\Http\Controllers\backend\Facilities_controller;
use App\Http\Controllers\backend\Page_controller;
use App\Http\Controllers\backend\Reg_user_controller;
use App\Http\Controllers\backend\Room_controller;
use App\Http\Controllers\frontend\About_controller;
use App\Http\Controllers\frontend\Contact_controller;
use App\Http\Controllers\frontend\indexcontroller;
use App\Http\Controllers\frontend\Main_controller;
use App\Http\Controllers\frontend\Service_controller;
use App\Http\Controllers\mastercontroller;
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
Route::get('/',[mastercontroller ::class,'master'])->name('master');
Route::get('/home',[mastercontroller ::class,'home'])->name('home');
//profile
Route::get('/profilecreate',[mastercontroller ::class,'profilecreate'])->name('profile');
//login
Route::get('/login',[mastercontroller ::class,'login'])->name('login');


//Catagory start
 Route::get('/add_catagory',[Catagory_Controller::class,'add_catagory'])->name('add_catagory');
 //db add_catagory
Route::post('/catagory_list',[Catagory_Controller::class,'catagory_list'])->name('catagory_list');
//end db add_catagory
 Route::get('/manage_catagory',[Catagory_Controller::class,'manage_catagory'])->name('manage_catagory');
//catagory end

//Facilities start
 Route::get('/add_facilities',[Facilities_controller::class,'add_facilities'])->name('add_facilities');
 //db facility start
 Route::post('/facility_list',[Facilities_controller::class,'facility_list'])->name('facility_list');
 //db facility end
Route::get('/manage_facilities',[Facilities_controller::class,'manage_facilities'])->name('manage_facilities');
//facilities end

//Room start
Route::get('/add_room',[Room_controller::class,'add_room'])->name('add_room');
//db add room start
Route::post('/roomlist',[Room_controller::class,'roomlist'])->name('roomlist');
//db end

 Route::get('/manage_room',[Room_controller::class,'manage_room'])->name('manage_room');
 
//room end

//page start
 Route::get('/about_us',[Page_controller::class,'about_us'])->name('about_us');
Route::get('/contact_us',[Page_controller::class,'contact_us'])->name('contact_us');
// Route::get('/read_enquiry',[Page_controller::class,'read_enquiry'])->name('read_enquiry');

//page end

//booking start
Route::get('/new_booking',[Booking_controller::class,'new_booking'])->name('new_booking');

 
 Route::get('/all_booking',[Booking_controller::class,'all_booking'])->name('all_booking');
// //booking end

//Reg user start
// Route::get('/contact_us',[Reg_user_controller::class,'contact_us'])->name('contact_us.blade');
// Route::get('/about_us',[Reg_user_controller::class,'about_us'])->name('about_us');
//Req user end

//Enquiry start
// Route::get('/read_enquiry',[Enquiry_controller::class,'read_enquiry'])->name('read_enquiry');
// Route::get('/add_facilities',[Enquiry_controller::class,'add_facilities'])->name('add_facilities');
//Route::get('/read_enquiry',[Page_controller::class,'read_enquiry'])->name('read_enquiry');

//Enquiry end



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
Route::post('/readenquiry',[Contact_controller::class,'readenquiry'])->name('readenquiry');
//db end contact
//service start
Route::get('/survice',[Service_controller::class,'survice'])->name('survice');
//service end

//room satrt
Route::get('/room',[Room_controller::class,'room'])->name('room');
//room end

//frontend end


//guest start
Route::get('/main',[Main_controller::class,'main'])->name('main');
//end guest


//hotelinfo form start
Route::get('/hotelinfo',[mastercontroller::class,'hotelinfo'])->name('hotelinfo');
//hotelinfolist
Route::get('/hotelinfo_list',[mastercontroller::class,'hotelinfo_list'])->name('hotelinfo_list');


// frontend user login
//user-login
Route::get('/user_login',[Main_controller::class,'user_login'])->name('user_login');
//registration form start
Route::get('/user_reg',[Main_controller::class,'user_reg'])->name('user_reg');
//registration form end
//view profile start
Route::get('/viewprofile',[Main_controller::class,'viewprofile'])->name('viewprofile');
//view profile end

//booking form start
Route::get('/bookingform',[Booking_controller::class,'bookingform'])->name('bookingform');
//booking form end

Route::get('/testroom',[Main_controller::class,'testroom'])->name('testroom');






