<?php

namespace App\Http\Controllers;

use App\Models\ProdukStaff;
Use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukStaffController extends Controller{
    public function index(){
        $data=ProdukStaff::all();
        return view('produkstaff',['data'=>$data]);
    }
}