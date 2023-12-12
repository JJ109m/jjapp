<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JotaStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('backend/images/logo.png') }}" />
</head>

<body>
    <main class="main-content">

        <div class="">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>{{ __('Reset Password') }}<span
                                                            class="color-primary">JotaStore</span></h6>
                                                </div>
                                            </div>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf

                                                <div class="card-body">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="username">{{ __('Email Address') }}</label>
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Send Password Reset Link') }}
                                                            </button>
                                                        </div>
                                                        <p
                                                            class="social-connector text-center mb-sm-25 mb-15  mt-sm-30 mt-20">
                                                            <span>Or</span>
                                                        </p>
                                                        <div
                                                            class="button-group d-flex align-items-center justify-content-md-start justify-content-center">

                                                            <div
                                                                class="signUp-topbar d-flex align-items-center justify-content-md-end
                                                                            justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                                                <p class="mb-0 text-center">
                                                                    <span>
                                                                        Don't have an account?
                                                                        <a href="{{ route('login') }}"
                                                                            class="color-primary">
                                                                            Sign up
                                                                        </a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <!-- End: .card-body -->
                                        </div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>

    <div id="overlayer" style="display: none;">
        <span class="loader-overlay" style="display: none;">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.min.js') }}"></script>

    <!-- endinject-->
</body>

</html>
