@extends('main.layouts.main')
@section('content')
    <!-- header background component-->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="view text-center">
                <img src="{{ asset('main/img/24-landing3.png') }}" class="img-fluid" alt="sample image">
            </div>
        </div>
    </div>
    <div class="container-fluid font" id="main">
        <div class="custom-shape-divider-top-1662649051">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <!--service-->
    <h1 class="text-center mb-5 mt-5 fw-bold " style="color: #1c138b
        ;" id="services">اعمالنا</h1>

    <div class="container">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6">
                    <div class="  border rounded">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe class=" rounded" src="{{ $link->link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-2">
            {{ $links->links() }}
        </div>
    </div>
@endsection
