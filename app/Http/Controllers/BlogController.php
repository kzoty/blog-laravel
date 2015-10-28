<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller {

	public function index() {

//		$posts = [
//			0 => "T�tulo 1 do Blog",
//			1 => "T�tulo 2 do Blog",
//			2 => "T�tulo 3 do Blog",
//			3 => "T�tulo 4 do Blog",
//			4 => "T�tulo 5 do Blog",
//			5 => "T�tulo 6 do Blog",
//		];
		$posts = [
			0 => 'Post numero 1',
			1 => 'Post numero 2',
			2 => 'Post numero 3',
			3 => 'Post numero 4',
			4 => 'Post numero 5',
			5 => 'Post numero 6',
		];

		return view( 'blog.list', compact('posts') );
		#return view( 'blog.list', ['posts' => $posts] );
	}
}
