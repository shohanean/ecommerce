<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Favourite;
use App\Models\Inventory;
use App\Models\Tag;

class FrontendController extends Controller
{
    function index()
    {
        $products = Product::latest()->take(4)->get();
        return view('frontend.index', compact('products'));
    }
    function all_categories()
    {
        $categories = Category::all();
        return view('frontend.all_categories', compact('categories'));
    }
    function s_category($slug, $sub_slug = "")
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        if ($sub_slug) {
            $subcategory = Subcategory::where('slug', $sub_slug)->first();
            $products = Product::where('subcategory_id', $subcategory->id)->get();
        } else {
            $products = Product::where('category_id', $category->id)->get();
        }
        return view('frontend.s_category', compact('category', 'products'));
    }
    function product_details($slug)
    {
        $product = Product::with(['category', 'product_tag'])->where('slug', $slug)->firstOrFail();
        // Find previous product (based on ID or created_at)
        $previous = Product::where('id', '<', $product->id)->orderBy('id', 'desc')->first();
        // Find next product
        $next = Product::where('id', '>', $product->id)->orderBy('id')->first();
        $related_products = Product::where('id', '!=', $product->id)->where('category_id', $product->category->id)->get();
        return view('frontend.product_details', compact('product', 'previous', 'next', 'related_products'));
    }
    function shop(Request $request, $per_page = 10)
    {
        if ($request->per_page) {
            $per_page = $request->per_page;
        }
        $products = Product::latest()->paginate($per_page)->withQueryString();
        // ->appends([
        //     'search' => "asd",
        //     'sort_by' => "xcvbvxcb",
        // ]);
        if ($request->sort) {
            $products = Product::orderBy('name', $request->sort)->latest()->paginate($per_page)->withQueryString();
        }
        if ($request->price) {
            return "needs to be developer";
        }
        $tags = Tag::all();
        return view('frontend.shop', compact('products', 'tags', 'per_page'));
    }
    function collections()
    {
        return view('frontend.collections', [
            'collections' => Collection::latest()->get()
        ]);
    }
    function s_collections($slug)
    {
        $collection = Collection::where('slug', $slug)->firstOrFail();
        return view('frontend.s_collections', [
            'products' => Product::where('collection_id', $collection->id)->get()
        ]);
    }
    function favourites()
    {
        return view('frontend.favourites');
    }
    function contact_us()
    {
        return view('frontend.contact_us');
    }
    function contact_us_post(Request $request)
    {
        $request->validate([
            '*' => 'required',
            'contact_email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.'
        ], [
            'contact_name' => 'Name',
            'contact_email' => 'Email Address',
            'contact_phone' => 'Phone Number',
            'contact_message' => 'Message',
        ]);
        Contact::create($request->except('_token', 'g-recaptcha-response') + [
            'ip_address' => $request->ip()
        ]);
        return back()->with('success', 'Message Send Successfully!');
    }
    function get_size($product_id, $color_id)
    {
        $inventories = Inventory::where([
            'product_id' => $product_id,
            'color_id' => $color_id,
        ])->get();
        $size_variation = "";
        foreach ($inventories as $inventory) {
            // $size_variation .= $inventory->size->name;
            if ($inventory->quantity != $inventory->sold_quantity) {
                $size_variation .= '<div id="swatch-wrapper-size" class="swatch-wrapper"><i id="size_swatch_check_' . $inventory->size->id . '" class="text-success fa fa-check-circle d-none"></i><a data-id="' . $inventory->size->id . '" class="product-size-swatch-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="' . $inventory->size->name . '"><span class="product-size-swatch-label">' . $inventory->size->name . '</span></a></div>';
            }
        }
        echo $size_variation;
    }
    function toggle_favourite(Request $request)
    {
        //Prevent duplicates
        $exists = Favourite::where('user_id', auth()->user()->id)->where('product_id', $request->product_id)->exists();
        if (!$exists) {
            Favourite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
            ]);
            return response()->json(['message' => 'added']);
        } else {
            Favourite::where('user_id', auth()->user()->id)->where('product_id', $request->product_id)->forceDelete();
            return response()->json(['message' => 'removed']);
        }
    }
}
