<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Ulasan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index()
    {
        $wisata = Wisata::all();        
        return view("home", compact(['home']));
    }

}
