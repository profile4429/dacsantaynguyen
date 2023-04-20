<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span>
            </div>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="dashboard">
                        <li class="nav-item"><a class="nav-link" href="index.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{ route('ViewHomeAdmin') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-home"></span></span><span
                                class="nav-link-text ps-1">Home</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('ViewUser') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user"></span></span><span class="nav-link-text ps-1">Người
                                dùng</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('ViewCategory') }}" role="button">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-folder"></span>
                            </span>
                            <span class="nav-link-text ps-1">
                                Danh mục
                            </span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('ViewProduct') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-itch-io"></span></span><span class="nav-link-text ps-1">Sản
                                phẩm</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('ViewOrder') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">Đơn
                                hàng</span>
                        </div>
                    </a>

                </li>

            </ul>
        </div>
    </div>
</nav>
