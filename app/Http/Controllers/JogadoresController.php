<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogadoresController extends Controller
{
    public function index(){
        return view('jogadores');
    }
}
