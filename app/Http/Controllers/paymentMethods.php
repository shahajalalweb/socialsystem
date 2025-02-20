<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class paymentMethods extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::orderBy('id', 'desc')->get();
        return view("admin.paymentMethod", compact("paymentMethods"));
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
        $methods = new PaymentMethod();
        $methods->method = $request->method;
        $methods->number = $request->number;
        $methods->logo = $request->logo;
        $methods->save();

        return redirect()->back()->with("success", "Method Added Successfull");
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
        $deleteProduct = PaymentMethod::findOrFail( $id);
        $deleteProduct->delete();
        return redirect()->back()->with("deleted", "Method Deleted Successfull");
    }
}
