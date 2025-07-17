@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h4 mb-4">Daftar Pasien</h1>

    <!-- Form Pencarian dan Tombol Tambah -->
    <div class="row mb-3">
        <div class="col-md-8">
            <form method="GET" action="{{ route('pasien.index') }}" class="d-flex">
                <input type="text" name="search" placeholder="Cari nama atau NIK..." value="{{ request('search') }}" class="form-control me-2">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('pasien.create') }}" class="btn btn-success">+ Tambah Pasien</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel Pasien -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pasien as $p)
                    <tr>
                        <td>{{ $loop->iteration + ($pasien->firstItem() - 1) }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->no_telp }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                            <a href="{{ route('pasien.show', $p->id) }}" class="btn btn-sm btn-info text-white">Lihat</a>
                            <a href="{{ route('pasien.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('pasien.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">Tidak ada data pasien.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $pasien->withQueryString()->links() }}
    </div>
</div>
@endsection