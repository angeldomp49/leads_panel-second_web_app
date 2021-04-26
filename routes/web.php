<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ContactTypeController, 
    ProductTypeController, 
    SocialMediaController, 
    TopicController, 
    LeadController
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'lead' => LeadController::class,
    'contact-type' => ContactTypeController::class,
    'product-type' => ProductTypeController::class,
    'social-media' => SocialMediaController::class,
    'topic' => TopicController::class
]);