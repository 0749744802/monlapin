<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Logiciel | Modification de mot de passe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("assets/css/app.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset("assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                @foreach ($site as $item)
                                <a href="dashboard" class="d-inline-block auth-logo">
                                    <img src="{{ asset('storage/' . $item->logo_site) }}" alt="" height="20">
                                </a>
                                 @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Creer un nouveau mot de passe</h5>
                                    <p class="text-muted">Merci de bien remplir tous les champs</p>
                                </div>

                                <div class="p-2">
                                    <form method="POST" action="{{ route('password.store') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Email</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="email" class="form-control pe-5 password-input"  placeholder="Enter password" id="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" >
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>

                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Mot de passe</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input"  placeholder="Enter password" id="password" name="password"   required autocomplete="new-password">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">Confirmer mot de passe</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Confirm password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Password must contain:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                        </div>



                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Modifier mot de passe</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">si vous, de votre mot de passe... <a href="login" class="fw-semibold text-primary text-decoration-underline"> Cliquer ici </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Ticafrique.<i class="mdi mdi-heart text-danger"></i> Par Ticafrique
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ asset("assets/libs/node-waves/waves.min.js") }}"></script>
    <script src="{{ asset("assets/libs/feather-icons/feather.min.js") }}"></script>
    <script src="{{ asset("assets/js/pages/plugins/lord-icon-2.1.0.js") }}"></script>
    <script src="{{ asset("assets/js/plugins.js") }}"></script>

    <!-- particles js -->
    <script src="{{ asset("assets/libs/particles.js/particles.js") }}"></script>

    <!-- particles app js -->
    <script src="{{ asset("assets/js/pages/particles.app.js") }}"></script>

    <!-- password-addon init -->
    <script src="{{ asset("assets/js/pages/passowrd-create.init.js") }}"></script>
</body>

</html>