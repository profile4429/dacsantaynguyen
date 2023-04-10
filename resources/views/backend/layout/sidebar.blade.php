<!-- Sidebar -->
<nav id="sidebar">
    <div class="sidebar-header">

        {{-- <a class="" href="#">
            <img src="https://laraweb.top/storage/uploads/setting/1679822950-uyGab.png" alt="">
        </a> --}}

    </div>
    <ul class="list-unstyled components">
        <li class="">
            <a href="{{ route('ViewHomeAdmin') }}" class="dashboard"><i class="fa-solid fa-bars fa-beat-fade fa-lg"
                    style="color: #ffffff;"></i><span>Home</span></a>
        </li>
        <li class="">
            <a href="{{ route('ViewUser') }}"><i class="fa-solid fa-user fa-beat-fade fa-lg"
                    style="color: #f5f5f5;"></i><span>Người dùng</span></a>
        </li>
        <li class="">
            <a href="{{ route('ViewCategory') }}"><i class="fa-solid fa-layer-group fa-lg"
                    style="color: #ffffff;"></i><span> Danh mục</span></a>
        </li>

        <li class="">
            <a href="{{ route('ViewProduct') }}"><i class="fa-solid fa-shop fa-lg" style="color: #ffffff;"></i><span>
                    Sản phẩm</span></a>
        </li>

        <li class="">
            <a href="{{ route('ViewOrder') }}"><i class="fa-solid fa-truck fa-lg" style="color: #ffffff;"></i><span>Đơn
                    hàng</span></a>
        </li>

        <li class="">
            <a href="#"><i class="fa-solid fa-image fa-lg" style="color: #ffffff;"></i><span> Hình ảnh</span></a>
        </li>
        <li class="">
            <a href="#"><i class="fa-solid fa-address-book fa-lg" style="color: #ffffff;"></i><span> Liên
                    hệ</span></a>
        </li>
        <li class="">
            <a href="#"><i class="fa-solid fa-gear fa-lg" style="color: #ffffff;"></i><span> Chính sách</span></a>
        </li>
        <li class="">
            <a href="#"><i class="fa-solid fa-newspaper fa-lg" style="color: #ffffff;"></i><span> Tin
                    tức</span></a>
        </li>
        <li class="">
            <a href="#"><i class="fa-solid fa-comments fa-lg" style="color: #ffffff;"></i><span> Phản
                    hồi</span></a>
        </li>
        <li class="">
            <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket fa-lg"
                    style="color: #ffffff;"></i><span>Đăng xuất</span></a>
        </li>

    </ul>
</nav>
