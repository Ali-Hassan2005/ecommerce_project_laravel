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
        $products = Product::get();
        return view('products.index',compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
        'count_in_stock' => 'required|integer',
        'description' => 'required',
    ]);

    $imagePath = $request->file('image')->store('products', 'public');
    
    Product::create([
        'name' => $data['name'],
        'price' => $data['price'],
        'image' => $imagePath, 
        'count_in_stock' => $data['count_in_stock'],
        'description' => $data['description'],
    ]);

    return redirect('products');  
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::findOrFail($id);
        return view('products.edit',compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $product = Product::findOrFail($id);
    $data = $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif',
        'count_in_stock' => 'integer'
    ]);
    $imagePath = $product->image;
    if($request->hasFile('image')){
    $imagePath = $request->file('image')->store('products', 'public');
    }
    
    
    $product->update([
        'name' => $request ->name,
        'price' => $request ->price,
        'image' => $imagePath, 
        'count_in_stock' => $data['count_in_stock'],
        'description' => $request ->description,
    ]);
    
    return redirect('products');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id) ->delete();
        return redirect('products'); 
    }
}
