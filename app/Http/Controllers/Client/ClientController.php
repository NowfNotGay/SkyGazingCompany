<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('Client.home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
