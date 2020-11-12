@extends('layout')
@section('header')
Equipa
@endsection
@section('conteudo')
<div style="text-align:center">
<b>Designação:</b> {{$equipa->designacao}}<br>
<b>Id Equipa:</b> {{$equipa->id_equipa}} 
</div>
@endsection