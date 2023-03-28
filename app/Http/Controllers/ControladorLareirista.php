<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lareirista;


class ControladorLareirista extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $lareiristas = Lareirista::paginate(20);
        return view('lareirista', compact(['lareiristas']));
    }

    public function create()
    {
        return view('novolareirista');
    }

    public function store(Request $request)
    {

        $lareirista = new Lareirista();
        $lareirista->nomeesposa = $request->nomeesposa;
        $lareirista->nomeesposo = $request->nomeesposo;
        $lareirista->datanascimentonomeesposa = $request->datanascimentonomeesposa;
        $lareirista->datanascimentonomeesposo = $request->datanascimentonomeesposo;
        $lareirista->telefoneesposa = $request->telefoneesposa;
        $lareirista->telefoneesposo = $request->telefoneesposo;
        $lareirista->emailesposa = $request->emailesposa;
        $lareirista->emailesposo = $request->emailesposo;
        $lareirista->enderecocasal = $request->enderecocasal;
        $lareirista->filhos = $request->filhos;
        $lareirista->datacasamento = $request->datacasamento;
        $lareirista->padrinhos = $request->padrinhos;
        $lareirista->instagramesposa = $request->instagramesposa;
        $lareirista->instagramesposo = $request->instagramesposo;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $lareirista->image = $imageName;

        }

        $lareirista->save();
        return redirect('/lareirista');
    }

    public function show($id)
    {
        $lareirista = Lareirista::find($id);
        return view('lareiristacompleto', compact(['lareirista']));
    }

    public function edit($id)
    {
        $lareiristas = Lareirista::find($id);
        if(isset($lareiristas)) {
            return view('editarlareirista', compact('lareiristas'));
        }
        return redirect('/lareirista');
    }

    public function update(Request $request, $id)
    {
        $lareiristas = Lareirista::find($id);
        echo "$lareiristas";
        if(isset($lareiristas)) {
        //    $lareiristas->id = $request->input('id');
            $lareiristas->nome = $request->input('nome');
            $lareiristas->save();
        }
        return redirect('/lareirista');
    }

    public function destroy($id)
    {
        $lareiristas = Lareirista::find($id);
        if (isset($lareiristas)) {
            $lareiristas->delete();
        }
        return redirect('/lareirista');
    }

    public function indexJson()
    {
        $lareiristas = Lareirista::all();
        return json_encode($lareiristas);
    }
}
