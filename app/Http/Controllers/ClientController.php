<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients.index',compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    $data = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'password' => 'required', 
        'email' => 'required|email:rfc,dns|unique:App\Models\Client,email', 
        'phone' => 'required|unique:App\Models\Client,phone',
        'address' => 'required',
    ]);

    Client::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address' => $data['address'],
        'password' => $data['password'],
    ]);

    

    return redirect('clients');  
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
        $client=Client::findOrFail($id);
        return view('clients.edit',compact("client"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $client = Client::findOrFail($id);
    
    $client->update($request->all());
    
    return redirect('clients');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::findOrFail($id) ->delete();
        return redirect('clients'); 
    }
}
