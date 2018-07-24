<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function apresentarDados($nome, $idade){

    	return "<p>Meu nome é: $nome <br> Minha idade é: $idade</p>";

    }
}
