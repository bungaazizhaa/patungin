<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inputtransaksi');
        //
        // return Transaksi::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idTransaksi' => 'required|string',
            'idProduk' => 'required|string',
            'banyakTerjual' => 'required|string',
            'pendapatan' => 'required|string',
            'pengeluaran' => 'required|string',
            'keuntungan' => 'required|string'
        ]);

        Transaksi::create($request->all());
        return view('transaksistaff');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idTransaksi)
    {
        $transaksi = Transaksi::find($idTransaksi);
        $transaksi->update($request->all());
        return $transaksi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idTransaksi)
    {
        return Transaksi::destroy($idTransaksi);
    }
}
