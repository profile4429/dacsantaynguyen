<header class="navbar navbar-expand-lg navbar-dark bg-dark text-white">

    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-none d-none">
            <i class="fa-solid fa-bars fa-beat-fade fa-lg" style="color: #ffffff;"></i>
        </button>

        <h4>@yield('header_name')</h4>
        <h5 class="wel_come"><i>Xin chào : {{ session('ss_username') }}</i></h5>

        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fa-beat-fade fa-lg" style="color: #ffffff;"></i>
        </button>


    </div>
</header>
