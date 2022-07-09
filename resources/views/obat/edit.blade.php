@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Obat</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Obat</h6>
            </div>
            <div class="card-body">
                <form action="/admin/obat/{{ $obat->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="@error('nama_obat') is-invalid @enderror form-control " id="nama_obat"
                            name="nama_obat" placeholder="nama_obat" value="{{ old('nama_obat', $obat->nama_obat) }}">
                        @error('nama_obat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori_obat">Jenis Kategory Obat</label>
                        <select name="kategori_obat" class="form-control">
                            <option value="{{ old('kategori_obat', $obat->kategori_obat) }}">-Pilih-</option>
                            <option @if (old('kategori_obat') == 'Obat Bebas') selected @endif value="Obat Bebas">Obat Bebas
                            </option>
                            <option @if (old('kategori_obat') == 'Obat Keras') selected @endif value="Obat Keras">Obat keras
                            </option>
                            <option @if (old('kategori_obat') == 'Obat Herbal') selected @endif value="Obat Herbal">Obat Herbal
                            </option>
                            <option @if (old('kategori_obat') == 'Obat Wajib Apotek') selected @endif value="Obat Wajib Apotek">Obat Wajib
                                Apotek (OWA)
                            </option>
                        </select>
                        <small class="form-text text-muted">Please Enter Jenis Kategory Obat</small>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="number" class="@error('jumlah_obat') is-invalid @enderror form-control "
                            id="jumlah_obat" name="jumlah_obat" placeholder="jumlah_obat"
                            value="{{ old('jumlah_obat', $obat->jumlah_obat) }}">
                        @error('jumlah_obat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga Obat</label>
                        <input type="number" class="@error('harga') is-invalid @enderror form-control " id="harga"
                            name="harga" placeholder="harga" value="{{ old('harga', $obat->harga) }}">
                        @error('harga')
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
