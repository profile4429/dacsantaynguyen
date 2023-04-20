<style>
    .nav-link {
        font-weight: bold;
        font-size: 15px;
        text-transform: uppercase;
        display: block;
        color: white;
    }

    .nav-link:hover {
        color: brown;
    }
</style>
<!-- Header 1 - Top Header -->
<header class="navbar navbar-expand-lg text-white" style="background-color: #a70505">
    <div class="container">
        <div class="wrap-logo">
            <a href="#" style="display: flex; align-items: center;">
                <img style="max-width: 150px; height: auto;"
                    src="https://traffic-edge21.cdn.vncdn.io/cdn-pos/04f7ff-92233/store/20201231_JviBeBH0zVx4qkdOrsVJymUT.png"
                    alt="Logo">
            </a>
        </div>
        <form class="" style="width: 50%;">
            <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..."
                aria-label="Search" style="width: 100%; border-radius: 35px;" />
        </form>
        <div class="d-flex">
            <a class="nav-link me-2" href="" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                            class="fas fa-search-location"></span></span><span class="nav-link-text ps-1">Tra cứu đơn
                        hàng</span>
                </div>
            </a>
            <a class="nav-link" href="" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                            class="fab fa-itch-io"></span></span><span class="nav-link-text ps-1">Giỏ hàng</span>
                </div>
            </a>
        </div>
    </div>
</header>

<!-- Header 2 - Mid Header -->
<header class="navbar navbar-expand-lg text-white sticky-top" style="background-color: #951E21">
    <div class="container">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="nav-link" href="{{route('ViewHome')}}" style="text-decoration: none;">Trang chủ</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                @foreach ($category as $item)
                    <li class="nav-item"><a href="{{route('ViewListProduct')}}?id={{$item->id}}" class="nav-link"
                            style="text-decoration: none;">{{ $item->name }}</a></li>
                @endforeach
                <li class="nav-item"><a href="#" class="nav-link" style="text-decoration: none;">Tin Tức</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="text-decoration: none;">Hỗ trợ - Chính
                        sách</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="text-decoration: none;">Liên Hệ</a></li>
            </ul>
        </div>

    </div>
</header>
