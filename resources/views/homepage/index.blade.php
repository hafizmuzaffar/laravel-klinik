@extends('layouts.template')
@push('css')
    <style>
        #carousel img {
            width: 100%;
            height: 80vh;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        {{-- carousel --}}
        <div class="row">
            <div class="col">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('assets/images/video-bg.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('assets/images/b2.jpg') }}" alt="">
                        </div>
                    </div>
                    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- end carousel --}}

        {{-- kategori product --}}
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Daftar Dokter Yang Tersedia </h2>
            </div>

            {{-- kategori pertama --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/t1.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <p class="card-text">Dr. Pratama</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/t2.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <p class="card-text" style="center">Dr. Iffana</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/t3.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <p class="card-text">Dr. Sueb</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end kategori product --}}
    </div>
@endsection
