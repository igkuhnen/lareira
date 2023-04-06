<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDownloadReuniao extends Controller
{
    public function index(){
        return view('downloadreuniao');
    }

    public function downloadreuniaofevereiro(){
        return response()->download(public_path().'/assets/reuniaofevereiro.pdf');
    }

    public function downloadreuniaomarco(){
        return response()->download(public_path().'/assets/reuniaomarco.pdf');
    }

    public function downloadreuniaoabril(){
        return response()->download(public_path().'/assets/reuniaoabril.pdf');
    }

    public function downloadreuniaomaio(){
        return response()->download(public_path().'/assets/reuniaomaio.pdf');
    }



}

