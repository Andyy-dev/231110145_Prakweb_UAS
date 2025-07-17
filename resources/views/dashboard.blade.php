@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="text-center mb-5">
        <h1 class="mb-3">Selamat Datang di Sistem Manajemen Pasien</h1>
        <p class="lead">Gunakan menu navigasi di atas untuk mengelola data pasien.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-body text-center">
                    <h4 class="card-title">Total Pasien</h4>
                    <p class="display-4">{{ $jumlahPasien }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection