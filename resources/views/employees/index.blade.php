@extends('master')
@section('title', 'Daftar Pegawai')

@section('content')
<div class="container">
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Daftar Pegawai</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-custom">+ Tambah Pegawai</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Tanggal Masuk</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->nama_lengkap }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->nomor_telepon }}</td>
                            <td>{{ $employee->tanggal_lahir }}</td>
                            <td>{{ $employee->alamat }}</td>
                            <td>{{ $employee->tanggal_masuk }}</td>
                            <td>
                                <span class="badge {{ $employee->status == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ ucfirst($employee->status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-outline-info">Detail</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
