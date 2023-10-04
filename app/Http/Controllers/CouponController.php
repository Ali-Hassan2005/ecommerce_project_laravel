<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::get();
        return view('coupons.index',compact("coupons"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'coupon_Key' => 'required|unique:App\Models\Coupon,coupon_Key',
        'percentage' => 'required',
    ]);
    
    Coupon::create($request->all());

    return redirect('coupons');  
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
        $coupon=Coupon::findOrFail($id);
        return view('coupons.edit',compact("coupon"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $coupon = Coupon::findOrFail($id);
    
    
    $coupon->update($request->all());
    
    return redirect('coupons');  
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coupon::findOrFail($id) ->delete();
        return redirect('coupons'); 
    }
}