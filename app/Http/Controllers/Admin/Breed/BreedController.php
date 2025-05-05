<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Breed;
use App\Models\Furparent;

class BreedController extends Controller
{
    public function index(){

        $breeds = Breed::with('furparent')->get();
        return view('breed', compact('breeds'));        
    }
}
