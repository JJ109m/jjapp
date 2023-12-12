<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JotaStore - Register</title>
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

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="">
                    <div class="signUp-admin-right  p-md-40 p-10">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-10 col-md-12 ">
                                <div class="edit-profile mt-md-25 mt-0">
                                    <div class="card border-0">
                                        <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                            <div class="edit-profile__title">
                                                <h6>Register <span class="color-primary">JotaStore</span></h6>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="card-body">
                                                <div class="edit-profile__body">
                                                    <div class="form-group mb-20">
                                                        <label for="name">name</label>
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="email">Email Adress</label>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">password</label>
                                                        <div class="position-relative">
                                                            <input id="password" type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">Corfim Password</label>
                                                        <div class="position-relative">
                                                            <input id="password-confirm" type="password"
                                                                class="form-control" name="password_confirmation"
                                                                required autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                    <div class="signUp-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox" id="check-1">
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Creating an account
                                                                    means
                                                                    you’re okay
                                                                    with our <a href="#"
                                                                        class="color-secondary">Terms of
                                                                        Service</a> and <a href="#"
                                                                        class="color-secondary">Privacy
                                                                        Policy</a>
                                                                    my preference</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                    <p
                                                        class="social-connector text-center mb-md-25 mb-15  mt-md-30 mt-20 ">
                                                        <span>Or</span>
                                                    </p>
                                                    <div
                                                        class="button-group d-flex align-items-center justify-content-md-start justify-content-center">
                                                        <div
                                                            class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                                            <p class="mb-0">
                                                                Already have an account?
                                                                <a href="{{ route('login') }}" class="color-primary">
                                                                    Sign in
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
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
