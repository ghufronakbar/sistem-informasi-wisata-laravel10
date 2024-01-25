@extends('layouts.app')

@section('content')
    <main class="container">
        <!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="row">
        @foreach ($wisata as $item)
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="Deskripsi Gambar" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title"><strong>{{ $item['nama_wisata']}}</strong></h4>
                    <p class="card-text">{{ $item['lokasi']}}</p>
                    
                    <p class="card-text"><em>{{ $item['tipe']}}</em></p>
                    <h5 class="card-text">Rp {{ $item['harga']}}</h5>
                    <br>                    
                    <a href="{{ url('wisata/'.$item['wisata_id']) }}" class="btn btn-warning btn-sm">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- AKHIR DATA -->
<!-- Footer -->
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
