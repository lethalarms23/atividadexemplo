@extends('layout')
@section('header')
Jogadores
@endsection
@section('conteudo')
<div style="text-align:center">
<b>Nome:</b> {{$jogador->nome}} <br>
<b>Id Jogador:</b> {{$jogador->id_jogador}} <br>
<b>Id Equipa:</b> {{$jogador->id_equipa}} <br>
<b>Nacionalidade: </b>{{$jogador->nacionalidade}} <i class="{{strtolower($jogador->nacionalidade)}} flag"></i>
</div>
@endsection