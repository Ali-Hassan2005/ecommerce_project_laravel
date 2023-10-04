<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('blogs.index',compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
    ]);

    $imagePath = $request->file('image')->store('blogs', 'public');
    
    Blog::create([
        'title' => $request->title,
        'image' => $imagePath, 
        'body' => $request->body, 
    ]);

    return redirect('blogs');  
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
        $blog=Blog::findOrFail($id);
        return view('blogs.edit',compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $blog = Product::findOrFail($id);
    $imagePath = $blog->image;
    if($request->hasFile('image')){
    $imagePath = $request->file('image')->store('blogs', 'public');
    }
    
    
    $blog->update([
        'title' => $request->title,
        'image' => $imagePath, 
        'body' => $request->body, 
    ]);
    
    return redirect('blogs');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::findOrFail($id) ->delete();
        return redirect('blogs'); 
    }
}
