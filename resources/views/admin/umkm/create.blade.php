@extends('layouts.admin')

@section('title', 'Tambah UMKM')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah UMKM</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Nama UMKM</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>Geosite</label>
                <select name="geosite" class="form-control @error('geosite') is-invalid @enderror" required>
                    @foreach($geositeList as $gs)
                        <option value="{{ $gs }}" {{ old('geosite') === $gs ? 'selected' : '' }}>{{ ucfirst($gs) }}</option>
                    @endforeach
                </select>
                @error('geosite') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                @error('lokasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>Kontak</label>
                <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak') }}">
                @error('kontak') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="status" value="1" class="form-check-input" id="statusCheck" {{ old('status', 1) ? 'checked' : '' }}>
                <label class="form-check-label" for="statusCheck">Aktifkan</label>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
