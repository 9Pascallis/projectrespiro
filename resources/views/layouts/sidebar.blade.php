<!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Logo -->
            <div style="justify-content: left; display: flex; ">
                <a class="brand-link" href="/"><div style="margin-left: 20px"><img src="{{asset('AdminLTE')}}/dist/img/logoorange.png" width="150px" height="25px"></div></a>
            </div>
        <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Dashboard -->
                            <li class="nav-header">DASBOARD</li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Dashboard</p>
                                    </a>
                                </li>
                        <!-- Dashboard Umum -->
                            <li class="nav-header">DASBOARD UMUM</li>
                                <li class="nav-item">
                                    <a href="/dashboardpermintaan" class="nav-link">
                                        <i class="nav-icon fas fa-th-large"></i>
                                        <p>Dashboard Permintaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboardworksheet" class="nav-link">
                                        <i class="nav-icon fas fa-th-large"></i>
                                        <p>Dashboard Worksheet</p>
                                    </a>
                                </li>
                        <!-- Sidebar -->
                            <li class="nav-header">SALES</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>Permintaan Produksi<i class="fas fa-angle-left right"></i></p>
                                </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/permintaanacc" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Permintaan ACC</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/permintaanblmacc" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Permintaan Belum ACC</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/inputpermintaan" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Input Permintaan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/detailpermintaan" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Detail Permintaan</p>
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                        <!-- Supply Chain -->
                            <li class="nav-header">SUPPLY CHAIN</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>Approval Permintaan<i class="fas fa-angle-left right"></i></p>
                                </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/dashboardapprovalpermintaan" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard Approval</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/approvalpermintaan" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Approval Permintaan</p>
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                        {{-- Produksi --}}
                        <li class="nav-header">TIM PRODUKSI</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>Worksheet<i class="fas fa-angle-left right"></i></p>
                            </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboardworksheetproduksi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard Worksheet</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/inputworksheet" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Input Worksheet</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/detailworksheet" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Detail Worksheet</p>
                                        </a>
                                    </li>
                                </ul>
                        </li>
                        {{-- Lainnya --}}
                        <li class="nav-header">DATA MASTER</li>
                            <li class="nav-item">
                                <a href="/dashboardpermintaan" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Profile
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/login" class="nav-link">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Login
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>Worksheet<i class="fas fa-angle-left right"></i></p>
                                </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/dashboardworksheetproduksi" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Dashboard Worksheet</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/inputworksheet" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Input Worksheet</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/detailworksheet" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Detail Worksheet</p>
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                    </ul>
                </nav>
            </div>
    </aside>