<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::get();
        return view('teams.index',compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
        'job_title' => 'required',
        'bio' => 'required',
    ]);

    $imagePath = $request->file('image')->store('team', 'public');
    
    Team::create([
        'name' => $data['name'],
        'image' => $imagePath, 
        'job_title' => $data['job_title'],
        'bio' => $data['bio'],
    ]);

    return redirect('teams');  

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
        $team=Team::findOrFail($id);
        return view('teams.edit',compact("team"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $team = Team::findOrFail($id);

    $data = $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif'
    ]);
    $imagePath = $team->image;
    if($request->hasFile('image')){
    $imagePath = $request->file('image')->store('team', 'public');
    }
    
    $team->update([
        'name' => $request ->name,
        'image' => $imagePath, 
        'job_title' => $request ->job_title,
        'bio' => $request -> bio,
    ]);
    
    return redirect('teams');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::findOrFail($id) ->delete();
        return redirect('teams'); 
    }
}

