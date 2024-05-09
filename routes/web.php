<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpSignInController;
use App\Http\Controllers\Sidebar;
use App\Http\Controllers\UserController;

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

Route::any('/index', function () {
    return view('welcome');
})->name('index');
Route::get('/signIn',[SignUpSignInController::class, 'SignIn'])->name('signIn');
Route::get('/signUp',[SignUpSignInController::class, 'SignUp'])->name('signUp');
//Route::post('/reg',[SignUpSignInController::class, 'Reg'])->name('register1');
Route::get('/dashboard',[Sidebar::class, 'Dashboard'])->name('Dashboard');
//Route::post('/Dashboard1',[Sidebar::class, 'Dashboard'])->name('Dashboard1');
Route::get('/landing',[Sidebar::class, 'landing'])->name('landing');
Route::get('/element',[Sidebar::class, 'element'])->name('element');
Route::get('/schedulelist',[Sidebar::class, 'schedulelist'])->name('schedulelist');
Route::get('/speakerlist',[Sidebar::class, 'speakerlist'])->name('speakerlist');
Route::get('/attendantlist',[Sidebar::class, 'attendantlist'])->name('attendantlist');
Route::get('/eventlist',[Sidebar::class, 'eventlist'])->name('eventlist');
Route::get('/profile',[Sidebar::class, 'profile'])->name('profile');
Route::get('/createevent',[Sidebar::class, 'createevent'])->name('createevent');

Route::get('/createevent',[Sidebar::class, 'createevent'])->name('createevent');
Route::get('/eventlist',[Sidebar::class, 'eventlist'])->name('eventlist');
Route::get('/eventdetails',[Sidebar::class, 'eventdetails'])->name('eventdetails');
Route::get('/calendar',[Sidebar::class, 'calendar'])->name('calendar');
Route::get('/venue',[Sidebar::class, 'venue'])->name('venue');
Route::get('/setting',[Sidebar::class, 'setting'])->name('setting');
Route::get('/chat',[Sidebar::class, 'chat'])->name('chat');
Route::get('/welcome',[Sidebar::class,'welcome'])->name('welcome');
//Route::post('/adminwelcome',[Sidebar::class,'welcome'])->name('adminwelcome');
Route::get('/admindashboard',[Sidebar::class,'admindashboard'])->name('admindashboard');
Route::get('/total-registration',[Sidebar::class,'total_registration'])->name('total-registration');
//Route::get('/totalregistrationview',[Sidebar::class,'totalregistrationview'])->name('totalregistrationview');
Route::get('/newevents',[Sidebar::class,'newevents'])->name('newevents');
Route::post('/neweventsstore',[Sidebar::class,'neweventsstore'])->name('neweventsstore');
Route::get('/total-speaker',[Sidebar::class,'total_speaker'])->name('total-speaker');
Route::post('/save-speaker',[Sidebar::class, 'save_speaker'])->name('save-speaker');
Route::get('/total-ticket',[Sidebar::class,'total_ticket'])->name('total-ticket');
Route::get('/save-ticket',[Sidebar::class,'save_ticket'])->name('save-ticket');
Route::get('/web-traffic',[Sidebar::class,'web_traffic'])->name('web-traffic');
Route::post('/savewebtraffic',[Sidebar::class,'savewebtraffic'])->name('savewebtraffic');
Route::get('/schedule-events',[Sidebar::class,'schedule_events'])->name('schedule-events');
Route::get('edit/{id}',[Sidebar::class,'edit']);
Route::get('adminmanagequery',[Sidebar::class,'adminmanagequery'])->name('adminmanagequery');
Route::post('update10/{id}',[Sidebar::class,'update1'])->name('update10');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

});

Route::get('users',[UserController::class,'index'])->name('users');

// Route::group(['middleware'=>'auth.Admin'],function(){
//     Route::get('/admindashboard1',[App\Http\Controllers\Sidebar::class,'admindashboard']);
// });
// Route::group(['middleware'=>'auth.User'],function(){
//     Route::get('/dashboard1',[App\Http\Controllers\Sidebar::class,'Dashboard']);
// });
//Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



