@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Ruangan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Ruangan</h6>
            </div>
            <div class="card-body">
                <form action="/admin/ruang/{{ $ruang->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_ruang">Nama Ruang</label>
                        <input type="text" class="@error('nama_ruang') is-invalid @enderror form-control "
                            id="nama_ruang" name="nama_ruang" placeholder="nama_ruang"
                            value="{{ old('nama_ruang', $ruang->nama_ruang) }}">
                        @error('nama_ruang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_gedung">Nama Gedung</label>
                        <input type="text" class="@error('nama_gedung') is-invalid @enderror form-control "
                            id="nama_gedung" name="nama_gedung" placeholder="nama_gedung"
                            value="{{ old('nama_gedung', $ruang->nama_gedung) }}">
                        @error('nama_gedung')
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
