<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;


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



Route::get('/signup',[loginController::class,'signup'])->name('students.signup');

Route::post('/add_student',[loginController::class,'add_student'])->name('students.add');

Route::post('/login',[loginController::class,'login'])->name('students.login');

Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/',[loginController::class,'index'])->name('students.index');

    Route::get('/posts',[homeController::class,'posts'])->name('posts.index');

    Route::get('/homepage',[homeController::class,'homepage'])->name('homepage.index');

    Route::get('/home',[homeController::class,'index'])->name('home.index');

    Route::get('/logout',[homeController::class,'logout'])->name('students.logout');
    // Route::get('/update_studentView/{id}',[homeController::class,'updateview'])->name('student.updateView');
});


//Route::get('/home',[loginController::class,'home'])->name('home');








