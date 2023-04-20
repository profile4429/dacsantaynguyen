@extends('frontend/layout/master')
@section('title')
    Chi tiết
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/detail.css') }}">


    <div class="container my-3">
        <div class="ms-4">
            Trang chủ > Chi tiết
        </div>
        <div class="card-body my-2">
            <div class="row mx-3">
                <div class="col-lg-4">
                    @foreach ($products as $product)
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('/images/' . $product->image) }}"
                            alt="" />
                    @endforeach

                </div>
                <div class="col-lg-4">
                    @foreach ($products as $product)
                        <h4><strong>{{ $product->title }}</strong></h4>
                    @endforeach
                    <h4 class="d-flex align-items-center">
                        @foreach ($products as $product)
                            <span class="text-danger"><i>Đơn giá: {{ $product->discount }} /kg</i></span>
                        @endforeach
                    </h4>
                    <p class="fs--1 mb-1"> <span>Chi phí vận chuyển: </span><strong>$1</strong></p>
                    <p class="fs--1">Trạng thái: <strong class="text-success">Còn hàng</strong></p>

                    <p class="fs--1 mb-3">Tags: <a class="ms-2" href="#!">Trầm hương,</a><a class="ms-1"
                            href="#!">Vòng trầm,</a><a class="ms-1" href="#!">macca</a><a class="ms-1"
                            href="#!">dieu </a></p>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="input-group input-group-sm" data-quantity="data-quantity">
                                <button class="btn btn-sm btn-outline-secondary border border-300"
                                    data-field="input-quantity" data-type="minus">-</button>
                                <input class="form-control text-center input-quantity input-spin-none" type="number"
                                    min="0" value="0" aria-label="Amount (to the nearest dollar)"
                                    style="max-width: 50px" />
                                <button class="btn btn-sm btn-outline-secondary border border-300"
                                    data-field="input-quantity" data-type="plus">+</button>
                            </div>
                        </div>
                        <div class="col-auto px-2 px-md-3"><a class="btn btn-sm btn-primary" href="#!"><span
                                    class="fas fa-cart-plus me-sm-2"></span><span class="d-none d-sm-inline-block">Thêm vào
                                    giỏ hàng</span></a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overflow-hidden">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link-tab active ps-0" id="description-tab"
                                    data-bs-toggle="tab" href="#tab-description" role="tab"
                                    aria-controls="tab-description" aria-selected="true">Mô tả</a></li>
                            <li class="nav-item"><a class="nav-link-tab px-2 px-md-3" id="specifications-tab"
                                    data-bs-toggle="tab" href="#tab-specifications" role="tab"
                                    aria-controls="tab-specifications" aria-selected="false">Hướng dẫn đặt hàng</a></li>
                            <li class="nav-item"><a class="nav-link-tab px-2 px-md-3" id="reviews-tab" data-bs-toggle="tab"
                                    href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                                    aria-selected="false">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="mt-3">
                                    <p>Over the years, Apple has built a reputation for releasing its products with a lot of
                                        fanfare – but that didn’t exactly happen for the MacBook Pro 2018. Rather, Apple’s
                                        latest pro laptop experienced a subdued launch, in spite of it offering a notable
                                        spec upgrade over the 2017 model – along with an improved keyboard. And, as with
                                        previous generations the 15-inch MacBook Pro arrives alongside a 13-inch model.</p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-specifications" role="tabpanel"
                                aria-labelledby="specifications-tab">
                                <table class="table fs--1 mt-3">
                                    <tbody>
                                        <tr>
                                            <td class="bg-100" style="width: 30%;">Processor</td>
                                            <td>2.3GHz quad-core Intel Core i5,</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-100" style="width: 30%;">Memory</td>
                                            <td>8GB of 2133MHz LPDDR3 onboard memory</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-100" style="width: 30%;">Brand Name</td>
                                            <td>Apple</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-100" style="width: 30%;">Model</td>
                                            <td>Mac Book Pro</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-100" style="width: 30%;">Display</td>
                                            <td>13.3-inch (diagonal) LED-backlit display with IPS technology</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row mt-3">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="mb-1"><span class="fa fa-star text-warning fs--1"></span><span
                                                class="fa fa-star text-warning fs--1"></span><span
                                                class="fa fa-star text-warning fs--1"></span><span
                                                class="fa fa-star text-warning fs--1"></span><span
                                                class="fa fa-star text-warning fs--1"></span><span
                                                class="ms-3 text-dark fw-semi-bold">Awesome support, great code 😍</span>
                                        </div>
                                        <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section>
            <div class="container-fluid">
                <h5 class="ms-3" style="color: #000000">Sản phẩm<strong style="color: #ce1f25"> tương tự</strong>
                </h5>
                <div class="category-slider">

                    @foreach ($product_desc as $item)
                        <div class="card shadow-sm mx-3" style="height: 100%;">
                            <div class="p-3 box-shadows rounded">
                                <a href="{{ route('ViewDetail') }}?id={{ $item->id }}">
                                    <img class="bd-placeholder-img card-img-top" style="height: 200px; object-fit: cover;"
                                        src="{{ asset('/images/' . $item->image) }}" width="100%"></a>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center">
                                <strong>
                                    <h6 class="card-title text-center">{{ $item->title }}</h6>
                                </strong>
                                <?php
                                $itemPrice = $item->discount;
                                $formattedPrice = 'Giá: ' . number_format($itemPrice) . ' vnđ';
                                ?>
                                <h6 style="color: red" class="text-center"><strong>{{ $formattedPrice }}</strong></h6>
                                <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt
                                    hàng</button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    </div>
    <!--danhmuc-->
    <script src="{{ asset('frontend/js/detail.js') }}"></script>
@endsection
