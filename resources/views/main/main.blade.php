@extends('main.layouts.main')
@section('content')
    <!-- header background component-->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="view text-center">
                <img src="{{ asset('main/img/24-landing.png') }}" class="img-fluid" alt="sample image">
            </div>

        </div>
    </div>
    <div class="container-fluid font" id="main">
        <div class="custom-shape-divider-top-1662649051">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <!--about us-->
    <div class="container">
        <div class="row row d-flex justify-content-between mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card text-center textcardCSS">
                    <div class="card-body ">
                        <h1 class="card-title text-center fw-bold">من نحن</h1>
                        <h5 class="card-end text-end fw-bold fs-5"> نحن فريق متخصص يضم مجموعة من المبدعين في مجال تصميم
                            وإنشاء
                            فيديو
                            موشن جرافيك نسعى جاهدين لتقديم أفضل خدمة بأحسن سعر وفي أقل مدة ممكنة في التنفيذ.
                        </h5>
                    </div>
                </div>
                <div class="card text-center textcardCSS">
                    <div class="card-body ">
                        <h2 class="card-title text-end fw-bold"> ما الذي يجعلنا أفضل خيار لك ؟</h2>
                        <strong>
                            <p class="card-end text-end lh-base fs-6">
                                نعمل على إنتاج فيديو موشن يشمل بشكل أساسي:
                                - محتوي جذّاب، فعال ومناسب لنشاطك وخدماتك
                                - تميز في الإلقاء، نعمل على اختيار أفضل الأصوات من أجل تعليق صوتى عالي الجودة
                                - تنقل وتحريك للمقاطع بشكل سلس بحيث يضيف لمقطع الفيديو خاصتك لمسة واقعية
                            </p>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                <div class="img">
                    <img src="{{ asset('main/img/about-us.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- video section -->
    <div class="container">
        <div class="row d-flex justify-content-center videosectioncontsinaer">
            <div class="col-lg-8 col-md-10 col-sm-12 videosection">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class=" rounded" src="{{ $setting->v_link }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--section image-->
    <!--service-->
    <h1 class="text-center pt-5 mb-5 fw-bold" id="services" style="color:#dca454;">اعمالنا</h1>
    <div class="container">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6">
                    <div class="  border rounded">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe class=" rounded" src="{{ $link->link }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class=" col-md-12 text-center mt-2">
            <a href="{{ route('videos') }}" class="btn btn-primary fw-bold" role="button">شاهد باقي الاعمال</a>
        </div>
    </div>

    <!--اهمية الموشن-->
    <div class="container-fluid justify-content-center" style="background-color:transparent;">
        <div class="view text-center">
            <img src="{{ asset('main/img/important24.png') }}" class="img-fluid" alt="sample image">
        </div>
    </div>
    <div class="container-fluid" id="motion">
        <div class="container">
            <div class="row row d-flex justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12 mt-lg-5">
                    <div class="card textcardCSS">
                        <div class="card-body ">
                            <!-- <h1 class="text-center text-dark mb-5 fs-1 fw-bold" id="about_us"><span style="color: #dca454;">أهمية</span> <span style="color:#5858a4;">الموشن جرافيك</span></h1> -->
                            <h5 class="card-end text-center fw-bold lh-lg fs-3" style="color: #7474cc;"> يمثل محتوى جذاب
                                ويعتبر حاليًا أفضل
                                طريقة للعرض؛ حيث يمكنك
                                وبكل سهولة مشاركة فيديوهات الموشن جرافيك في كافة منصات التواصل الاجتماعي
                                إلى جانب كونه أفضل وسيلة لجذب المزيد من العملاء وتعريفهم بخدماتك ومنتجاتك عبر فيديو قد
                                لا
                                تتجاوز مدته بضع دقائق.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view text-center">
        <img src="{{ asset($setting->image) }}" class="img-fluid" alt="sample image">
    </div>

    <h1 class="text-center pt-5 mb-5 fw-bold" id="partners" style="color:#dca454;">شركاء النجاح</h1>
    <div class="container direction">
        <section class="customer-logos slider">
            @foreach ($partners as $partner)
                <div class="slide"><img src="{{ asset($partner->image) }}" alt="logo"></div>
            @endforeach
        </section>
    </div>
@endsection

@section('footer_item')
    <div class="footer-cta pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-4 mb-30 text-center">
                <div class="single-cta">
                    <div class="cta-text">
                        <h1 class="fw-bold text-center text-light">
                            <strong class=" text-light fw-bolder"> قم بإتمام طلبك الان </strong>
                        </h1>

                        <div class=" col-md-12 text-center mt-3">
                            <a href="{{ route('prices') }}" class="btn btn-success  btn-lg fw-bold" role="button">
                                <h2 class="fw-bold">اطلب الان</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
