<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product_tag;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Size;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create', [
            'collections' => Collection::all(),
            'categories' => Category::all(),
            'colors' => Color::all(),
            'sizes' => Size::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'sku' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'tags' => 'required',
            'primary_image' => 'required|image',
            'secondary_image' => 'nullable|image'
        ]);
        $product = Product::create($request->except('_token', 'tags', 'color_id', 'size_id', 'purchase_price', 'selling_price', 'offer_price') + [
            'slug' => Str::slug($request->name),
            'user_id' => auth()->id()
        ]);
        foreach ($request->tags as $tag) {
            if ((int)$tag == 0) {
                // conversion giving zero that means it is coming as string so a new tag
                $tag = Tag::create([
                    'name' => $tag
                ]);

                Product_tag::create([
                    'product_id' => $product->id,
                    'tag_id' => $tag->id
                ]);
            } else {
                // conversion giving any value than zero that means it is already existed in the database
                Product_tag::create([
                    'product_id' => $product->id,
                    'tag_id' => $tag
                ]);
            }
        }
        //image upload start
        $upload = $request->primary_image->storeOnCloudinary(env('CLOUDINARY_FOLDER_NAME') . '/product_images');
        $product->primary_image = $upload->getSecurePath();
        if ($request->hasFile('secondary_image')) {
            $upload = $request->secondary_image->storeOnCloudinary(env('CLOUDINARY_FOLDER_NAME') . '/product_images');
            $product->secondary_image = $upload->getSecurePath();
        }
        $product->save();
        //image upload end

        //if initial inventory added start
        if ($request->color_id) {
            Inventory::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'purchase_price' => $request->purchase_price,
                'selling_price' => $request->selling_price,
                'offer_price' => $request->offer_price
            ]);
        }
        //if initial inventory added end
        return back()->with('success', 'Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
