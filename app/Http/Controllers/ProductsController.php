<?php

namespace App\Http\Controllers;

use App\Models\Productz;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imagen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $product = new Productz();
    $product->title = $request->input('title');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->save();

    $variants = $request->input('variants');

    foreach ($variants as $variant) {
        $v = new Variant();
        $v->product_id = $product->id;
        $v->title = $variant['title'];
        $v->price = $variant['price'];
        $v->sku = $variant['sku'];
        $v->barcode = $variant['barcode'];
        $v->inventory = $variant['inventory'];
        $v->save();
    }

    return redirect()->route('products.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
