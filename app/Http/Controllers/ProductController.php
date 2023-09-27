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
        $products = Product::get() ->toArray();
        return view('product.index',compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
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

    return redirect('product');  
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
        return view('product.edit',compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
        'count_in_stock' => 'required|integer',
        'description' => 'required',
    ]);

    $imagePath = $request->file('image')->store('products', 'public');
    
    $product = Product::findOrFail($id);
    
    $product->update([
        'name' => $data['name'],
        'price' => $data['price'],
        'image' => $imagePath, 
        'count_in_stock' => $data['count_in_stock'],
        'description' => $data['description'],
    ]);
    
    return redirect('product');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id) ->delete();
        return redirect('product'); 
    }
}
