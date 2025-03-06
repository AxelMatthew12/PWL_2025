<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Axelo Matthew Terang Barus'.'_2341760001';
    }

    public function articles($id){
        return 'Halaman Artikel dengan id - '. $id;
    }
}
