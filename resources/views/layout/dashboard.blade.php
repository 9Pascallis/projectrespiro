<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    @yield('assets')
    <title>@yield('title')</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets/images/logo.jpeg') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <img src="{{ asset('assets/images/respiro.jpeg') }}" class="logo-text" width="150px" height="25px">
                </div>
                <div class="toggle-icon ms-auto">
                    <ion-icon name="menu-sharp" role="img" class="md hydrated" aria-label="menu sharp"></ion-icon>
                </div>
            </div>
            <!--navigation-->

            <ul class="metismenu" id="menu">
                <!-- sales -->
                <li class="menu-label">SALES</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Request Production</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-permintaan">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Request
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- supply chain -->
                <li class="menu-label">SUPPLY CHAIN</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Confirm Request</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-konfirmasi">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Confirm
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- production plan -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Production Plan</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-production-plan">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Production Plan
                            </a>
                        </li>
                        <li> <a href="/budgeting">
                                <ion-icon name="ellipse-outline"></ion-icon>Budgeting
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- tim produksi -->
                <li class="menu-label">TIM PRODUKSI</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Worksheet</div>
                    </a>
                    <ul>
                        <li> <a href="/worksheet">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Worksheet
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- production status -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Production Status</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-production-status">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Production Status
                            </a>
                        </li>
                        <!--schedule-->
                        <li> <a href="/dashboard-cutting-process">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Process
                            </a>
                        </li>
                        <li> <a href="/dashboard-cutting-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Cutting Output
                            </a>
                        </li>
                        <li> <a href="/detail-cutting-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Detail Cutting Output
                            </a>
                        </li>
                        <li> <a href="/input-cutting-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Input Cutting Output
                            </a>
                        </li>
                        <!-- output -->
                        <li> <a href="/dashboard-sewing-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Sewing Output
                            </a>
                        </li>
                        <li> <a href="/detail-sewing-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Detail Sewing Output
                            </a>
                        </li>
                        <li> <a href="/input-sewing-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Input Sewing Output
                            </a>
                        </li>
                        <li> <a href="/input-schedule">
                                <ion-icon name="ellipse-outline"></ion-icon>Input Schedule
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- evaluation -->
                <li class="menu-label">EVALUATION</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Evaluation</div>
                    </a>
                    <ul>
                        <li> <a href="/evaluate">
                                <ion-icon name="ellipse-outline"></ion-icon>Evaluation
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- History -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">History</div>
                    </a>
                    <ul>
                        <li> <a href="/history">
                                <ion-icon name="ellipse-outline"></ion-icon>History
                            </a>
                        </li>
                        <li> <a href="/detail-history">
                                <ion-icon name="ellipse-outline"></ion-icon>Detail History
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Data Master User -->
                <li class="menu-label">DATA MASTER</li>
                {{-- <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">User</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-sales">
                                <ion-icon name="ellipse-outline"></ion-icon>Sales
                            </a>
                        </li>
                        <li> <a href="/dashboard-supply-chain">
                                <ion-icon name="ellipse-outline"></ion-icon>Supply Chain
                            </a>
                        </li>
                        <li> <a href="/dashboard-tim-produksi">
                                <ion-icon name="ellipse-outline"></ion-icon>Tim Produksi
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <!-- Data Master -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">Data</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-Jenis-Produk">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Jenis Produk
                            </a>
                        </li>
                        <li> <a href="/kategori">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Kategori
                            </a>
                        </li>
                        <li> <a href="/Sub-Kategori">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Sub Kategori
                            </a>
                        </li>
                        <li> <a href="/Allocation">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Allocation
                            </a>
                        </li>
                        <li> <a href="/Warna">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Warna
                            </a>
                        </li>
                        <li> <a href="/Ukuran">
                                <ion-icon name="ellipse-outline"></ion-icon>Add Ukuran
                            </a>
                        </li>
                    </ul>
                </li>

                <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                        <ion-icon name="search-sharp"></ion-icon>
                    </div>
                    <input class="form-control" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon">
                        <ion-icon name="close-sharp"></ion-icon>
                    </div>
                </form>
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-button">
                            <a class="nav-link" href="javascript:;">
                                <div class="">
                                    <ion-icon name="search-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dark-mode-icon" href="javascript:;">
                                <div class="mode-icon">
                                    <ion-icon name="moon-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>


                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="assets/images/avatars/06.png" class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="assets/images/avatars/06.png" alt="" class="rounded-circle"
                                                width="54" height="54">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name">Siapa </h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">Supply
                                                    Chain</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="log-out-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
        <!--end top header-->

        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->




    <!-- JS Files-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('js')
    <!-- Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
