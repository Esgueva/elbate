<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller{
    
    public function home(){
		return view('welcome');
	}

	public function offers(){
		return view('offers');
	}

	public function types(){
		return view('types');
	}

	public function about(){
		return view('about');
	}

	public function contact(){
		return view('contact');
	}
}


//php artisan make:controller PagesController