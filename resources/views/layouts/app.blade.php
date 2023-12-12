<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>JJotaStore</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backendprin/assets/images/favicon.svg')}}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/LineIcons.3.0.css')}}" />
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/main.css')}}" />

</head>

<body>

    <div class="container-scroller">
        @include('layouts.job.admin.navbar')

            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper">
                        <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @yield('content')
                        @yield('modal')
                        @yield('js')
                    </div>
                </div>
                <footer class="main-footer">

                    @include('layouts.job.admin.footer')
                </footer>
            </div>
    </div>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('backendprin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backendprin/assets/js/tiny-slider.js')}}"></script>
    <script src="{{ asset('backendprin/assets/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('backendprin/assets/js/main.js')}}"></script>
    <script type="text/javascript">
        //========= Hero Slider
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
</body>

</html>
