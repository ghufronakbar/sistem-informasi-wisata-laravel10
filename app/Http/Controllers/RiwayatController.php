<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $userId = Auth::id();
        $riwayat = Riwayat::join('users', 'riwayat.user_id', '=', 'users.id')
        ->join('wisata', 'riwayat.wisata_id', '=', 'wisata.wisata_id')
        ->where('riwayat.user_id', $userId)
        ->select('riwayat.*', 'wisata.nama_wisata')
        ->get();
        return view("riwayat", compact(['riwayat']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $riwayat = Riwayat::join('users', 'riwayat.user_id', '=', 'users.id')
        ->join('wisata', 'riwayat.wisata_id', '=', 'wisata.wisata_id')
        ->where('riwayat.riwayat_id', $id)
        ->select('riwayat.*', 'wisata.nama_wisata')
        ->first();
        return view("detailriwayat", compact('riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
