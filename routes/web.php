<?php

use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrudController;
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
Route::controller(UserController::class)->group(function(){
    Route::get('/signup','SignUp')->name('signup');
    Route::post('/signup-submit','SignUpSubmit')->name('signup-submit');
    Route::get('/signin','SignIn')->name('login');
    Route::post('/signin-submit','SignInSubmit')->name('signin-submit');

});
Route::middleware(['auth'])->group(function(){
    Route::controller(CrudController::class)->group(function(){
        Route::get('/crud','crud')->name('crud');
        Route::get('/','home')->name('home');
        Route::get('/add-shop','addShop')->name('add-shop');
        Route::post('/add-shop-submit','addShopSubmit')->name('add-shop-submit');
        Route::get('/edit-shop/{crud}','EditShop')->name('edit-shop');
        Route::post('/edit-shop-submit/{crud}','EditShopSubmit')->name('edit-shop-submit');
        // Route::post('/delete-shop/{id}','DeleteShop')->name('delete-shop');
        Route::post('/delete-shop','DeleteShop')->name('delete-shop');
        Route::get('/buy-pro/{crud}','BuyProduct')->name('buyNow');
        Route::get('/search-pro/{crud}','SearchProduct')->name('search-pro');
        Route::get('/search-pro-re','SearchProductResult')->name('search-pro-re');


    });
    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact','Contact')->name('contact');
        Route::post('/contact-submit','ContactSubmit')->name('contact-submit');
    });
    Route::get('/logout',[UserController::class,'Logout'])->name('logout');
});

