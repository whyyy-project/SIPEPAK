<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Login | SIPEPAK
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_URL(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_URL(); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-unugiri-image {
            background: url('/images/unugiri.jpeg');
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-unugiri-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('login') ?>" class="user" method="post">
                                        <?= csrf_field() ?>
                                        <?php if ($config->validFields === ['email']) : ?>
                                            <div class="form-group">
                                                <label for="login"><?= lang('Auth.email') ?></label>
                                                <input type="email" class="form-control form-control-user text-center <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="form-group">
                                                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                                <input type="text" class="form-control form-control-user text-center <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" name="password" class="form-control form-control-user text-center <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <?php if ($config->allowRemembering) : ?>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <?= lang('Auth.rememberMe') ?>
                                                </label>
                                            </div>
                                        <?php endif; ?>

                                        <br>

                                        <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.loginAction') ?></button>
                                    </form>

                                    <hr>

                                    <?php if ($config->allowRegistration) : ?>
                                        <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                    <?php endif; ?>
                                    <?php if ($config->activeResetter) : ?>
                                        <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                    <?php endif; ?>
                                    <div class="text-center mt-3">
                                        <hr>
                                        <a class="small btn btn-link" href="<?= base_URL(); ?>">Back to Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_URL(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_URL(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_URL(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_URL(); ?>js/sb-admin-2.min.js"></script>

</body>

</html>