@extends('layouts.app', ["current" => "lareirista"])

@section('content')
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Exibindo {{$lareiristas->count()}} Lareirista de {{$lareiristas->total()}}
            ( {{$lareiristas->firstItem()}} a {{$lareiristas->lastItem()}} )</h5>
    @if(count($lareiristas) > 0)
        <table class="table table-ordered">
                <thead>
                    <tr>
                        <th>Nome Esposa</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Nome Esposo</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Data Casamento</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($lareiristas as $lareirista)
                    <tr>
                        <td>{{$lareirista->nomeesposa}}</td>
                        <td>{{$lareirista->telefoneesposa}}</td>
                        <td>{{$lareirista->emailesposa}}</td>
                        <td>{{$lareirista->nomeesposo}}</td>
                        <td>{{$lareirista->telefoneesposo}}</td>
                        <td>{{$lareirista->emailesposo}}</td>
                        <td>{{date('d/m/Y', strtotime($lareirista->datacasamento))}}</td>
                        <div class="card col-md-3">
                        <td><img src="/img/events/{{ $lareirista->image }}" alt="{{ $lareirista->title }}"></td>
                        </div>
                        <td>
                            <a href="/lareiristacompleto/{{$lareirista->id}}" class="btn btn-sm btn-success">Ver Mais</a>
                            <a href="/lareirista/editar/{{$lareirista->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/lareirista/apagar/{{$lareirista->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
    @endif
        </div>
    </div>
        <div class="card-footer text-muted">
        {{$lareiristas->links()}}
        </div>
        <div class="card-footer">
            <a href="/lareirista/novo" class="btn btn-sm btn-primary" role="button">Novo Lareirista</a>
        </div>
</div>

@endsection

