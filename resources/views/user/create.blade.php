@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.index') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nama User</label>
                        <input type="text" class="@error('name') is-invalid @enderror form-control " id="name"
                            name="name" placeholder="" value="{{ old('name') }} " echo ucfirst($string)>
                        <small class="form-text text-muted">Please Enter Name User</small>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="level">Jenis Level User</label>
                        <select name="level" class="form-control">
                            <option value="">-Pilih-</option>
                            <option @if (old('level') == 'admin') selected @endif value="admin">Admin
                            </option>
                            <option @if (old('level') == 'user') selected @endif value="user">User
                            </option>
                            <option @if (old('level') == 'dokter') selected @endif value="dokter">Dokter
                            </option>
                        </select>
                        <small class="form-text text-muted">Please Enter Jenis Level User</small>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email User</label>
                        <input type="email" class="@error('email') is-invalid @enderror form-control " id="email"
                            name="email" placeholder="" value="{{ old('email') }}">
                        <small class="form-text text-muted">Please Enter Email User</small>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password User</label>
                        <input type="password" class="@error('password') is-invalid @enderror form-control " id="password"
                            name="password" placeholder="" value="{{ old('password') }}">
                        <small class="form-text text-muted">Please Enter Password User</small>
                        @error('password')
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
