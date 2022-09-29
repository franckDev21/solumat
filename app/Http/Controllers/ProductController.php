<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->filter(request(['search']))
            ->paginate(12);

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $online = $request->online ? true : false;


        $rules = [
            'price'       => 'required',
            'name'         => 'required',
            'quantite'    => 'required',
        ];

        if ($request->image) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG,jfif|max:4000';
            $filename = time() . '.' . $request->image->extension();
            $path = $request->image->storeAs('img/products', $filename, 'public');
        }

        $request->validate($rules);

        Product::create([
            'price'   => $request->price,
            'name'            => strtolower($request->name),
            'quantite'        => $request->quantite,
            'in_stock'        => (int)$request->quantite > 0,
            'image'           => $path ?? null,
            'description'     => $request->description ?? null,
            'online'          => $online,
        ]);

        return to_route('product.index')->with("message", 'Votre produit a été ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
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
        $online = $request->online ? true : false;

        $rules = [
            'price'       => 'required',
            'name'         => 'required',
            'quantite'    => 'required',
        ];

        if ($request->image) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG,jfif|max:4000';
            $filename = time() . '.' . $request->image->extension();
            $path = $request->image->storeAs('img/products', $filename, 'public');
        }else {
            $path = $product->image;
        }

        $request->validate($rules);

        $product->update([
            'price'   => $request->price,
            'name'            => strtolower($request->name),
            'quantite'        => $request->quantite,
            'in_stock'        => (int)$request->quantite > 0,
            'image'           => $path ?? null,
            'description'     => $request->description ?? null,
            'online'          => $online,
        ]);

        return to_route('product.index')->with("message", 'Votre produit a été mis à avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('product.index');
    }
}
