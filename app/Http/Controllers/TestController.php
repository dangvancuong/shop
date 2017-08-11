<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        if (1!=1) return "TestController";
        else return view('welcome');
    }
}
