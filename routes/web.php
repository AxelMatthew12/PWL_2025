<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;




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

// Praktikum 1

//Route::get('/', function () {
//    return 'Selamat Datang';
//});

// Route::get('/world', function () {
//     return view('World');
// });



// Route::get('/about', function () {
//     return '2341760001_Axelo Matthew Terang Barus';
// });

// Route params

Route::get('/user{name}', function($name){
    return 'Nama saya '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
   return 'Post ke-'. $postId . " Komentar ke-:". $commentId;
});

//Route::get('/articles/{id}', function($id){
//    return 'Halaman artikel dengan id '. $id;
//});

//Praktikum

//Route::get('user/{name?}', function($name = null){
//    return 'Nama Saya' . $name;
//});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Praktikum 2

//Route::get('/hello', [WelcomeController::class,'hello']);

//Route::get('/world', [PageController::class,'world']);


Route::get('/about',[HomeController::class,'about']);

Route::get('/home',[HomeController::class, 'home']);

Route::get('/',[PageController::class, 'index']);

Route::get('/articles/{id}',[ArticleController::class, 'articles']);

Route::resource('photos',PhotoController::class);
