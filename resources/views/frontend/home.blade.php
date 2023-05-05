@extends('frontend/layout/master')
@section('title')
    Trang Chủ
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">


    <!--silder-->
    <div class="container">
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($picture_top as $index => $item)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <a href="{{ $item->url }}">
                                <img src="{{ asset('/images/' . $item->image) }}" class="d-block w-100" alt="slide">
                            </a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <!--end silder-->

    <!--intro-->

    <section class="mt-3">
        <div class="container">
            <div class="row">
                @php
                    $backgroundColors = ['#004b23', '#410062', '#ce1f25'];
                @endphp
                @foreach ($intro_top as $index => $item)
                    <div class="col-md-4 col-sm-6 ">
                        <div class="card intro"
                            style="background: {{ $backgroundColors[$index % count($backgroundColors)] }}">
                            <div class="row g-0">
                                <div class="col-xl-6 col-lg-12">
                                    <img src="{{ asset('/images/' . $item->image) }}" class="img-fluid rounded-start h-100"
                                        alt="...">
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <div class="card-body" >
                                        <h5 class="text-white text-center" style="font-size: 22px">{{ $item->title }}</h5>
                                        <p class="text-white text-center" style="font-size: 15px">
                                            {{ $item->desc }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--end intro-->



    <!--trending-->
    <div class="container mt-3">
        <h5 class="text-center m-2" style="color: #4f5d77"><strong style="color: #ce1f25">Sản Phẩm</strong> Nổi Bật</h5>
        <div class="row row-cols-1 row-cols-md-5 mb">
            @foreach ($top_product as $item)
                <div class="col mb-2">
                    <div class="card shadow-sm" style="height: 100%;">
                        <a href="{{ route('ViewDetail') }}?id={{ $item->id }}">
                            <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                                src="{{ asset('/images/' . $item->image) }}" width="100%"></a>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <strong>
                                <h6 class="card-title" style="color: #4f5d77">{{ $item->title }}</h6>
                            </strong>
                            @php
                                $formatPrice = number_format($item->price);
                                
                            @endphp
                            <h5 style="color: red" class="text-center"><strong>{{ $formatPrice }}</strong></h5>
                            <div class="text-center">
                                <a href="{{ route('AddToCart', ['id' => $item->id]) }}">
                                    <button class="btn btn-danger me-1 mb-1 text-center" type="button">Thêm vào
                                        giỏ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--end trending-->

    <!--banner-->
    <section>
        <div class="container my-3">
            @foreach ($picture_mid as $item)
                <img src="{{ asset('/images/' . $item->image) }}" alt="" class="img-fluid">
            @endforeach
        </div>
    </section>
    <!--end banner-->

    <!--danhmuc-->
    <section>
        <div class="container">
            <h5 class="text-center m-2" style="color: #4f5d77"><strong style="color: #ce1f25">Danh mục</strong> phổ biến
            </h5>
            <div class="category-slider">

                @foreach ($category as $item)
                    <div class="card shadow-sm mx-3" style="height: 100%;">
                        <div class="p-3 box-shadows rounded">
                            <a href="{{ route('ViewListProduct') }}?id={{ $item->id }}">
                                <img class="bd-placeholder-img card-img-top" style="height: 200px; object-fit: cover;"
                                    src="{{ asset('/images/' . $item->image) }}" width="100%"></a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <h6 class="card-title">{{ $item->name }}</h6>
                            </strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--danhmuc-->

    <!--mid intro-->
    <section class="my-1">
        <div class="container">
            <div class="row">
                @foreach ($intro_mid as $item)
                    <div class="col-12 col-md-4 mb-2">
                        <div class=" mt-5 position-relative" style="height: 220px">
                            <img src="{{ asset('/images/' . $item->image) }}" alt="" class="img-fluid w-100 h-100">
                            <div
                                class="banner-text position-absolute top-50 start-10 end-50 text-center translate-middle-y">
                                <h5 style="color: #F15412">{{ $item->title }}</h5>
                                <p style="color: #4f5d77"><i><strong>{{ $item->desc }}</strong></i></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--end mid intro-->






    <!--sanphammoinhat-->
    <section>
        <div class="container mt-3">
            <h5 class="text-center m-2" style="color: #4f5d77">Sản phẩm<strong style="color: #F15412"> mới nhất</strong>
            </h5>
            <div class="category-slider">
                @foreach ($product_desc as $item)
                    <div class="card shadow-sm mx-3 border-0" style="height: 100%;">
                        <div class="p-2 box-shadows rounded">
                            <a href="{{ route('ViewDetail', ['id' => $item->id]) }}">
                                <img class="bd-placeholder-img card-img-top rounded"
                                    style="height: 220px; object-fit: cover;"
                                    src="{{ asset('/images/' . $item->image) }}" width="100%"
                                    alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <strong>
                                <h6 class="card-title">{{ $item->title }}</h6>
                            </strong>
                            @php
                                $itemPrice = $item->price;
                                $formattedPrice = 'Giá: ' . number_format($itemPrice);
                            @endphp
                            <h6 style="color: red" class="text-center"><strong>{{ $formattedPrice }}</strong></h6>
                            <div class="text-center">
                                <a href="{{ route('AddToCart', ['id' => $item->id]) }}">
                                    <button class="btn btn-danger text-center" type="button">Thêm vào
                                        giỏ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--end sanphammoinhat-->

    <script src="{{ asset('frontend/js/home.js') }}"></script>
@endsection
