<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDownloadInscricao extends Controller
{
    public function download(){
        return response()->download(public_path().'/assets/fichainscricao.pdf');
    }
}
