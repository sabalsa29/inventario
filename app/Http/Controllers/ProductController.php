<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos  = Product::where('estatus',1)->get();
        return view('products.index',compact('productos'));
    }

    public function create(){

        $categorias = Category::where('estatus',1)->pluck('nombre','id')->toArray();
        return view('products.create',compact('categorias'));
        //dd('llegaste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $product                = new Product();
        $product->sku           = Str::random(8);
        $product->nombre        = $request->nombre;
        $product->categoria_id  = $request->categoria_id;
        $product->descripcion   = $request->descripcion;
        $product->cantidad      = $request->cantidad;
        $product->precio        = $request->precio;
        $product->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request)
    {

        $product    = Product::find($request->id);
        $product->estatus   =0;
        $product->save();

        return redirect()->back();
    }
}
