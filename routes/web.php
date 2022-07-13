<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\LoginCusController;
use App\Http\Controllers\Admin\AstronomicalController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SolarSystemController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ObservatoryController;
use App\Http\Controllers\Admin\ConstellationController;
use App\Http\Controllers\Client\RegisterController;
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


Route::get('/',[ClientController::class,'home'])->name('home');
Route::get('home',[ClientController::class,'home'])->name('home');
Route::get('about',[ClientController::class,'about'])->name('about');
Route::get('contact',[ClientController::class,'contact'])->name('contact');

Route::get('login',[LoginCusController::class,'getUserLogin'])->name('getUserLogin');
Route::post('login',[LoginCusController::class,'postUserLogin'])->name('postUserLogin');
Route::get('logout',[LoginCusController::class,'Userlogout'])->name('Userlogout');

Route::get('register',[RegisterController::class,'getUserRegister'])->name('getRegister');
Route::post('register',[RegisterController::class,'postUserRegister '])->name('postRegister');


Route::prefix('admin')->name('admin.')->group(function (){
    Route::prefix('member')->name('member.')->group(function (){
        //List Member
        Route::get('index',[MemberController::class,'index'])->name('index');
        // Route::get('/',[MemberController::class,'index'])->name('index');
        //Create Member
        Route::get('create',[MemberController::class,'create'])->name('create');
        Route::post('store',[MemberController::class,'store'])->name('store');
        //Delete memeber
        Route::get('delete/{id}',[MemberController::class,'delete'])->name('delete');
        //Edit member
        Route::get('edit/{id}',[MemberController::class,'edit'])->name('edit');
        Route::post('update/{id}',[MemberController::class,'update'])->name('update');
    });

    Route::prefix('astronomicalentity')->name('astronomicalentity.')->group(function (){
        //List AE
        Route::get('/',[AstronomicalController::class,'index'])->name('index');
        Route::get('index',[AstronomicalController::class,'index'])->name('index');
        //Created AE
        Route::get('create',[AstronomicalController::class,'create'])->name('create');
        Route::post('store',[AstronomicalController::class,'store'])->name('store');
        //Updated AE
        Route::get('edit',[AstronomicalController::class,'edit'])->name('edit');
        Route::post('update',[AstronomicalController::class,'update'])->name('update');
        //Delete AE
        Route::get('delete',[AstronomicalController::class,'delete'])->name('delete');
    });

    //Observatory
    Route::prefix('observatory')->name('observatory.')->group(function (){
        //List Observatory
        Route::get('index',[ObservatoryController::class,'index'])->name('index');
        //Create Observatory
        Route::get('create',[ObservatoryController::class,'create'])->name('create');
        Route::post('store',[ObservatoryController::class,'store'])->name('store');
        //Delete Observatory
        Route::get('delete/{id}',[ObservatoryController::class,'delete'])->name('delete');
        //Edit Observatory
        Route::get('edit/{id}',[ObservatoryController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ObservatoryController::class,'update'])->name('update');
    });

    //Constellation
    Route::prefix('constellation')->name('constellation.')->group(function (){
        //List Constellation
        Route::get('index',[ConstellationController::class,'index'])->name('index');
        //Create Constellation
        Route::get('create',[ConstellationController::class,'create'])->name('create');
        Route::post('store',[ConstellationController::class,'store'])->name('store');
        //Delete Constellation
        Route::get('delete/{id}',[ConstellationController::class,'delete'])->name('delete');
        //Edit Constellation
        Route::get('edit/{id}',[ConstellationController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ConstellationController::class,'update'])->name('update');
    });

    

    Route::prefix('ss')->name('ss.')->group(function () {
        Route::get('/', [SolarSystemController::class, 'index'])->name('index');
        Route::get('index', [SolarSystemController::class, 'index'])->name('index');
        Route::get('delete/{id}', [SolarSystemController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
        Route::get('create', [SolarSystemController::class, 'create'])->name('create'); 
        Route::post('store', [SolarSystemController::class, 'store'])->name('store'); 
        Route::get('edit/{id}', [SolarSystemController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); 
        Route::post('update/{id}', [SolarSystemController::class, 'update'])->name('update')->where('id', '[0-9]+'); 
    });


    Route::get('login',[LoginController::class,'getLogin'])->name('getLogin');
    Route::post('login',[LoginController::class,'postLogin'])->name('postLogin');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});
