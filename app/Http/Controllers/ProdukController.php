<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inputproduk');
        //
        // return Produk::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'idProduk' => 'required|string',
            'namaProduk' => 'required|string|',
            'hargaProduk' => 'required|string',
            // 'produkTerjual' => 'required|string',
            'stok' => 'required|string'
        ]);

        // dd('sukes');
        Produk::create([
            'idProduk' => $fields['idProduk'],
            'namaProduk' => $fields['namaProduk'],
            'hargaProduk' => $fields['hargaProduk'],
            'produkTerjual' => null,
            'stok' => $fields['stok']
        ]);

        return view('produkstaff');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProduk)
    {
        $produk = Produk::find($idProduk);
        $produk->update($request->all());
        return $produk;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProduk)
    {
        return Produk::destroy($idProduk);
    }
}
