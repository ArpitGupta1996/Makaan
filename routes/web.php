<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/about-us', [HomeController::class,'aboutus']);

Route::prefix('property')->group(function () {
    Route::get('property-list', [HomeController::class,'propertylist']);
    Route::get('property-type', [HomeController::class,'propertytype']);
    Route::get('property-agent', [HomeController::class,'propertyagent']);

});

Route::get('testimonial',[HomeController::class, 'testimonial']);
Route::get('contact-us',[HomeController::class, 'contactus']);
