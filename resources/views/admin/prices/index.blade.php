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
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px; font-weight: 700;">جدول
                                الأسعار</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if ($price)
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}

                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            سعر 15</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            سعر 30</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            سعر 45</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            سعر 60</th>
                                        <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            تعديل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">
                                                {{ $price->price_15 }}
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">
                                                {{ $price->price_30 }}
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">
                                                {{ $price->price_45 }}
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">
                                                {{ $price->price_60 }}
                                            </p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <a href="{{ route('admin.price.edit', $price->id) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                <h2>لا يوجد أسعار</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
