@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Obat</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('obat.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="@error('nama_obat') is-invalid @enderror form-control " id="nama_obat"
                            name="nama_obat" placeholder="" value="{{ old('nama_obat') }} " echo ucfirst($string)>
                        <small class="form-text text-muted">Please Enter Nama Obat</small>
                        @error('nama_obat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori_obat">Jenis Kategory Obat</label>
                        <select name="kategori_obat" class="form-control">
                            <option value="">-Pilih-</option>
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
                        <label for="jumlah_obat">Stock Obat</label>
                        <input type="number" class="@error('jumlah_obat') is-invalid @enderror form-control "
                            id="jumlah_obat" name="jumlah_obat" placeholder="" value="{{ old('jumlah_obat') }}">
                        <small class="form-text text-muted">Please Enter Stock Obat</small>
                        @error('jumlah_obat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga Obat</label>
                        <input type="number" class="@error('harga') is-invalid @enderror form-control " id="harga"
                            name="harga" placeholder="" value="{{ old('harga') }}">
                        <small class="form-text text-muted">Please Enter Harga Obat</small>
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
