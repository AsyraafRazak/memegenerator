<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function openAPI (){
    
        return view('apitesting');
    }
}
