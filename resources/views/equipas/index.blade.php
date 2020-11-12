@extends('layout')
@section('header')
Equipas
@endsection
@section('conteudo')
@foreach($equipa as $equip)
<div style="text-align: center; text-decoration: underline">
<a href="{{route('equipas.show',['id'=>$equip->id_equipa])}}">{{$equip->designacao}}</a><br>
</div>
@endforeach
@endsection