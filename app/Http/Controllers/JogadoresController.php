<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadoresController extends Controller
{
    public function index(){
        $jogadores = Jogador::paginate(4);
        return view('jogadores.index',['jogador' =>$jogadores]);
    }

    public function show(Request $req){
        $idJogador = $req->id;
        $jogadores = Jogador::where('id_jogador',$idJogador)->with(['equipas'])->first();

        return view('jogadores.show',['jogador'=>$jogadores]);
    }
}
