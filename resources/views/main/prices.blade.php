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
    <div class="wrapperr">
        <div class="tablle basic">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="textt">

                        </span>
                        <span class="price p-1">{{ $prices->price_15 }}</span>
                    </div>
                </div>
            </div>
            <div class="package-name">

            </div>
            <div class="features">
                <li><span class="list-name fw-bold">تعليق صوتي</span></li>
                <li><span class="list-name fw-bold">كتابة المحتوي</span></li>
                <li><span class="list-name fw-bold">رسم المشاهد</span></li>
                <li><span class="list-name fw-bold">التحريك</span></li>
                <div class="btn"><button>اتمام الطلب</button></div>
            </div>
        </div>
        <div class="tablle Premium">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="textt">

                        </span>
                        <span class="price">{{ $prices->price_30 }}</span>
                    </div>
                </div>
            </div>
            <div class="package-name">

            </div>
            <div class="features">
                <li><span class="list-name fw-bold">تعليق صوتي</span></li>
                <li><span class="list-name fw-bold">كتابة المحتوي</span></li>
                <li><span class="list-name fw-bold">رسم المشاهد</span></li>
                <li><span class="list-name fw-bold">التحريك</span></li>
                <div class="btn"><button>اتمام الطلب</button></div>
            </div>
        </div>
        <div class="tablle Ultimate">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="textt">

                        </span>
                        <span class="price">{{ $prices->price_45 }}</span>
                    </div>
                </div>
            </div>
            <div class="package-name">

            </div>
            <div class="features">
                <li><span class="list-name fw-bold">تعليق صوتي</span></li>
                <li><span class="list-name fw-bold">كتابة المحتوي</span></li>
                <li><span class="list-name fw-bold">رسم المشاهد</span></li>
                <li><span class="list-name fw-bold">التحريك</span></li>
                <div class="btn"><button>اتمام الطلب</button></div>
            </div>
        </div>
        <div class="tablle pro">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="textt">

                        </span>
                        <span class="price">{{ $prices->price_60 }}</span>
                    </div>
                </div>
            </div>
            <div class="package-name">

            </div>
            <div class="features">
                <li><span class="list-name fw-bold">تعليق صوتي</span></li>
                <li><span class="list-name fw-bold">كتابة المحتوي</span></li>
                <li><span class="list-name fw-bold">رسم المشاهد</span></li>
                <li><span class="list-name fw-bold">التحريك</span></li>
                <div class="btn"><button>اتمام الطلب</button></div>
            </div>
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
