@extends('frontend/layout/master')
@section('title')
    Chi tiết
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/product.css') }}">

    <div class="container-fluid mt-5">
        <h4 class="ms-3" style="color: #000000">Sản Phẩm >><strong style="color: #ce1f25">{{ $categorys }}</strong></h4>
        <div class="row row-cols-1 row-cols-md-5 mb">
            @foreach ($products as $product)
                <div class="col mb-2">
                    <div class="card shadow-sm" style="height: 100%;">
                        <a href="{{ route('ViewDetail') }}?id={{ $product->id }}">
                            <img class="bd-placeholder-img card-img-top" style="height: 250px; object-fit: cover;"
                                src="{{ asset('/images/' . $product->image) }}" width="100%"></a>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <strong>
                                <h6 class="card-title text-center">{{ $product->title }}</h6>
                            </strong>
                            <h5 style="color: red" class="text-center"><strong>Giá: {{ $product->discount }}</strong></h5>
                            <button class="btn btn-outline-danger me-1 mb-1 text-center" type="button">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('frontend/js/product.js') }}"></script>
@endsection
