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
        $product = Product::all();
        return view('product.index')->with('product', $product);
    }
    public function landing()
    {
        $product = Product::all();
        return view('landing')->with('product', $product);
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
        $product = [

            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto_produk' => $request->foto_produk,


        ];
        $product = Product::create($product);
        if ($request->hasFile('foto_produk')) {
            $request->file('foto_produk')->move('foto/', $request->file('foto_produk')->getClientOriginalName());
            $product->foto_produk = $request->file('foto_produk')->getClientOriginalName();
            $product->save();
        }



        return redirect('/Product')->with('success', 'Data berhasil ditambahkan');

        return redirect('/Product')->with('error', 'Data gagal ditambahkan');
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
        $product = Product::find($id);
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;

        if ($request->hasFile('foto_produk')) {
            $request->file('foto_produk')->move('foto/', $request->file('foto_produk')->getClientOriginalName());
            $product->foto_produk = $request->file('foto_produk')->getClientOriginalName();
            $product->save();
        }

        $product->save();
        return redirect()->route('Product-Index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('Product-Index')->with('success', 'Data Berhasil Dihapus');
    }
}
