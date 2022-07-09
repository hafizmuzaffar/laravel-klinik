@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Pasien</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('pasien.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="@error('nama_pasien') is-invalid @enderror form-control "
                            id="nama_pasien" name="nama_pasien" placeholder="nama pasien"
                            value="{{ old('nama_pasien') }}">
                        @error('nama_pasien')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">-Pilih-</option>
                            <option @if (old('jenis_kelamin') == 'Laki-Laki') selected @endif value="Laki-Laki">Laki-Laki
                            </option>
                            <option @if (old('jenis_kelamin') == 'Perempuan') selected @endif value="Perempuan">Perempuan
                            </option>
                        </select>
                        <small class="form-text text-muted">Please Enter Jenis Kelamin</small>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror form-control" id="alamat"
                            name="alamat" placeholder="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="@error('keluhan') is-invalid @enderror form-control" id="keluhan"
                            name="keluhan" placeholder="keluhan" value="{{ old('keluhan') }}">
                        @error('keluhan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kd_dokter">Dokter</label>
                        <select class="form-control form-select" id="kd_dokter" name="kd_dokter">
                            @foreach ($dokters as $dokter)
                                @if (old('kd_dokter') == $dokter->id)
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama_dokter }}</option>
                                @else
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama_dokter }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kd_wilayah">Wilayah</label>
                        <select class="form-control form-select" id="kd_wilayah" name="kd_wilayah">
                            @foreach ($wilayahs as $wilayah)
                                @if (old('kd_wilayah') == $wilayah->id)
                                    <option value="{{ $wilayah->id }}">{{ $wilayah->nama_wilayah }}</option>
                                @else
                                    <option value="{{ $wilayah->id }}">{{ $wilayah->nama_wilayah }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
