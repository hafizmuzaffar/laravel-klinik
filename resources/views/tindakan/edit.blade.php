@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Tindakan</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Tindakan</h6>
            </div>
            <div class="card-body">
                <form action="/admin/tindakan/{{ $item->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="@error('nama_pasien') is-invalid @enderror form-control "
                            id="nama_pasien" name="nama_pasien" placeholder="nama_pasien"
                            value="{{ old('nama_pasien', $pasiens->nama_pasien) }}">
                        @error('nama_pasien')
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
