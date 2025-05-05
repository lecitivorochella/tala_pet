<?php

namespace App\Http\Controllers\Ajax\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Breed;
use App\Models\Furparent;

class BreedController extends Controller
{
   
    public function create (Request $request){
        $request->validate([
            'name' => 'required',
            'furparent_id' => 'required',
            'adoptiondate' => 'required'
        ]);

        if($breed = new Breed()){

            $breed->name = $request->input('name');
            $breed->furparent_id = $request->input('furparent_id');
            $breed->adoptiondate = $request-> input('adoptiondate');    
            $breed->save();

            return redirect()->route('breed');
        }else{
            return response()->json(['message' => 'Error adding info'], 422);
        }
    }
}
