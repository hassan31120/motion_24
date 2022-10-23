@extends('main.layouts.main')

@section('content')
    <div class="container-fluid font" id="main">
        <div class="custom-shape-divider-top-1662649051">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <!-- pricing table -->
    <div class="container mt-5">
        <div class="text-center">
            <span>
                <i style="font-size:150px;" class="fa-sharp fa-solid fa-circle-exclamation text-danger"></i>
            </span>
            <h1 class="fw-bold">  فشلت عملية الدفع ! </h1>
            <p class="fw-bold">  حاول مرة اخري <p>
            <div class="row d justify-content-center">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <hr>
                </div>
            </div>
           <br> <br> <br>
        </div>
    </div>
@endsection

@section('footer_item')
    <div class="footer-cta pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-4 mb-30 text-center">
                <div class="single-cta">
                    <div class="cta-text">
                        <h1 class="fw-bold text-center text-light" data-aos="fade-up" ata-aos-offset="250"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <strong class=" text-light fw-bolder"> للتواصل مع الدعم الفني</strong>
                        </h1>

                        <div class=" col-md-12 text-center mt-3">
                            <a href="{{ $setting->link }}" target="_blank" class="btn btn-success  btn-lg fw-bold"
                                role="button">
                                <h2 class="fw-bold">اضغط هنا</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
