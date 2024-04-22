<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function shop()
    {
        return view('frontend.shop');
    }
    function collections()
    {
        return view('frontend.collections');
    }
    function contact_us()
    {
        return view('frontend.contact_us');
    }
}
