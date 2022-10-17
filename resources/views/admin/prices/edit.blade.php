@extends('admin.layouts.main')
@section('dash')
    الأسعار
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px">تعديل الأسعار</h5>
                        </div>
                        <div class="col-6" style="position: relative;"><a href="{{ route('admin.prices') }}"
                                style="position: absolute; left: 2%" class="btn btn-primary">عرض الأسعار</a></div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class=" container-fluid">
                            <!--form section-->
                            <section class="vh-100 gradient-custom sectionFormDIR">
                                <div class="container py-5 h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-12 col-lg-9 col-xl-7">
                                            <div class="card shadow-2-strong card-registration"
                                                style="border-radius: 15px;">
                                                <div class="card-body p-4 p-md-5">
                                                    <form action="{{ route('admin.price.update', $price->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="price_15"
                                                                        style="font-size: 18px">سعر 15</label>
                                                                    <input type="text" name="price_15" id="price_15"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $price->price_15 }}" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="price_30"
                                                                        style="font-size: 18px">سعر 30</label>
                                                                    <input type="text" name="price_30" id="price_30"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $price->price_30 }}" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="price_45"
                                                                        style="font-size: 18px">سعر 45</label>
                                                                    <input type="text" name="price_45" id="price_45"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $price->price_45 }}" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="price_60"
                                                                        style="font-size: 18px">سعر 60</label>
                                                                    <input type="text" name="price_60" id="price_60"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $price->price_60 }}" required />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="mt-4 pt-2 text-center">
                                                            <input class="btn btn-primary btn-lg" type="submit"
                                                                value="تعديل" />
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--endform section-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
