
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{url('mk1')}}/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('mk1')}}/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="{{url('mk1')}}/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent">
        <div class="left">
        </div>
        <div class="pageTitle">
            {{-- <img src="{{url('mk1')}}/assets/img/logo.png" alt="logo" class="logo"> --}}
            <img src="{{url('/LCSR.png')}}" alt="logo" class="logo" style="max-height: 150px;">
        </div>
        <div class="right">
            <a href="{{url("/home")}}" class="headerButton text-secondary">
                Tutup
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="carousel-slider owl-carousel owl-theme">
            {{-- @dd($data) --}}
            @foreach ( $data as $key=>$item )
                <div class="item p-2">
                    <img src="{{url("storage")}}\{{$item->poster}}" alt="alt" class="imaged w-100 square mb-4">
                    <h2>{{$item->jp}}</h2>
                    <p>{!! $item->smallword !!}</p>
                </div>
            @endforeach

            {{-- <div class="item p-2">
                <img src="{{url('mk1')}}/assets/img/sample/photo/vector2.png" alt="alt" class="imaged w-100 square mb-4">
                <h2>PWA Ready</h2>
                <p>It is a progressive web app. Add to home screen and use it like an app.</p>
            </div>
            <div class="item p-2">
                <img src="{{url('mk1')}}/assets/img/sample/photo/vector3.png" alt="alt" class="imaged w-100 square mb-4">
                <h2>Great for phones & tablets</h2>
                <p>Compatible with all mobile phones and tablet resolutions.</p>
            </div> --}}
        </div>

        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-6">
                    {{-- <a href="javascript:;" class="btn btn-secondary btn-lg btn-block goBack">Go Back</a> --}}
                </div>
                <div class="col-6">
                    {{-- <a href="app-components.html" class="btn btn-primary btn-lg btn-block">Get Started</a> --}}
                </div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->


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


</body>

</html>
