@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Pegawai</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pegawai</h6>
            </div>
            <div class="card-body">
                <form action="/admin/pegawai/{{ $pegawai->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="@error('nama_pegawai') is-invalid @enderror form-control "
                            id="nama_pegawai" name="nama_pegawai" placeholder="nama_pegawai"
                            value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}">
                        @error('nama_pegawai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror form-control " id="alamat"
                            name="alamat" placeholder="alamat" value="{{ old('alamat', $pegawai->alamat) }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
