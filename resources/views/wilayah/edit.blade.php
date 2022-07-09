@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Wilayah</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Wilayah</h6>
            </div>
            <div class="card-body">
                <form action="/admin/wilayah/{{ $wilayah->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_wilayah">Nama Wilayah</label>
                        <input type="text" class="@error('nama_wilayah') is-invalid @enderror form-control "
                            id="nama_wilayah" name="nama_wilayah" placeholder="nama_wilayah"
                            value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}">
                        @error('nama_wilayah')
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
