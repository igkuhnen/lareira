<h1>lareiristacompleto</h1>

@extends('layouts.app', ["current" => "lareirista"])

@section('content')
<div class="container">
    <div class="card border">
        <div class="card-body">
            <form action="/lareiristacompleto/{{$lareirista->id}}" method="GET">
             @csrf
             <div class="form-group">
                <label for="nomeesposa">Nome Esposa:{{$lareirista->nomeesposa}}</label>
             </div>
             <div class="form-group">
                <label for="nomeesposo">Nome Esposo:{{$lareirista->nomeesposo}}</label>
             </div>
            </form>
    </div>
</div>

@endsection

