<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtoController extends Controller
{
   
    public function index()
    {

        $produtos = 

        [
            [
                'nome'          => 'Leite em Pó',
                'marca'         => 'Nestle',
                'clientes'      =>  array(  
                                        'nome'      => 'Cleiton', 
                                        'empresa'   => 'DMV Informatica' )
                                    
                     
            ], 
            
            [
                'nome'          => 'Chocolate em Pó',
                'marca'         => 'Nescau',
                'clientes'      =>  array(
                                          'nome'          => 'Rodrigo',
                                          'empresa'       => 'DMV Informatica' )
            ]       

        ];

        return view('produtos', compact('produtos'));
    }

 
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        
        return $id;
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
