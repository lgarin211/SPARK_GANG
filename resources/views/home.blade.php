
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{!! setting('site.title') !!}</title>
    <meta name="description" content="{!! setting('site.description') !!}">
    {{-- <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" /> --}}
    <link rel="icon" type="image/png" href="{!! url('storage/'.setting('admin.icon_image')) !!}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{!! url('storage/'.setting('admin.icon_image')) !!}">
    <link rel="stylesheet" href="{{url('mk1')}}/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="pageTitle">
            {!! setting('site.title') !!}
        </div>
        {{-- <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div> --}}
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">{!! setting('site.title') !!}</h1>
            <h4 class="subtitle">{!! setting('site.description') !!}</h4>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">
                @foreach ($data1 as $key => $item )
                {{-- @dd($value) --}}
                    <div class="item">
                        <div class="card">
                            <img src="{{url("storage")}}\{{$item->poster}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">{{$item->jp}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Temanya</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                        <label class="custom-control-label" for="darkmodeswitch"></label>
                    </div>

                </div>
            </div>
        </div>
        @foreach ($data as $key => $item )
            <div class="section mt-3 mb-3">
                <div class="card">
                    <img src="{{url("storage")}}\{{$item->poster}}" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h6 class="card-subtitle">{{$item->tgl_relist}}</h6>
                        <h5 class="card-title">{{$item->judul_renungan}}</h5>
                        <p class="card-text">
                            {!! $item->ayat_alkitab !!}
                        </p>
                        <a href="{{url('/detail')}}" class="btn btn-primary">
                            <ion-icon name="cube-outline"></ion-icon>
                            Baca
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- app footer -->
        <div class="appFooter">
            <img src="{!! url('storage/'.setting('site.logo')) !!}" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Mobilekit {{date("Y")}}. {!! setting('site.title') !!}.
            </div>
            <div>
                {!! setting('site.description') !!}
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="https://spdemo.lagarin.my.id/storage/settings/September2022/9cEOj25jz5e1qp0BDpa4.jpg" alt="image" class="imaged w24">
                    <strong>{!! setting('site.title') !!}S</strong>
                    <span>God Bless</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Hallo Semua </h3>
                    <div class="text">
                        Hendaknya Semua Yang membaca mendapat hikmat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{url('mk1')}}/assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="{{url('mk1')}}/assets/js/lib/popper.min.js"></script>
    <script src="{{url('mk1')}}/assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{url('mk1')}}/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{url('mk1')}}/assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="{{url('mk1')}}/assets/js/base.js"></script>


    <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>
