@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 class="h5 mb-4">Tambah Pasien</h2>

    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        @include('pasien.form')

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection