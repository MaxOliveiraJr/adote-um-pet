<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(){
      return  [
            [
                'nome' => 'Max',
                'sobrenome'=> 'Oliveira'
            ],
            [
                'nome' => 'Max',
                'sobrenome' => 'Oliveira'
            ],
            [
                'nome' => 'Max',
                'sobrenome' => 'Oliveira'
            ],
        ];
    }
}
