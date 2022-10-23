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
                <div class="btn"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        اتمام الطلب
                    </button></div>
            </div>
        </div>

        <!-- Modal basic -->
        <div class="modal fade modalcss " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold mr-lg-5" id="exampleModalLabel">اكتب بياناتك</h5>
                        <button ty pe="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pay.link') }}" method="POST">
                            @csrf
                            <div>
                                <label class="form-label" for="textName">الاسم</label>
                                <input type="text" id="textName" name="name" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="loginName">الايميل</label>
                                <input type="email" name="email" id="loginName" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="Number">رقم الهاتف</label>
                                <input type="number" name="number" id="Number" class="form-control" required />
                            </div>
                            <div>
                                <input type="hidden" name="value" value="{{ $prices->price_15 }}" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> إغلاق</button>
                                <button type="submit" class="btn btn-primary">التالي</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                <div class="btn"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        اتمام الطلب
                    </button></div>
            </div>
        </div>

        <!-- Modal Premium -->
        <div class="modal fade modalcss" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="exampleModal2Label">اكتب بياناتك</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pay.link') }}" method="POST">
                            @csrf
                            <div>
                                <label class="form-label" for="textName">الاسم</label>
                                <input type="text" id="textName" name="name" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="loginName">الايميل</label>
                                <input type="email" name="email" id="loginName" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="Number">رقم الهاتف</label>
                                <input type="number" name="number" id="Number" class="form-control" required />
                            </div>
                            <div>
                                <input type="hidden" name="value" value="{{ $prices->price_30 }}" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> إغلاق</button>
                                <button type="submit" class="btn btn-primary">التالي</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                <div class="btn"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3">
                        اتمام الطلب
                    </button></div>
            </div>
        </div>

        <!-- Modal Ultimate  -->
        <div class="modal fade modalcss" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="exampleModal3Label">اكتب بياناتك</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pay.link') }}" method="POST">
                            @csrf
                            <div>
                                <label class="form-label" for="textName">الاسم</label>
                                <input type="text" id="textName" name="name" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="loginName">الايميل</label>
                                <input type="email" name="email" id="loginName" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="Number">رقم الهاتف</label>
                                <input type="number" name="number" id="Number" class="form-control" required />
                            </div>
                            <div>
                                <input type="hidden" name="value" value="{{ $prices->price_45 }}" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> إغلاق</button>
                                <button type="submit" class="btn btn-primary">التالي</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                <div class="btn"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal4">
                        اتمام الطلب
                    </button></div>
            </div>
        </div>

        <!-- Modal pro -->
        <div class="modal fade modalcss" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="exampleModal4Label">اكتب بيانات</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pay.link') }}" method="POST">
                            @csrf
                            <div>
                                <label class="form-label" for="textName">الاسم</label>
                                <input type="text" id="textName" name="name" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="loginName">الايميل</label>
                                <input type="email" name="email" id="loginName" class="form-control" required />
                            </div>
                            <div>
                                <label class="form-label" for="Number">رقم الهاتف</label>
                                <input type="number" name="number" id="Number" class="form-control" required />
                            </div>
                            <div>
                                <input type="hidden" name="value" value="{{ $prices->price_60 }}" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> إغلاق</button>
                                <button type="submit" class="btn btn-primary">التالي</button>
                            </div>
                        </form>
                    </div>
                </div>
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
