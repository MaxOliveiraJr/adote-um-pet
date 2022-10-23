<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdoptionCollection;
use App\Models\Adoption;
use App\Rules\AdoptionSingleAnimal;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{

    public function index (){
        $adoptios = Adoption::with('pet')->get();

        return new AdoptionCollection($adoptios);
    }
    public function store(Request $request)
    {
        $request->validate([
          "email"=>['required','email',new AdoptionSingleAnimal($request->input('pet_id',0))],
          "value"=>['required','numeric','between:10,100'],
          "pet_id"=>['required','int']
        ]);

        $adoptionData = $request->all();

       return Adoption::create($adoptionData);
    }
}
