<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){
		return view('home');
	}

	public function about(){
		return view('about');
	}

	public function gallery(){
		return view('gallery');
	}

	public function contact(){
		return view('contact');
	}

	public function blog(){
		return view('blog');
	}

	public function single(){
		return view('single');
	}
}
