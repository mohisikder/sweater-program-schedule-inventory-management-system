<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="header-top">
                    <i class="fas fa-clipboard-list"></i>                  
                    <div class="header-title">
                        <h2 class="m-0">@yield('title')</h2>
                        <small class="m-0">@yield('sub-title')</small>
                    </div>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('frontend.index')}}"><span class="breadcrumb-home-icon"><i class="fas fa-home"></i></span> Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>