<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KajurController extends Controller
{
 
 	function __construct()
 	{
 		$this->middleware('auth:admin');
 		$this->middleware('kajur');
 	}
    public function index()
    {
    	return view('admin.kajur');
    }
   
}
