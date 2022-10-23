<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;

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


    public function store(PetRequest $request)
    {


        $petData = $request->all();

        return Pet::create($petData);
    }
}
