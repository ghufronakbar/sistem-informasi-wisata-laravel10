@extends('layouts.app')

@section('content')
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $wisata['gambar']) }}" class="img-fluid rounded" alt="Deskripsi Gambar">
        </div>
        <div class="col-md-6">
            <h2>{{ $wisata['nama_wisata']}}</h2>
            <p>{{ $wisata['deskripsi']}}</p>
            <ul class="list-group">
                <li class="list-group-item"><strong>Lokasi:</strong> {{ $wisata['lokasi']}}</li>
                <li class="list-group-item"><strong>Tipe:</strong> {{ $wisata['tipe']}}</li>
                <li class="list-group-item"><strong>Harga:</strong> Rp {{ $wisata['harga']}}</li>
                
            </ul>
            <a href="{{ url('pesan/'.$wisata['wisata_id']) }}" class="btn btn-warning mt-3">Pesan</a>
        </div>
    </div>
</div>

        </div>
        <!-- AKHIR DATA -->
        <div class="container">
            <div class="row justify">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Tambah Kometar</div>
    
                        <div class="card-body">
                            <form action="{{ url('ulasan') }}" method="POST">
                                @csrf
                                <input class="form-control" id="wisata_id" name="wisata_id" value={{ $wisata['wisata_id']}} hidden>
                                <div class="mb-3">
                                    
                                    <textarea class="form-control" id="komentar_ulasan" name="komentar_ulasan" rows="3" required></textarea>
                                </div>
    
                                <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
 <!-- START DATA -->
 <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">Komentar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ulasan as $item)
                    <tr>
                        <td>{{ $item['komentar_ulasan']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- AKHIR DATA -->
                </div>
            </div>
        </div>
        <footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
    
                
                <p class="mt-2">Copyright © 2024. Mawar Pratamasari - 5220411049</p>

                <!-- Nama dan NIM -->
                <p class="mt-3">All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

    </main>
@endsection
