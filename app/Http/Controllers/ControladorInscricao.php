<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inscricao;
use App\Models\User;

class ControladorInscricao extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
       // $Inscricao = Inscricao::paginate(20);
        return view('inscricao');
    }
    public function create()
    {
        return view('inscricao');
    }

    // public function store(Request $request)
    // {

    //     $lareirista = new Lareirista();
    //     $lareirista->nome = $request->input('nome');
    //     $lareirista->save();
    //     return redirect('/lareirista');
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     $lareiristas = Lareirista::find($id);
    //     if(isset($lareiristas)) {
    //         return view('editarlareirista', compact('lareiristas'));
    //     }
    //     return redirect('/lareirista');
    // }

    // public function update(Request $request, $id)
    // {
    //     $lareiristas = Lareirista::find($id);
    //     echo "$lareiristas";
    //     if(isset($lareiristas)) {
    //     //    $lareiristas->id = $request->input('id');
    //         $lareiristas->nome = $request->input('nome');
    //         $lareiristas->save();
    //     }
    //     return redirect('/lareirista');
    // }

    // public function destroy($id)
    // {
    //     $lareiristas = Lareirista::find($id);
    //     if (isset($lareiristas)) {
    //         $lareiristas->delete();
    //     }
    //     return redirect('/lareirista');
    // }

    public function indexJson()
    {
        $inscricao = Inscricao::all();
        return json_encode($inscricao);
    }

}
