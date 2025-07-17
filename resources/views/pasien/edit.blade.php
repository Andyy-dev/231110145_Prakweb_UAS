@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 class="h5 mb-4">Edit Pasien</h2>

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pasien.form')

        <div class="mt-3">
            <button type="submit" class="btn btn-warning text-white">Update</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection