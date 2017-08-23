<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_content;

class HomeController extends Controller
{
    function index(){

        $new_content = New_content::all();
        return view('home',compact('new_content'));
    }
}
