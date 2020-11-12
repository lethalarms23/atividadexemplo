@extends('layout')
@section('header')
Procura
@endsection
@section('conteudo')
<form method="post" action="{{route('pesquisa.show')}}" style="padding-left: 10px;">
    @csrf
<label for="pesquisainput">Pesquisa:</label>
<input type="text" name="pesquisainput">
<button type="submit">Submeter</button>
</form>
@endsection