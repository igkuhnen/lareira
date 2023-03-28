@extends('layouts.app', ["current" => "lareirista"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/lareirista/{{$lareiristas->id}}" method="POST">
            @csrf
            <div class="form-group">
                <div class='input-group date'>
                    <label for="Nome">Nome</label>
                    <input type="string" class="form-control" name="nome"
                        value="{{$lareiristas->nome}}" id="nome" placeholder="Nome">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="cancel" class="btn btn-danger">Cancel</button>
        </form>
    </div>
</div>
@endsection
