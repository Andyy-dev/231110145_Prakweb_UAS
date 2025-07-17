<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $pasien->nama ?? '') }}" class="form-control" required>
    @error('nama') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">NIK</label>
    <input type="text" name="nik" value="{{ old('nik', $pasien->nik ?? '') }}" class="form-control" maxlength="16" required>
    @error('nik') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $pasien->alamat ?? '') }}</textarea>
    @error('alamat') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">No. Telp</label>
    <input type="text" name="no_telp" value="{{ old('no_telp', $pasien->no_telp ?? '') }}" class="form-control" required>
    @error('no_telp') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{ old('email', $pasien->email ?? '') }}" class="form-control" required>
    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
</div>