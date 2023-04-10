<!-- Header 1 - Top Header -->
<header class="navbar top_header">
    <div class="container">
        <a class="navbar-brand mb-logo" href="#">
            <img style="width:100px;height:50px" src="https://laraweb.top/storage/uploads/setting/1679822950-uyGab.png"
                alt="">
        </a>
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart3"></i>
                    </a>
                </li>
            </ul>
        </form>
    </div>
</header>

<!-- Header 2 - Mid Header -->
<header class="navbar navbar-expand-lg text-white sticky-top" style="background-color: #951E21">
    <div class="container">

        <a class="nav-link" href="#" style="text-decoration: none;">Trang chủ</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                @foreach ($category as $item)
                    <li class="nav-item"><a href="#" class="nav-link"
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
