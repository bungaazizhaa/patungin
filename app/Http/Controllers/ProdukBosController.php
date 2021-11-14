<?php

namespace App\Http\Controllers;

use App\Models\ProdukBos;
Use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukBosController extends Controller{
    public function index(){
        $data=ProdukBos::all();
        return view('produkbos',['data'=>$data]);
    }
}