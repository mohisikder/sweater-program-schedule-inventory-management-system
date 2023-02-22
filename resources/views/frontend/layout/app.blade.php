<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('frontend/dist/img/AdminLTELogo.png')}}" alt="" height="60"
                width="60">
        </div> -->

        <!-- Navbar -->
        @include('frontend.includes.navBar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('frontend.includes.sideBarNav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('frontend.includes.breadcrumb')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @yield('content')
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Footer -->
        @include('frontend.includes.footer')
        <!-- ./Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- All Script -->
    @include('frontend.includes.scripts')
</body>

</html>