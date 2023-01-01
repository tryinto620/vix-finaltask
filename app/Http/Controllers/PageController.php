<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home(){
		return view('home');
	}
 
	public function hosting(){
		return view('hosting');
	}
 
	public function domain(){
		return view('domain');
	}

    public function promo(){
		return view('promo');
	}

    public function contact(){
        return view('contact');
    }
}
