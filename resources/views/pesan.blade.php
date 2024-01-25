@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ url('pesan') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="userId" name="userId" value="{{ $userId }}" hidden>
                <input type="text" class="form-control" id="wisataId" name="wisataId" value="{{ $wisata['wisata_id'] }}" hidden>
            </div>
            <!-- user field -->
            <div class="form-group">
                <label for="user">Nama</label>
                <input type="text" class="form-control" id="user" name="user" value="{{ $name }}" required>
            </div>

            <!-- wisata field -->
            <div class="form-group">
                <input type="hidden" class="form-control" id="wisata" name="wisata" value="{{ $wisata['nama_wisata'] }}" required>
            </div>

            <!-- unique_code field -->
            <div class="form-group">
                
                <input type="hidden" class="form-control" id="unique_code" name="unique_code" value="code" required>
            </div>

            <!-- kuantitas field -->
            <div class="form-group">
                <label for="kuantitas">Kuantitas</label>
                <input type="number" class="form-control" id="kuantitas" name="kuantitas" required>
            </div>

            <!-- tanggal field -->
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

            <!-- waktu field -->
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="time" class="form-control" id="waktu" name="waktu" required>
            </div>

            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
        </form>
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

@endsection