
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{!!setting('site.title')!!}-{{$data->judul_renungan}}</title>
    <meta name="description" content="{!!setting('site.description')!!}">
    {{-- <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" /> --}}
    <link rel="icon" type="image/png" href="{{url("storage")}}\{{$data->poster}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url("storage")}}\{{$data->poster}}">
    <link rel="stylesheet" href="{{url('mk1')}}/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
        {{-- <div id="loader">
            <div class="spinner-border text-primary" role="status"></div>
        </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            {{-- <a href="{{back()}}" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a> --}}
        </div>
        <div class="pageTitle">{{$data->judul_renungan}}</div>
    </div>
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="blog-post">
            <div class="mb-2">
                <img src="{{url("storage")}}\{{$data->poster}}" alt="image" class="imaged square w-100">
            </div>
            <h1 class="title">{{$data->judul_renungan}}</h1>

            <div class="post-header">
                <div>
                    <a href="#">
                        <img src="https://spdemo.lagarin.my.id/LCSR.png" alt="avatar" class="imaged w24 rounded mr-05">
                        {{$data->autor}}
                    </a>
                </div>
                Jun 11, 2020
                <br>
                {{-- {!! $data->ayat_alkitab !!} --}}
            </div>
            <div class="post-body">
                {!! $data->isi_renungan !!}
            </div>
            <div class="post-header text-center">
                <div>
                    <a href="#">
                        {!! $data->ayat_alkitab !!}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/lib/popper.min.js"></script>
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="{{url('mk1')}}/{{url('mk1')}}/assets/js/base.js"></script>


</body>

</html>
