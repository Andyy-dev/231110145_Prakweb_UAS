@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 class="h5 mb-4">Detail Pasien</h2>

    <div class="mb-4">
        <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
        <p><strong>NIK:</strong> {{ $pasien->nik }}</p>
        <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
        <p><strong>No. Telp:</strong> {{ $pasien->no_telp }}</p>
        <p><strong>Email:</strong> {{ $pasien->email }}</p>
    </div>

    <div>
        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning text-white">Edit</a>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection