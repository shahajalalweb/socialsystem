<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use Illuminate\Http\Request;

class AdminProducts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =productModel::orderBy("id","desc")->cursorPaginate(10);
        return view("admin.products", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new productModel();
        $products->title = $request->title;
        $products->price = $request->price;
        $products->validity = $request->validity;
        $products->imgLink = $request->imgLink;

        $products->save();

        return redirect()->back()->with("success", "Product Added Successfull");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editProduct = productModel::findOrFail($id);
        $products =productModel::orderBy("id","desc")->cursorPaginate(10);
        return view("admin.products", compact("products", "editProduct"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateProduct = productModel::findOrFail($id);
        $updateProduct->title = $request->title;
        $updateProduct->price = $request->price;
        $updateProduct->validity = $request->validity;
        $updateProduct->imgLink = $request->imgLink;
        $updateProduct->save();
        return redirect(Route('adminProduct'))->with("updated","Product Updated Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteProduct = ProductModel::find($id);
        $deleteProduct->delete();
        return redirect()->back()->with("deleted","Product Deleted Successfull");
    }
}
