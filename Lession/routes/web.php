<?php

use Illuminate\Support\Facades\Route;

//* Recognize import file for get recognize by controller
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;

use Faker\Guesser\Name;

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
// Controller
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('CheckAdmin');
Route::get('/member',[MemberController::class,'index'])->name('member');








// **********************************************************************************//

// // //! Contruct route
// Route::get('/about',function() {
//     echo "Hello Man";
//     echo "<h1>Hello Man</h1>";
// });

// Route::get('/user' ,function() {
//     echo "Hello test user";
// });

// // //! Construct Dynamic Route การสร้าง Dynamic route

// Route::get('/hello/{fame}/{lname}' ,function($fname,$lname){
//     echo "<h1>HELLO $fname</h1>";
//     echo "<h1>HELLO $lname</h1>";
// });

// Route::get('/product/{name}/{price}' ,function($name,$price){
//     echo "<h1>ชื่อสินค้า : $name</h1>";
//     echo "<h1>ราคาสินค้า : $price</h1>";
// });

// // **********************************************************************************//
// // //! to making view EX

// Route::get('/view',function() {
//     return view('about');

// });

// Route::get('/member',function() {
//     return view('member.index');
// });

// Route::get('/admin',function() {
//     return view('admin.admin');

// });
// // **********************************************************************************//
