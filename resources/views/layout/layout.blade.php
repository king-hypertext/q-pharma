<!DOCTYPE html>
<html lang="en" lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="favicon.png" />
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/boxicons.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('assets/vendor/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/select2/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/select2/select2-bootstrap-5-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/datatables-jquery/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/css/core.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('assets/css/demo.css') }}" />
    <script src="{{ url('assets/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('/assets/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('assets/vendor/select2/select2.min.js') }}"></script>

    <title>Q-Pharma | {{ $title?? 'PHARMACY MANAGEMENT SYSTEM' }} </title>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">q pharma</span>
                    </a>
                    <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Invoices</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('invoice') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">New Invoice</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('manage.invoice') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Manage Invoices</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Medicines / Drugs</span>
                    </li>
                    <li class="menu-item">
                        <a href="#add-drugs" class="menu-link" data-bs-toggle="modal">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Without menu">Add Drugs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-without-navbar.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Without navbar">Manage Drugs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Container">Manage Stock</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Suppliers(3)</span>
                    </li>
                    <li class="menu-item">
                        <a href="#add-supplier" data-bs-toggle="modal" class="menu-link">
                            <div data-i18n="Account">Add Supplier</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-account-settings-notifications.html" class="menu-link">
                            <div data-i18n="Notifications">Manage Suppliers</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Sales</span>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <div data-i18n="Container">Manage Sales</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Bulk Purchases</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Purchases</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Without menu">Add Bulk Purchase</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">Manage Purchases</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-gears"></i>
                            <div>Settings</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme position-sticky top-0"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <form action="#" method="get">
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input autocomplete="off" type="text" name="q" id="search-drug"
                                        class="form-control border-0 shadow-none" placeholder="Search..."
                                        aria-label="Search..." />
                                    <button class="btn btn-outline-primary px-1 ms-1" title="Search drug"
                                        type="submit">
                                        <i class="bx bx-search fs-4 lh-0"></i>
                                    </button>
                                </div>
                            </div>
                            <style type="text/css">
                                .ui-autocomplete {
                                    overflow-y: auto;
                                    overflow-x: hidden;
                                }

                                * html .ui-autocomplete {
                                    height: 120px !important;
                                    min-height: 200px;
                                    min-width: 200px;
                                }

                                .form-control {
                                    padding-left: 3px !important;
                                }
                            </style>
                        </form>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
            </div>
            <div class="menu-inner-shadow"></div>
        </div>
        <div class="content-backdrop fade"></div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="{{ url('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('assets/js/config.js') }}"></script>
    <script src="{{ url('assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="{{ url('assets/vendor/js/git-buttons.js') }}"></script>
    <script src="{{ url('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-jquery/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-jquery/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/js/misc/invoice.js') }}"></script>
    @yield('js')
    <script>
        $(document).ready(function() {
            var drugs;
            $.ajax({
                method: "GET",
                url: "/drugs",
                success: function(res) {
                    drugs = res;
                }
            });
            $('#search-drug').autocomplete({
                data: drugs,
                minimumLength: 2,
                delay: 0
            })
        });
    </script>
</body>

</html>
