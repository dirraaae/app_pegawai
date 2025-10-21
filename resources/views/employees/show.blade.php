@extends('master')

@section('title', 'Detail Pegawai')

@section('content')
<div class="container mt-5">
    <div class="card p-4 mx-auto" style="max-width: 700px;">
        <h2 class="text-center mb-4 text-primary fw-bold">Detail Pegawai</h2>

        <table class="table table-borderless">
            <tr>
                <th class="text-secondary" style="width: 35%;">Nama Lengkap</th>
                <td>{{ $employee->nama_lengkap }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Email</th>
                <td>{{ $employee->email }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Nomor Telepon</th>
                <td>{{ $employee->nomor_telepon }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Tanggal Lahir</th>
                <td>{{ $employee->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Alamat</th>
                <td>{{ $employee->alamat }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Tanggal Masuk</th>
                <td>{{ $employee->tanggal_masuk }}</td>
            </tr>
            <tr>
                <th class="text-secondary">Status</th>
                <td>
                    @if($employee->status == 'aktif')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-secondary">Nonaktif</span>
                    @endif
                </td>
            </tr>
        </table>

        <div class="text-end mt-4">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary me-2">Kembali</a>
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-custom">Edit</a>
        </div>
    </div>
</div>
@endsection
