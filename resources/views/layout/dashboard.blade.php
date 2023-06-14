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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

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
                @if (auth()->user()->id_role=='2')
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
                @endif


                <!-- supply chain -->
                @if (auth()->user()->id_role=='3')
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
                @endif


                <!-- tim produksi -->
                @if (auth()->user()->id_role=='4')
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
                        <li> <a href="/dashboard-schedule">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Schedule
                            </a>
                        </li>
                        <li> <a href="/dashboard-cutting-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Cutting Output
                            </a>
                        </li>

                        <!-- output -->
                        <li> <a href="/dashboard-sewing-output">
                                <ion-icon name="ellipse-outline"></ion-icon>Dashboard Sewing Output
                            </a>
                        </li>
                    </ul>
                </li>
                @endif


                <!-- evaluation -->
                @if (auth()->user()->id_role=='1')
                {{-- <li class="menu-label">EVALUATION</li>
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
                </li> --}}


                <!-- Data Master User -->
                <li class="menu-label">DATA MASTER</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                        <div class="menu-title">User</div>
                    </a>
                    <ul>
                        <li> <a href="/dashboard-user">
                                <ion-icon name="ellipse-outline"></ion-icon>User
                            </a>
                        </li>
                    </ul>
                </li>

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
                @endif

                <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                     


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
                                            <div class="">
                                                <small class="mb-0 dropdown-user-designation text-secondary">Login Sebagai: {{ auth()->user()->username }} </small>                                           
                                                 </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <div class="">
                                                <small class="mb-0 dropdown-user-designation text-secondary">Role: {{ auth()->user()->role->nama_role }} </small>                                           
                                                 </div>
                                        </div>
                                    </a>
                                </li>
                               
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <ion-icon name="log-out-outline"></ion-icon>
                                                </div>
                                                <div class="ms-3"><span>Logout</span></div>
                                            </div>
                                        </button>
                                    </form>
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
