<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Menampilkan daftar pasien
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        if ($keyword) {
            $pasien = Pasien::where('nama', 'like', "%$keyword%")
                            ->orWhere('nik', 'like', "%$keyword%")
                            ->paginate(10);
        } else {
            $pasien = Pasien::paginate(10);
        }

        return view('pasien.index', compact('pasien'));
    }

    // Menampilkan form tambah pasien
    public function create()
    {
        return view('pasien.create');
    }

    // Menyimpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nik' => 'required|size:16',
            'alamat' => 'required',
            'no_telp' => 'required|max:15',
            'email' => 'required|email',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil disimpan.');
    }

    // Menampilkan detail pasien
    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    // Menampilkan form edit pasien
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    // Menyimpan perubahan data pasien
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nik' => 'required|size:16',
            'alamat' => 'required',
            'no_telp' => 'required|max:15',
            'email' => 'required|email',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

    // Menghapus data pasien
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus.');
    }
}