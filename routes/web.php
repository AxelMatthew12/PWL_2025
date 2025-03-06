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

// Praktikum 1

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/world', function () {
    return view('World');
});

Route::get('/about', function () {
    return '2341760001_Axelo Matthew Terang Barus';
});

// Route params

Route::get('/user{name}', function($name){
    return 'Nama saya '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
   return 'Post ke-'. $postId . " Komentar ke-:". $commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Halaman artikel dengan id '. $id;
});

//Praktikum

//Route::get('user/{name?}', function($name = null){
//    return 'Nama Saya' . $name;
//});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
//
})->name('profile');
Route::get(
    '/user/profile',[UserProfileController::class, 'show']
)->name('profile');
// Generating URLs...
$url = route('profile');
// Generating Redirects...
return redirect()->route('profile');
