<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
		$title = 'Welcome to Index';
		return view('Pages.index')->with('title', $title);
		//return view('Pages.index', compact('title'));
	}
	public function about(){
		$title = 'Welcome to About';
		return view('Pages.about')->with('title', $title);
	}
	public function services(){
		$data = array(
			'title' => 'Services',
			'services' => ['Web Development', 'Technical Writing', 'Animation', 'Public Speaking']
		);
		return view('pages.services')->with($data);
	}

}
.bghdfyghlkjhgukgigigiuggiygiiugiuiugiugiygiugiugiygiugigihiuggyiuyfgytvfu5vt587bt6r8t yvrnmjbpovgjkhtv7gfrckuxt5ur6 

