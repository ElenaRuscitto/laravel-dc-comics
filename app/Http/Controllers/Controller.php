<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Comic;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    // public function index()
    // {
    //     $count_comic = Comic::count();
    //     $last_comic = Comic::orderBy('id', 'desc')->first();
    // return view('home', compact('count_comic', 'last_comic'));
    // }
}
