<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipa;

class EquipasController extends Controller
{
    public function index(){
        $equipas = Equipa::paginate(4);
        return view('equipas.index',['equipa' =>$equipas]);
    }

    public function show(Request $req){
        $idEquipa = $req->id;
        $equipas = Equipa::where('id_equipa',$idEquipa)->with(['jogador'])->first();

        return view('equipas.show',['equipa'=>$equipas]);
    }
}
