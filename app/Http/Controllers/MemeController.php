<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MemeController extends Controller
{
    public function getMemes(){
        #when function run, we call get api for meme generator api
        $response = Http::get('https://api.imgflip.com/get_memes');
        $decode_res = json_decode($response->body());
        $memes = $decode_res->data->memes;
        return view('welcome',compact('memes'));
    }
}
