<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function contact()
    {

    	$people = [];


    	return view('contact', compact('people')); 

    	//Pass to View
    	

    }
}
