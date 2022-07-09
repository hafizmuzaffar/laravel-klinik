@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Wilayah</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('wilayah.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_wilayah">Nama Wilayah</label>
                        <input type="text" class="@error('nama_wilayah') is-invalid @enderror form-control "
                            id="nama_wilayah" name="nama_wilayah" placeholder="" value="{{ old('nama_wilayah') }}">
                        <small class="form-text text-muted">Please Enter Nama Wilayah</small>
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
