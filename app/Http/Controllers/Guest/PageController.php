<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $count_comic = Comic::count();
        $last_comic = Comic::orderBy('id', 'desc')->first();

    return view('home', compact('count_comic', 'last_comic'));

    }

    public function nuovaPagina(){
        return view('nuova-pagina');
    }



}
