@extends('master')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4" style="background-color: #fdf7ff;">
        <div class="card-body px-5 py-4">
            <h2 class="text-center mb-4 fw-bold" style="color: #7b5ba1;">Form Tambah Pegawai</h2>

            <form action="{{ route('employees.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" class="form-control border-0 shadow-sm" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" style="background-color: #fefbff;" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control border-0 shadow-sm" id="email" name="email" placeholder="contoh@email.com" style="background-color: #fefbff;" required>
                </div>

                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label fw-semibold">Nomor Telepon</label>
                    <input type="text" class="form-control border-0 shadow-sm" id="nomor_telepon" name="nomor_telepon" placeholder="0812xxxxxx" style="background-color: #fefbff;">
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                    <input type="date" class="form-control border-0 shadow-sm" id="tanggal_lahir" name="tanggal_lahir" style="background-color: #fefbff;">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label fw-semibold">Alamat</label>
                    <textarea class="form-control border-0 shadow-sm" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" style="background-color: #fefbff;"></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal_masuk" class="form-label fw-semibold">Tanggal Masuk</label>
                    <input type="date" class="form-control border-0 shadow-sm" id="tanggal_masuk" name="tanggal_masuk" style="background-color: #fefbff;">
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label fw-semibold">Status</label>
                    <select id="status" name="status" class="form-select border-0 shadow-sm" style="background-color: #fefbff;">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn px-5 py-2 fw-semibold shadow-sm" style="background-color: #b69df3; color: white; border-radius: 30px;">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
