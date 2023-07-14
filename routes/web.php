<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// //home

Route::get('/home', function () {
    return view('home');
});
// Route::get("/redirects",[HomeController::class,'redirects']);
// Route::get("/users",[AdminController::class,'user']);
// // Customer Routes
// Route::get("display",[car_customer::class,'index'])->name("displaycustomer");
// Route::get("addcustomer",[CustomerController::class,"addcustomer"])->name("addcustomer");
// Route::post("savecustomer",[CustomerController::class,"savecustomer"])->name("savecustomer");
// Route::get("editcustomer/{customer_id}",[CustomerController::class,'editcustomer'])->name("editcustomer");
// Route::post("updatecustomer",[CustomerController::class,"updatecustomer"])->name("updatecustomer");
// Route::get("deletecustomer/{customer_id}",[CustomerController::class,"deletecustomer"])->name("deletecustomer");
// //meal

// Route::get("displaymeal",[MealController::class,'index'])->name("displaymeal");
// Route::get("addmeal",[MealController::class,"addmeal"])->name("addmeal");
// Route::post("savemeal",[MealController::class,"savemeal"])->name("savemeal");
// Route::get("editmeal/{meal_id}",[MealController::class,'editmeal'])->name("editmeal");
// Route::post("updatemeal",[MealController::class,"updatemeal"])->name("updatemeal");
// Route::get("deletemeal/{meal_id}",[MealController::class,"deletemeal"])->name("deletemeal");

// //order

// Route::get("displayorder",[OrderController::class,'index'])->name("displayorder");
// Route::get('/addorder', function() {
//     return view('order.addorder');
// });

// Route::post('/addorder', [OrderController::class, 'addorder'])->name("addorder");
// Route::post("saveorder",[OrderController::class,"saveorder"])->name("saveorder");
// Route::get("editorder/{order_id}",[OrderController::class,'editorder'])->name("editorder");
// Route::post("updateorder",[OrderController::class,"updateorder"])->name("updateorder");
// Route::get("deleteorder/{order_id}",[OrderController::class,"deleteorder"])->name("deleteorder");
Route::get('display',[OrderController::class,'index']);