<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function pagecentrale(){
    return view('Projet_CEMIFA');
    }
}
