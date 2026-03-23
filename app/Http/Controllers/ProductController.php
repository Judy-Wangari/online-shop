<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name'=>'required|string',
            'price'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'image'=>'required|string',
        ]);

        $product = new Product ();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->category = $validated['category'];
        $product->image = $validated['image'];

        $product->save();

        return response()->json(['message' => 'Product created successfully.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'=>'required|string',
            'price'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'image'=>'required|string',
        ]);

        $product = Product::find($product);
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->category = $validated['category'];
        $product->image = $validated['image'];

        $product->save();

        return response()->json(['message' => 'Product updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
