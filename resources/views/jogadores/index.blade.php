@extends('layout')
@section('header')
Jogadores
@endsection
@section('conteudo')
@foreach($jogador as $jog)
<div style="text-align: center; text-decoration: underline">
<a href="{{route('jogadores.show',['id'=>$jog->id_jogador])}}">{{$jog->nome}}</a><br>
</div>
@endforeach
@endsection