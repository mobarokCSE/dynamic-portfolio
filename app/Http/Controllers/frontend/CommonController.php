<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    //page
    public function page()
    {
        return view('pages.page');
    }
    
    //album
    public function album()
    {
        return view('pages.album');
    }
    
    //gallery
    public function gallery()
    {
        return view('pages.gallery');
    }
}