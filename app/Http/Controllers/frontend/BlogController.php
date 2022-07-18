<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs(){
        return view('pages.blog');
    }

    // single blog
    public function blog(){
        return view('pages.single-blog');
    }
}