<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\productModel;
use App\Models\UserRegister;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userRegister = UserRegister::with('products')->first();

        // dd($userRegister->toArray());
        
        $products = productModel::orderBy('id', 'desc')->get();

        return view("welcome", compact("products"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showProduct = productModel::findOrFail($id);
        $paymentMethods = PaymentMethod::orderBy('id','desc')->get();
        return view("details", compact("showProduct", "paymentMethods"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
