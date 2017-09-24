<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostNew extends Controller
{
    function index(){
        return view('admin_post_content');
    }
}
