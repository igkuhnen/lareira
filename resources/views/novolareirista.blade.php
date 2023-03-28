@extends('layouts.app', ["current" => "lareirista"])
@section('content')

<div class="container">
  <h1> Cadastro do Lareirista </h1>
    <div class="card border">
            <div class="card-body">
                    <form action="/lareirista" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="nomeesposa">Nome Esposa</label>
                        <input type="string" class="form-control" name="nomeesposa"
                            id="nomeesposa">

                        <label for="datanascimentonomeesposa">Data Nascimento</label>
                        <input type="date" class="form-control" name="datanascimentonomeesposa"
                            id="datanascimentonomeesposa">

                        <label for="telefoneesposa">Telefone</label>
                        <input type="string" class="form-control" name="telefoneesposa"
                            id="telefoneesposa" placeholder="(99)99999-9999">

                        <label for="emailesposa">E-Mail</label>
                        <input type="string" class="form-control" name="emailesposa"
                            id="emailesposa" placeholder="a@a.com">

                        <label for="instagramesposa">Instagram</label>
                        <input type="string" class="form-control" name="instagramesposa"
                            id="instagramesposa" placeholder="@insta">

                        <label for="nomeesposo">Nome Esposo</label>
                        <input type="string" class="form-control" name="nomeesposo"
                            id="nomeesposo" >

                        <label for="datanascimentonomeesposo">Data Nascimento</label>
                        <input type="date" class="form-control" name="datanascimentonomeesposo"
                            id="datanascimentonomeesposo">

                        <label for="telefoneesposo">Telefone</label>
                        <input type="string" class="form-control" name="telefoneesposo"
                            id="telefoneesposo" placeholder="(99)99999-9999">

                        <label for="emailesposo">E-Mail</label>
                        <input type="string" class="form-control" name="emailesposo"
                            id="emailesposo" placeholder="a@a.com">

                        <label for="instagramesposo">Instagram</label>
                        <input type="string" class="form-control" name="instagramesposo"
                            id="instagramesposo" placeholder="@insta">

                        <label for="enderecocasal">Endereço do casal</label>
                        <input type="string" class="form-control" name="enderecocasal"
                            id="enderecocasal">

                        <label for="datacasamento">Data Casamento</label>
                        <input type="date" class="form-control" name="datacasamento"
                            id="datacasamento">

                        <label for="filhos">Filhos</label>
                        <input type="string" class="form-control" name="filhos"
                            id="filhos">

                        <label for="padrinhos">Padrinhos</label>
                        <input type="string" class="form-control" name="padrinhos"
                            id="padrinhos">

                        <div class="form-group">
                            <label for="image">Imagem do Casal:</label>
                            <input type="file" id="image" name="image" class="from-control-file">
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                    </form>
            </div>
    </div>
</div>

<a href="/home" class="btn btn-sm btn-primary">Home</a>
<a href="/" class="btn btn-sm btn-danger">Welcome</a>
