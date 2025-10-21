@extends('master')

@section('title', 'Edit Data Pegawai')

@section('content')
<div class="container mt-5">
    <div class="card p-4 mx-auto" style="max-width: 700px;">
        <h2 class="text-center mb-4 text-primary fw-bold">Edit Data Pegawai</h2>

        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control border-0 shadow-sm"
                       value="{{ old('nama_lengkap', $employee->nama_lengkap) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" name="email" class="form-control border-0 shadow-sm"
                       value="{{ old('email', $employee->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="nomor_telepon" class="form-label fw-semibold">Nomor Telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control border-0 shadow-sm"
                       value="{{ old('nomor_telepon', $employee->nomor_telepon) }}">
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control border-0 shadow-sm"
                       value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control border-0 shadow-sm" rows="3">{{ old('alamat', $employee->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal_masuk" class="form-label fw-semibold">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control border-0 shadow-sm"
                       value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-semibold">Status</label>
                <select id="status" name="status" class="form-select border-0 shadow-sm">
                    <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>

            <div class="text-end">
                <a href="{{ route('employees.index') }}" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-custom">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
