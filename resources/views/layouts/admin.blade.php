<!doctype html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JotaStore</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style_card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/line-awesome/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/line-awesome/css/line-awesome.min.css') }}">
    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/polaris@6.0.0-rc.1/dist/css/polaris.min.css">

    <link rel="stylesheet" href="{{ asset('backend/vendors/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/dropify/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/jquery-file-upload/uploadfile.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/themify/themify.woff') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icons-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />


    <link rel="stylesheet" href="{{ asset('backend/vendors/apex-charts/apex-charts.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/typeahead-js/typeahead.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/js/select.dataTables.min.css') }}">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend/images/logo.png') }}" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Bootstrap Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('backend/dist/tagify.css') }}" />

    <script src="{{ asset('backend/dist/jQuery.tagify.min.js') }}"></script>
    <script src="{{ asset('backend/dist/tagify.js') }}"></script>
    <script src="{{ asset('backend/dist/tagify.polyfills.min.js') }}"></script>
    <script src="{{ asset('backend/dist/tagify.vue') }}"></script>
    <script src="{{ asset('backend/dist/tagify.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Obtén el tema actual desde tu lógica (puedes adaptarlo según tu implementación)
            var currentTheme = "{{ session('theme', 'white') }}";

            // Agrega la clase al body según el tema actual
            $('body').addClass('theme-' + currentTheme);

            // Escucha el cambio de tema y actualiza la clase del body
            $('#theme-selector').change(function() {
                var selectedTheme = $(this).val();
                $('body').removeClass('theme-white theme-black theme-system').addClass('theme-' +
                    selectedTheme);

                // Aquí puedes enviar el cambio de tema al servidor si lo necesitas
            });
        });
    </script>

    <!-- CDN Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body class="layout-light side-menu overlayScroll">

    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    @yield('content')
                    @yield('modal')
                    @yield('js')
                    @yield('css')
                </div>
            </div>
        </div>
    </div>

    <div id="overlayer">
        <span class="loader-overlay">
            <span class="loader"></span>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>

    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <!-- endinject-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


    <script src="https://kit.fontawesome.com/af24d2de59.js" crossorigin="anonymous"></script>

    <!-- plugins:js -->
    <script src="{{ asset('backend/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/toastDemo.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('backend/vendors/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('backend/vendors/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/vendors/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/vendors/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/vendors/hammer/hammer.js') }}"></script>
    <script src="{{ asset('backend/vendors/i18n/i18n.js') }}"></script>
    <script src="{{ asset('backend/vendors/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/vendors/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.js') }}"></script>

    <!-- Incluye el archivo JavaScript de SweetAlert2 -->
    <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/misc.js') }}"></script>
    <script src="{{ asset('backend/js/chart.js') }}"></script>
    <script src="{{ asset('backend/js/documentation.js') }}"></script>
    <script src="{{ asset('backend/js/tabs.js') }}"></script>
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script>
    <script src="{{ asset('backend/js/alerts.js') }}"></script>

    <script src="{{ asset('backend/js/script.js') }}"></script>

    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- End custom js for this page-->
    <script src="{{ asset('backend/js/jquery.cookie.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('backend/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('backend/vendors/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>

    <!-- plugin js for this page -->
    <script src="{{ asset('backend/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-asColorPicker/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script>
    <!-- endinject -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
