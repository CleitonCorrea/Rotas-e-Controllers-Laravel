<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicosController extends Controller
{
    public function getMedicos(){

    	$medicos = 

    	[
    		[
			    'nome'          => 'Eduardo',
			    'especialidade' => 'Clínico Geral'
			], 
			[
			    'nome'          => 'Francine',
			    'especialidade' => 'Pediatra'
			]   	

    	];
			    	
    return $medicos;
    }
}
