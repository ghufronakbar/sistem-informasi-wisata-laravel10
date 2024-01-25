@extends('layouts.app')

@section('content')
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Receipt</h2>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><strong>ID</strong></td>
                                <td>{{ $riwayat['riwayat_id']}}</td>
                            </tr>
                            <tr>
                                <td><strong>Wisata</strong></td>
                                <td>{{ $riwayat['nama_wisata']}}</td>
                            </tr>                            
                            <tr>
                                <td><Strong>Kuantitas</Strong></td>
                                <td>{{ $riwayat['kuantitas']}}</td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal</strong></td>
                                <td>{{ $riwayat['tanggal']}}</td>
                            </tr>
                            <tr>
                                <td><strong>Waktu</strong></td>
                                <td>{{ $riwayat['waktu']}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p class="text-center">Terima kasih telah melakukan pemesanan. Semoga Anda menikmati wisata kami!</p>
                </div>
            </div>
        </div>
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
