<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecoController extends Controller
{
    public function preco(){
        return view('site.preco');
    }
}
