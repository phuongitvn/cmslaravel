<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-navbar-fixed layout-compact layout-menu-fixed">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/themes/admin/assets/vendor/fonts/boxicons.css" />
    <!-- <link rel="stylesheet" href="/themes/admin/assets/vendor/fonts/fontawesome/css/fontawesome.min.css" /> -->
    <!-- Core CSS -->
    <link rel="stylesheet" href="/themes/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/themes/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/themes/admin/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="/themes/admin/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/themes/admin/assets/vendor/libs/datatables/datatables.bootstrap5.css" />

    <link rel="stylesheet" href="/themes/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <!-- <link rel="stylesheet" href="/themes/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" /> -->
    <link rel="stylesheet" href="/themes/admin/assets/vendor/css/theme-bordered.css" class="template-customizer-theme-css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="/themes/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/themes/admin/assets/js/config.js"></script>

</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layouts.navigation')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.layouts.user_navigation')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @stack('after-scripts')
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="/themes/admin/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="/themes/admin/assets/vendor/libs/popper/popper.js"></script>
        <script src="/themes/admin/assets/vendor/js/bootstrap.js"></script>
        <script src="/themes/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="/themes/admin/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="/themes/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <script src="/themes/admin/assets/vendor/libs/select2/select2.js"></script>
        <!-- Main JS -->
        <script src="/themes/admin/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="/themes/admin/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>