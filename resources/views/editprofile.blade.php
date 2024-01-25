@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profil</div>

                    <div class="card-body">
                        <form action="{{ url('editprofile', Auth::id()) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Profil</button>
                        </form>
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

@endsection
