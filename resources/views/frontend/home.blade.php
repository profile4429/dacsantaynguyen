@extends('frontend/layout/master')
@section('title')
    Trang Chủ
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

    <!--silder-->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://dacsantaynguyen.org//public/uploads/92db838426ed488554097aa619a346f9/images/banner-macca.png"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://dacsantaynguyen.com/Upload/Images/banners/amakong.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://dacsantaynguyen.org//public/uploads/92db838426ed488554097aa619a346f9/images/banner-cacao.jpg"
                        class="d-block w-100" alt="...">
                </div>
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
    <!--silder-->

    <!--intro-->

    <section class="mt-3">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-4 col-sm-6 ">
                    <div class="card intro">
                        <div class="row g-0">
                            <div class="col-xl-6 col-lg-12">
                                <img src="http://dacsantaynguyen.com/Upload/Images/banners/dulich.jpg?w=185px&h=185px&mode=crop"
                                    class="img-fluid rounded-start h-100" alt="...">
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card-body" style="background: #84a933;">
                                    <h5 class="text-white text-center">Khuyến mãi</h5>
                                    <p class="text-white text-center">
                                        Đặc sản Tây nguyên luôn có các chương trình giảm giá, khuyến mãi để mọi người có
                                        cơ hội
                                        sở
                                        hữu và thưởng thức Hương vị từ Tây nguyên.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="card intro">
                        <div class="row g-0">
                            <div class="col-xl-6 col-lg-12">
                                <img src="http://dacsantaynguyen.com/Upload/Images/banners/dulich.jpg?w=185px&h=185px&mode=crop"
                                    class="img-fluid rounded-start h-100" alt="...">
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card-body" style="background: #84a933;">
                                    <h5 class="text-white text-center">Khuyến mãi</h5>
                                    <p class="text-white text-center">
                                        Đặc sản Tây nguyên luôn có các chương trình giảm giá, khuyến mãi để mọi người có
                                        cơ hội
                                        sở
                                        hữu và thưởng thức Hương vị từ Tây nguyên.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="card intro">
                        <div class="row g-0">
                            <div class="col-xl-6 col-lg-12">
                                <img src="http://dacsantaynguyen.com/Upload/Images/banners/dulich.jpg?w=185px&h=185px&mode=crop"
                                    class="img-fluid rounded-start h-100" alt="...">
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card-body" style="background: #84a933;">
                                    <h5 class="text-white text-center">Khuyến mãi</h5>
                                    <p class="text-white text-center">
                                        Đặc sản Tây nguyên luôn có các chương trình giảm giá, khuyến mãi để mọi người có
                                        cơ hội
                                        sở
                                        hữu và thưởng thức Hương vị từ Tây nguyên.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--end intro-->



    <!--trending-->
    <div class="container-fluid mt-5">
        <h4 class="text-center m-2" style="color: #000000"><strong style="color: #ce1f25">Sản Phẩm</strong> Nổi Bật</h4>
        <div class="row row-cols-1 row-cols-md-5 mb">

            <div class="col mb-2">
                <div class="card shadow-sm" style="height: 100%;">
                    <a href="">
                        <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                            src="http://dacsantaynguyen.com/Upload/Images/sanpham/Dacsantheomua/bo_booth.jpg?w=400&h=267&mode=crop"
                            width="100%"></a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <strong>
                            <h6 class="card-title">Bơ Booth</h6>
                        </strong>
                        <h5 style="color: red" class="text-center"><strong>Giá: 150.000 vnđ</strong></h5>
                        <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card shadow-sm" style="height: 100%;">
                    <a href="">
                        <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                            src="http://dacsantaynguyen.com/Upload/Images/sanpham/Dacsantheomua/bo_booth.jpg?w=400&h=267&mode=crop"
                            width="100%"></a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <strong>
                            <h6 class="card-title">Bơ Booth</h6>
                        </strong>
                        <h5 style="color: red" class="text-center"><strong>Giá: 150.000 vnđ</strong></h5>
                        <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card shadow-sm" style="height: 100%;">
                    <a href="">
                        <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                            src="http://dacsantaynguyen.com/Upload/Images/sanpham/Dacsantheomua/bo_booth.jpg?w=400&h=267&mode=crop"
                            width="100%"></a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <strong>
                            <h6 class="card-title">Bơ Booth</h6>
                        </strong>
                        <h5 style="color: red" class="text-center"><strong>Giá: 150.000 vnđ</strong></h5>
                        <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card shadow-sm" style="height: 100%;">
                    <a href="">
                        <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                            src="http://dacsantaynguyen.com/Upload/Images/sanpham/Dacsantheomua/bo_booth.jpg?w=400&h=267&mode=crop"
                            width="100%"></a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <strong>
                            <h6 class="card-title">Bơ Booth</h6>
                        </strong>
                        <h5 style="color: red" class="text-center"><strong>Giá: 150.000 vnđ</strong></h5>
                        <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card shadow-sm" style="height: 100%;">
                    <a href="">
                        <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                            src="http://dacsantaynguyen.com/Upload/Images/sanpham/Dacsantheomua/bo_booth.jpg?w=400&h=267&mode=crop"
                            width="100%"></a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <strong>
                            <h6 class="card-title">Bơ Booth</h6>
                        </strong>
                        <h5 style="color: red" class="text-center"><strong>Giá: 150.000 vnđ</strong></h5>
                        <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!--end trending-->

    <!--banner-->
    <section>
        <div class="container mt-5">
            <img src="https://damaca.vn/public/images_upload/banner/TheBM-keDXSe_banner.jpg" alt=""
                class="img-fluid">
        </div>
    </section>

    <!--end banner-->

    <!--danhmuc-->
    <section>
        <div class="container-fluid mt-5">
            <h5 class="text-center m-2" style="color: #000000"><strong style="color: #ce1f25">Danh mục</strong> phổ biến
            </h5>
            <div class="category-slider">

                @foreach ($category as $item)
                    <div class="card shadow-sm mx-3" style="height: 100%;">
                        <div class="p-3 box-shadows rounded">
                            <a href="">
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

    <!--intro-->
    <section class="my-1">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-md-4 mb-2">
                    <div class="container mt-5 position-relative" style="height: 220px">
                        <img src="https://laraweb.top/frontend/assets/imgs/banner/banner-1.png" alt=""
                            class="img-fluid w-100 h-100">
                        <div class="banner-text position-absolute top-50 start-10 end-50 text-center translate-middle-y">
                            <span>Nguyên chất</span>
                            <p>100% nguyên chất từ thiên nhiên, không pha tạp hóa chất</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-2">
                    <div class="container mt-5 position-relative" style="height: 220px">
                        <img src="https://laraweb.top/frontend/assets/imgs/banner/banner-2.png" alt=""
                            class="img-fluid w-100 h-100">
                        <div class="banner-text position-absolute top-50 start-10 end-50 text-center translate-middle-y">
                            <span>An toàn</span>
                            <p>Đã được kiểm định chất lượng và vệ sinh an toàn thực phẩm</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-2">
                    <div class="container mt-5 position-relative" style="height: 220px">
                        <img src="https://laraweb.top/frontend/assets/imgs/banner/banner-3.png" alt=""
                            class="img-fluid w-100 h-100">
                        <div class="banner-text position-absolute top-50 start-10 end-50 text-center translate-middle-y">
                            <span>Giá tốt</span>
                            <p>Bán trực tiếp từ nông trại với giá tốt nhất thị trường, hỗ trợ 24/7</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--end intro-->


    <!--sanphammoinhat-->
    <section>
        <div class="container-fluid my-5">
            <h5 class="text-center m-2" style="color: #000000">Sản phẩm<strong style="color: #ce1f25"> mới nhất</strong>
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
                                <h6 class="card-title">{{ $item->title }}</h6>
                            </strong>
                            <?php
                            $itemPrice = $item->discount;
                            $formattedPrice = 'Giá: ' . number_format($itemPrice) . ' vnđ';
                            ?>
                            <h6 style="color: red" class="text-center"><strong>{{ $formattedPrice }}</strong></h6>
                            <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--end sanphammoinhat-->
    <script src="{{ asset('frontend/js/home.js') }}"></script>
@endsection
