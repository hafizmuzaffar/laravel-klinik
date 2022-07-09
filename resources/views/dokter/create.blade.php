@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Dokter</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('dokter.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" class="@error('nama_dokter') is-invalid @enderror form-control "
                            id="nama_dokter" name="nama_dokter" placeholder="" value="{{ old('nama_dokter') }} " echo
                            ucfirst($string)>
                        <small class="form-text text-muted">Please Enter Nama Dokter</small>
                        @error('nama_dokter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror form-control " id="alamat"
                            name="alamat" placeholder="" value="{{ old('alamat') }} " echo ucfirst($string)>
                        <small class="form-text text-muted">Please Enter Alamat</small>
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
