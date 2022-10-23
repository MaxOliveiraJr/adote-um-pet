<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdoptionCollection;
use App\Models\Adoption;
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
          "email"=>['required','email'],
          "value"=>['required','numeric','between:10,100'],
          "pet_id"=>['required','int']
        ]);

        $adoptionData = $request->all();

       return Adoption::create($adoptionData);
    }
}
