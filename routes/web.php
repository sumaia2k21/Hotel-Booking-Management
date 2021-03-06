<?php

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\backend\Catagory_Controller;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\Discount_Controller;
use App\Http\Controllers\backend\Facilities_controller;
use App\Http\Controllers\backend\FileController;
use App\Http\Controllers\backend\Gallary_Controller;
use App\Http\Controllers\backend\Hotel_Controller;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\backend\Page_controller;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\Reg_user_controller;
use App\Http\Controllers\backend\Room_controller;
use App\Http\Controllers\backend\Search_Controller;
use App\Http\Controllers\backend\StaffController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\About_controller;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\Contact_controller;
use App\Http\Controllers\Frontend\DiscountController;
use App\Http\Controllers\frontend\GallaryController;
use App\Http\Controllers\frontend\indexcontroller;
use App\Http\Controllers\frontend\Main_controller;
use App\Http\Controllers\Frontend\RoomController;
use App\Http\Controllers\frontend\SearchController;
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

Route::group(['prefix'=>'/admin','middleware'=>'auth'],function(){

     Route::get('/',[mastercontroller ::class,'master'])->name('master');
     Route::get('/logout',[UserController ::class,'logout'])->name('admin.logout');

    Route::group(['middleware'=>'role'],function(){
     //admin start
     Route::get('/',[mastercontroller ::class,'master'])->name('master');
     Route::get('/dashboard',[mastercontroller ::class,'dashboard'])->name('dashboard');
     //logout
     
     //profile
     Route::get('/profilecreate',[mastercontroller ::class,'profilecreate'])->name('profile');
   
     //Catagory start
     Route::get('/add_catagory',[Catagory_Controller::class,'add_catagory'])->name('add_catagory');
     Route::post('/catagory_list',[Catagory_Controller::class,'catagory_list'])->name('catagory_list');
     Route::get('/catagory/edit/{id}',[Catagory_Controller::class,'edit'])->name('catagory.edit');
     Route::put('/catagory/{id}/update',[Catagory_Controller::class,'update'])->name('catagory.update');
     Route::get('/catagory/delete/{id}',[Catagory_Controller::class,'delete'])->name('catagory.delete');
     Route::get('/manage_catagory',[Catagory_Controller::class,'manage_catagory'])->name('manage_catagory');
     Route::get('/discount/{id}',[Catagory_Controller::class,'confirmation'])->name('discount.confirmation');
     Route::get('/discount/active/{id}',[Catagory_Controller::class,'active'])->name('discount.active');
     Route::get('/discount/cancel/{id}',[Catagory_Controller::class,'cancel'])->name('discount.cancel');
     //catagory under room start
     Route::get('/catagory/{id}/rooms',[Catagory_Controller::class,'allRoom'])->name('catagory.room');
     
     //Facilities start
     Route::get('/add_facilities',[Facilities_controller::class,'add_facilities'])->name('add_facilities');
     Route::post('/facility_list',[Facilities_controller::class,'facility_list'])->name('facility_list');
     Route::get('/facilities/{id}/delete',[Facilities_controller::class,'delete'])->name('facility.delete');
     Route::get('/facilities/{id}/edit',[Facilities_controller::class,'edit'])->name('facility.edit');
     Route::put('/facilities/{id}/update',[Facilities_controller::class,'update'])->name('facility.update');
     Route::get('/manage_facilities',[Facilities_controller::class,'manage_facilities'])->name('manage_facilities');
     

     //Room start
     Route::get('/add_room',[Room_controller::class,'add_room'])->name('add_room');
     Route::post('/roomlist',[Room_controller::class,'roomlist'])->name('roomlist');
     Route::get('/room/delete/{id}',[Room_controller::class,'delete'])->name('room.delete');
     Route::get('/room/edit/{id}',[Room_controller::class,'edit'])->name('room.edit');
     Route::put('/room/update/{id}',[Room_controller::class,'update'])->name('room.update');
      Route::get('/manage_room',[Room_controller::class,'manage_room'])->name('manage_room');
     
      
     //page start
     Route::get('/about_us',[Page_controller::class,'about_us'])->name('about_us');
     Route::get('/contact_us',[Page_controller::class,'contact_us'])->name('contact_us');
     Route::post('/contact_us/store',[Page_controller::class,'contact_uspost'])->name('contact_us.store');

     //booking start
     Route::get('/all_booking_report',[Booking_controller::class,'all_booking_report'])->name('all.booking.report');
     Route::get('/all_booking',[Booking_controller::class,'all_booking'])->name('all_booking');
     Route::get('/booking/delete/{id}',[Booking_controller::class,'delete'])->name('booking.delete');
     Route::get('/confirmation_list/{id}',[Booking_controller::class,'confirmation_list'])->name('book.confirmation');
     Route::get('/approve/{id}',[Booking_controller::class,'approve'])->name('book.approve');
     Route::get('/cancel/{id}',[Booking_controller::class,'cancel'])->name('book.cancel');
     Route::get('/approve_list',[Booking_controller::class,'approved_booking_list'])->name('approved.booking.list');
     Route::get('/cancel_list',[Booking_controller::class,'cancel_booking_list'])->name('cancel.booking.list');
     Route::get('/new_booking',[Booking_controller::class,'new_booking_list'])->name('new.booking.list');

     Route::get('/booking_details',[Booking_controller::class,'booking_details'])->name('booking_details');

     Route::get('/bookingdetails/report',[Booking_controller::class,'details_report'])->name('booking.details.report');

     //single view
     Route::get('/booking_single_view/{id}',[Booking_controller::class,'single_view'])->name('backend.single.view');

    

     Route::get('/booking_search',[Search_Controller::class,'booking_search'])->name('booking.search');
     // Route::get('/bookingno_search',[Search_Controller::class,'bookingno_search'])->name('booking.search.no');


     //hotelinfo form start
     Route::get('/hotelinfo',[Hotel_Controller::class,'hotelinfo'])->name('hotelinfo');
     Route::post('/hotelinfo/store',[Hotel_Controller::class,'hotelinfopost'])->name('hotelinfo.store');
  
     //user 
     Route::get('/customers',[UserController::class,'customerlist'])->name('customer.list');
     Route::get('/users',[UserController::class,'userlist'])->name('user.list');
     Route::get('/users/{id}',[UserController::class,'delete'])->name('user.delete');
     // Route::get('/users/{id}/staff',[UserController::class,'user_staff'])->name('user.under.staff');

     //staff
     Route::get('/staff',[StaffController::class,'staff'])->name('staff');
     Route::post('/staff',[StaffController::class,'staffpost'])->name('staff.store');
     Route::get('/manage_staff',[StaffController::class,'managestaff'])->name('staff.list');

     //payment
     Route::get('/paymentform/{id}',[PaymentController::class,'paymentform'])->name('payment.form');
     Route::post('/payment/post/{id}',[PaymentController::class,'payment_store'])->name('payment.store');
     Route::get('/paymentlist',[PaymentController::class,'paymentlist'])->name('payment.list');

     Route::get('/payment/delete/{id}',[PaymentController::class,'delete'])->name('payment.delete');
     Route::get('/payment/edit/{id}',[PaymentController::class,'edit'])->name('payment.edit');
     Route::put('/payment/update/{id}',[PaymentController::class,'update'])->name('payment.update');
     Route::get('/payment/report/{id}',[PaymentController::class,'report'])->name('payment.report');
     Route::get('/payment/search',[PaymentController::class,'search'])->name('payment.search');

     //gallary
     Route::get('/gallaries',[Gallary_Controller::class,'gallaries'])->name('gallaries');
     Route::post('/gallaries/post',[Gallary_Controller::class,'gallaries_post'])->name('gallaries.post');
     Route::get('/gallery/table',[Gallary_Controller::class,'gallerytable'])->name('gallerystore');
     Route::get('/gallery/table/{id}',[Gallary_Controller::class,'delete'])->name('gallery.delete');
     //test multiple image upload
     Route::get('images', [ ImageController::class, 'image' ])->name('images');
     Route::post('images', [ ImageController::class, 'store' ])->name('images.store');
     Route::get('images/table', [ ImageController::class, 'images_table' ])->name('images.table');

    

     }); 
     
     
     Route::group(['middleware'=>'auth','Manager'],function(){
          Route::get('/add_room',[Room_controller::class,'add_room'])->name('add_room');
          Route::post('/roomlist',[Room_controller::class,'roomlist'])->name('roomlist');
          Route::get('/room/delete/{id}',[Room_controller::class,'delete'])->name('room.delete');
          Route::get('/room/edit/{id}',[Room_controller::class,'edit'])->name('room.edit');
          Route::put('/room/update/{id}',[Room_controller::class,'update'])->name('room.update');
           Route::get('/manage_room',[Room_controller::class,'manage_room'])->name('manage_room');
         
          Route::get('/about_us',[Page_controller::class,'about_us'])->name('about_us');
          Route::get('/contact_us',[Page_controller::class,'contact_us'])->name('contact_us');
          Route::post('/contact_us/store',[Page_controller::class,'contact_uspost'])->name('contact_us.store');     
     
     });
     Route::group(['middleware'=>'auth','Receptionist'],function(){
          Route::get('/all_booking',[Booking_controller::class,'all_booking'])->name('all_booking');
          Route::get('/booking/delete/{id}',[Booking_controller::class,'delete'])->name('booking.delete');

     });
     //  admin end
});


//forntend
Route::get('/index',[indexcontroller::class,'index'])->name('index');
Route::get('/home',[indexcontroller::class,'home'])->name('home');
Route::get('/about',[About_controller::class,'about'])->name('about');
Route::get('/contact',[Contact_controller::class,'contact'])->name('contact');
Route::get('/read_enquiry',[Contact_controller::class,'read_enquiry'])->name('read_enquiry');
Route::post('/readenquiry/store',[Contact_controller::class,'readenquiry'])->name('readenquiry');
Route::get('/enquiry/delete/{id}',[Contact_controller::class,'delete'])->name('enquiry.delete');
Route::get('/survice',[Service_controller::class,'survice'])->name('survice');
Route::get('/gallary',[GallaryController::class,'gallary'])->name('gallary');

// room search 
Route::get('/search',[SearchController::class,'search'])->name('search');


Route::group(['prefix'=>'/guest',['middleware'=>'auth','user']],function(){
    
     Route::get('/room',[RoomController::class,'room'])->name('room');

     //logout
     Route::get('/guest_logout',[User_Controller ::class,'guestlogout'])->name('guest.logout');

});


//signup satrt
Route::get('/signup',[User_Controller::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[User_Controller::class,'signupformpost'])->name('user.signup.store');
Route::post('/dologin',[User_Controller::class,'dologin'])->name('user.do.login');
Route::get('/viewprofile',[User_Controller::class,'viewprofile'])->name('viewprofile');
// Route::get('/viewprofile/post',[User_Controller::class,'viewprofile_post'])->name('viewprofile.post');

//booking form start
Route::get('/bookingform/{id}',[BookingController::class,'bookingform'])->name('bookingform');
Route::post('/booking/store',[BookingController::class,'bookingstore'])->name('booking.store');

Route::get('/my_booking',[BookingController::class,'mybooking'])->name('mybooking.status');

Route::get('/invoice/{id}',[BookingController::class,'invoice'])->name('invoice');

Route::get('/approveinvoice/{id}',[BookingController::class,'approve_invoice'])->name('invoice.approve');
Route::get('/cancelbooking/{id}',[BookingController::class,'cancel'])->name('user.cancel');

//cart
Route::get('/add-to-card/{id}',[BookingController::class,'add_to_cart'])->name('cart.add');
Route::get('/get_cart',[BookingController::class,'getCart'])->name('cart.get');
Route::get('/clearcart',[BookingController::class,'clearCart'])->name('cart.clear');
Route::post('/checkout',[BookingController::class,'checkout'])->name('cart.checkout');
Route::get('/checkoutform',[BookingController::class,'checkoutform'])->name('cart.checkout.form');

Route::get('/cart/delete/{id}',[BookingController::class,'cart_delete'])->name('cart.delete');


//catagory under room (frontend)
Route::get('/category_wise-room/{id}',[RoomController::class,'catagory_under_room'])->name('catagory-under-room');
// single room view
Route::get('/single-room-view/{id}',[RoomController::class,'single_room'])->name('single.room.view');
Route::get('/allroom',[RoomController::class,'all_room'])->name('all.room.view');


// test
Route::get('/testroom',[Main_controller::class,'testroom'])->name('testroom');
Route::get('/test',[mastercontroller::class,'test'])->name('test');











