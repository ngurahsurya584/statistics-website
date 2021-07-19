<!DOCTYPE html>
<!-- saved from url=(0041)https://adminlte.io/themes/v3/index3.html -->
<html lang="en" style="height: auto;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('/admin/css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/admin/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('/admin/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/adminlte.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }

    </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-warning navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Dashboard</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-blue elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin/dp.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/" class="d-block">Ngurah Surya</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview mt-2">
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white bg-success mt-3">
                                        <p> Data Skor </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/frekuensi" class="nav-link text-white bg-success mt-3">
                                        <p> Tabel Frekuensi </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statistik" class="nav-link text-white bg-success mt-3">
                                        <p> Tabel Statistik </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/databergolong" class="nav-link text-white bg-success mt-3">
                                        <p> Data Bergolong </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/chikuadrat" class="nav-link text-white bg-success mt-3">
                                        <p> Chi-Kuadrat </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/lillifors" class="nav-link text-white bg-success mt-3">
                                        <p> Liliefors </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/korelasiMoment" class="nav-link text-white bg-success mt-3">
                                        <p> Koefisien Korelasi Product Moment </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ujiTBerkolerasi" class="nav-link text-white bg-success mt-3">
                                        <p>Uji-t</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ujiAnava" class="nav-link text-white bg-success mt-3">
                                        <p>Uji Anava</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1299.69px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('alamat-aktif')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">@yield('alamat')</a></li>
                                <li class="breadcrumb-item active">@yield('alamat-aktif')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <hr>

            <!-- Main content -->
            @yield('content')

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="row">
                <div class="col-lg-8 text-center ml-auto mr-auto ">
                    <p>1915101040</p>
                </div>
            </div>
    </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admin/') }}/jquery.min.js.download"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/') }}/bootstrap.bundle.min.js.download"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('admin/') }}/adminlte.js.download')"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('admin/') }}/Chart.min.js.download')"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/') }}/demo.js.download')"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/') }}/dashboard3.js.download')"></script>

</body>
