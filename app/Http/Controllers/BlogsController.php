<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    
		public function index()
		{

			$blogs = Blog::all();
			return view('blogs.index')->with('blogs', $blogs);

		}


}
