<?php

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\backend\Catagory_Controller;
use App\Http\Controllers\backend\Facilities_controller;
use App\Http\Controllers\backend\Page_controller;
use App\Http\Controllers\backend\Reg_user_controller;
use App\Http\Controllers\backend\Room_controller;
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

//Catagory start
 Route::get('/add_catagory',[Catagory_Controller::class,'add_catagory'])->name('add_catagory');
 Route::get('/manage_catagory',[Catagory_Controller::class,'manage_catagory'])->name('manage_catagory');
//catagory end

//Facilities start
 Route::get('/add_facilities',[Facilities_controller::class,'add_facilities'])->name('add_facilities');
Route::get('/manage_facilities',[Facilities_controller::class,'manage_facilities'])->name('manage_facilities');
//facilities end

//Room start
Route::get('/add_room',[Room_controller::class,'add_room'])->name('add_room');
 Route::get('/manage_room',[Room_controller::class,'manage_room'])->name('manage_room');
//room end

//page start
 Route::get('/about_us',[Page_controller::class,'about_us'])->name('about_us');
Route::get('/contact_us',[Page_controller::class,'contact_us'])->name('contact_us');
Route::get('/read_enquiry',[Page_controller::class,'read_enquiry'])->name('read_enquiry');

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


