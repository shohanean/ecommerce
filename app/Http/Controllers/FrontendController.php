<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function s_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('frontend.s_category', compact('category'));
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
