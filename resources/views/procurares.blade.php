@extends('layout')
@section('header')
Resultado para: {{$texto}}
@endsection
@section('conteudo')
@if(count($resultado1)>0)
    Resultados de Jogadores:<br>
    @foreach($resultado1 as $res1)
    {{$res1->nome}}<br>
    @endforeach
@else
    <div class="alert alert-danger" role="alert">
    Nenhum resultado para jogadores.
    </div>
@endif
@if(count($resultado2)>0)
    Resultados de Equipas:<br>
    @foreach($resultado2 as $res2)
    {{$res2->designacao}}
    @endforeach
@else
    <div class="alert alert-danger" role="alert">
    Nenhum resultado para equipas.
    </div>
@endif
@endsection