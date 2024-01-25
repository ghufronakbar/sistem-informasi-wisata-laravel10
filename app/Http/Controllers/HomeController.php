<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view("wisata", compact(['wisata']));
    }
}
