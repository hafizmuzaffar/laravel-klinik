@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Dokter</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Dokter</h6>
            </div>
            <div class="card-body">
                <form action="/admin/dokter/{{ $dokter->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" class="@error('nama_dokter') is-invalid @enderror form-control "
                            id="nama_dokter" name="nama_dokter" placeholder="nama_dokter"
                            value="{{ old('nama_dokter', $dokter->nama_dokter) }}">
                        @error('nama_dokter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror form-control " id="alamat"
                            name="alamat" placeholder="alamat" value="{{ old('alamat', $dokter->alamat) }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="spesialis_dokter">Spesialis Dokter</label>
                        <select name="spesialis_dokter" class="form-control">
                            <option value="">-Pilih-</option>
                            <option @if (old('spesialis_dokter') == 'Dokter Spesialis Anak') selected @endif value="Dokter Spesialis Anak">Dokter
                                Spesialis Anak
                            </option>
                            <option @if (old('spesialis_dokter') == 'Dokter Spesialis Penyakit Dalam') selected @endif
                                value="Dokter Spesialis Penyakit Dalam">Dokter Spesialis Penyakit Dalam
                            </option>
                            <option @if (old('spesialis_dokter') == 'Dokter Spesialis Gigi') selected @endif value="Dokter Spesialis Gigi">Dokter
                                Spesialis Gigi
                            </option>
                            <option @if (old('spesialis_dokter') == 'Dokter Spesialis THT') selected @endif value="Dokter Spesialis THT">Dokter
                                Spesialis THT
                            </option>
                        </select>
                        <small class="form-text text-muted">Please Enter Jenis Spesialis Dokter</small>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
