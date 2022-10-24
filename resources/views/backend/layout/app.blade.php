<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="" height="60"
                width="60">
        </div> -->

        <!-- Navbar -->
        @include('backend.includes.navBar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.includes.sideBarNav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('backend.includes.breadcrumb')
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
        @include('backend.includes.footer')
        <!-- ./Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- All Script -->
    @include('backend.includes.scripts')
</body>

</html>