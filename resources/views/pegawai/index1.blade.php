@extends('layouts.dashboard')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="content">
                                <div>
                                    <div class="card-tools">
                                        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
                                    </div>
                                    {{-- <button type="button" class="btn btn-primary mb-1 rounded shadow-lg "
                                        data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus-square"></i>
                                        Create User
                                    </button> --}}
                                </div>
                                <div class="animated fadeIn">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Data Table Pegawai</strong>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                                <div class="card-body">
                                                    <table id="myTable" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama Karyawan</th>
                                                                <th>Alamat Karyawan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pegawais as $pegawai)
                                                            @endforeach
                                                            <tr>
                                                                <td>{{ $pegawai->kd_pegawai }}</td>
                                                                <td>{{ $pegawai->nama_pegawai }}</td>
                                                                <td>{{ $pegawai->alamat }}</td>
                                                                <td>
                                                                    <form action="{{ route('pegawai.index') }}"
                                                                        method="post" class="d-inline">
                                                                        @csrf
                                                                        @method('put')
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-toggle="modal" data-target="#editModal">
                                                                            Edit
                                                                        </button>
                                                                    </form>
                                                                    <form action="#" method="POST" class="d-inline">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger"
                                                                            onclick="return confirm('Are you sure you want to delete this')">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Tambah User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="/admin/pegawai" method="post" enctype="multipart/form-data"
                                                    class="form-horizontal">
                                                    @csrf
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Nama</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="name"
                                                                name="name" placeholder="Text"
                                                                class="form-control"><small
                                                                class="form-text text-muted">Please Enter your Name</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="email-input"
                                                                class=" form-control-label">Email Input</label></div>
                                                        <div class="col-12 col-md-9"><input type="email" id="email"
                                                                name="email" placeholder="Enter Email"
                                                                class="form-control"><small
                                                                class="help-block form-text">Please enter your email</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="password-input"
                                                                class=" form-control-label">Password</label></div>
                                                        <div class="col-12 col-md-9"><input type="password" id="password"
                                                                name="password" placeholder="Password"
                                                                class="form-control"><small
                                                                class="help-block form-text">Please enter a complex
                                                                password</small></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Level</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="level"
                                                                name="level" placeholder="Text"
                                                                class="form-control"><small
                                                                class="form-text text-muted">Level</small>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="#" method="post" enctype="multipart/form-data"
                                                    class="form-horizontal">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Nama</label></div>
                                                        <div class="col-12 col-md-9"><input type="text"
                                                                id="text-input" name="text-input" placeholder="Text"
                                                                class="form-control"><small
                                                                class="form-text text-muted">Please Enter your Name</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="email-input"
                                                                class=" form-control-label">Email Input</label></div>
                                                        <div class="col-12 col-md-9"><input type="email"
                                                                id="email-input" name="email-input"
                                                                placeholder="Enter Email" class="form-control"><small
                                                                class="help-block form-text">Please enter your
                                                                email</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="password-input"
                                                                class=" form-control-label">Password</label></div>
                                                        <div class="col-12 col-md-9"><input type="password"
                                                                id="password-input" name="password-input"
                                                                placeholder="Password" class="form-control"><small
                                                                class="help-block form-text">Please enter a complex
                                                                password</small></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Level</label></div>
                                                        <div class="col-12 col-md-9"><input type="text"
                                                                id="text-input" name="text-input" placeholder="Text"
                                                                class="form-control"><small
                                                                class="form-text text-muted">Level</small>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
