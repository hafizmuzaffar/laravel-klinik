@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Tindakan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('tindakan.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="kd_pasien">Pasien</label>
                        <select class="form-control form-select" id="kd_pasien" name="kd_pasien">
                            @foreach ($pasiens as $pasien)
                                @if (old('kd_pasien') == $pasien->id)
                                    <option value="{{ $pasien->id }}">{{ $pasien->nama_pasien }}</option>
                                @else
                                    <option value="{{ $pasien->id }}">{{ $pasien->nama_pasien }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kd_ruang" class="form-label">Ruangan</label>
                        <select name="kd_ruang" class="form-control form-select" id="kd_ruang">
                            @foreach ($ruangs as $item)
                                @if (old('kd_ruang') == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->nama_ruang }} -
                                        {{ $item->nama_gedung }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->nama_ruang }} -
                                        {{ $item->nama_gedung }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_pembayaran">Pilih Jenis Pembayaran</label>
                        <select name="jenis_pembayaran" class="form-control">
                            <option value="">-Pilih-</option>
                            <option @if (old('jenis_pembayaran') == 'Cash') selected @endif value="Cash">Cash
                            </option>
                            <option @if (old('jenis_pembayaran') == 'BPJS') selected @endif value="BPJS">BPJS
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kd_obat">Obat</label>
                        <select class="form-control form-select" id="kd_obat" name="kd_obat">
                            @foreach ($obats as $obat)
                                @if (old('kd_obat') == $obat->id)
                                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                                @else
                                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="number" class="@error('jumlah_obat') is-invalid @enderror form-control "
                            id="jumlah_obat" name="jumlah_obat" placeholder="" value="{{ old('jumlah_obat') }}">
                        <small class="form-text text-muted">Please Enter Jumlah Obat</small>
                        @error('jumlah_obat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                        <input type="number" class="@error('jumlah_pembayaran') is-invalid @enderror form-control "
                            id="jumlah_pembayaran" name="jumlah_pembayaran" placeholder=""
                            value="{{ old('jumlah_pembayaran') }}">
                        <small class="form-text text-muted">Please Enter Jumlah Pembayaran</small>
                        @error('jumlah_pembayaran')
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
