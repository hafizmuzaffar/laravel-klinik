@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Ruangan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('ruang.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_ruang">Nama Ruangan</label>
                        <input type="text" class="@error('nama_ruang') is-invalid @enderror form-control " id="nama_ruang"
                            name="nama_ruang" placeholder="" value="{{ old('nama_ruang') }}">
                        <small class="form-text text-muted">Please Enter Nama Ruang</small>
                        @error('nama_ruang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_gedung">Nama Gedung</label>
                        <input type="text" class="@error('nama_gedung') is-invalid @enderror form-control "
                            id="nama_gedung" name="nama_gedung" placeholder="" value="{{ old('nama_gedung') }}">
                        <small class="form-text text-muted">Please Enter Nama Gedung</small>
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
