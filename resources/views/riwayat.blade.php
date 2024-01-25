@extends('layouts.app')

@section('content')
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Wisata</th>
                        <th class="col-md-2">Kuantitas</th>
                        <th class="col-md-2">Tanggal</th>
                        <th class="col-md-2">Waktu</th>
                        <th class="col-md-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $item)
                    <tr>
                        <td>{{ $item['riwayat_id']}}</td>
                        <td>{{ $item['nama_wisata']}}</td>
                        <td>{{ $item['kuantitas']}}</td>
                        <td>{{ $item['tanggal']}}</td>
                        <td>{{ $item['waktu']}}</td>
                        <td>
                            <a href="{{ url('riwayat/'.$item['riwayat_id']) }}" class="btn btn-warning btn-sm">Receipt</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- AKHIR DATA -->
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