<?php

namespace App\Http\Controllers;

use App\Models\TransaksiStaff;
Use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransaksiStaffController extends Controller{
    public function index(){
        $data=TransaksiStaff::all();
        return view('transaksistaff',['data'=>$data]);
    }
}