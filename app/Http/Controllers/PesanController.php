<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Ulasan;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $userId = Auth::id();
        $name = Auth::user()->name;
        $wisata = Wisata::where('wisata_id', $id)->first();
        return view('pesan', compact('wisata', 'name', 'userId'));
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
        $data = [
            'user_id' => $request->userId,
            'wisata_id' => $request->wisataId,
            'unique_code' => $request->unique_code,
            'kuantitas' => $request->kuantitas,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ];
        Riwayat::create($data);
        return redirect('/riwayat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
