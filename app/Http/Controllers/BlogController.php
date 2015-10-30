<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller {

	public function index() {

		/**
		 * Loading all posts.
		 */
		$posts = Post::all();

		return view( 'blog.list', compact('posts') );
	}
}
