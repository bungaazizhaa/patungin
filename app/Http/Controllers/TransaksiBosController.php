<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBos;
Use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransaksiBosController extends Controller{
    public function index(){
        $data=TransaksiBos::all();
        return view('transaksibos',['data'=>$data]);
    }
}