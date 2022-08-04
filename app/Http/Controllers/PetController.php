<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        /**
         * Retorna lista de pets cadastrados
         *
         * @return Collection
         */

        return  Pet::get();
    }
}
