<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bde1ebf728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/signup.css'); ?>">
    <!--end of bootstrap 5-->
    <title>Register</title>
    <!--  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../asset/images/icons/icon_pasar.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/main.css">
    <!--===============================================================================================-->
    <!-- Font Icon -->
    <link rel="stylesheet" href="../asset/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../asset/form/css/style.css">
    <!--  -->
    <style>
        body {
            background-image: url("<?php echo base_url('asset/1.jpg'); ?>");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <!-- <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div> -->
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="<?= base_url('c_guest/') ?>" class="logo">
                        <img src="../asset/images/icons/pasar_transparent.png" alt="IMG-LOGO">
                    </a>

                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="../asset/images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">

            </ul>


        </div>

        <!-- Modal Search -->

    </header>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="login">
                    <br>
                    <h1 class="text-center">Register</h1>
                    <br>
                    <form action="<?php echo base_url('auth/signup') ?>" method="post">
                        <div class="form-group">
                            <input name="name" class="form-control" type="text" id="name" placeholder="Nama Anda">
                            <h6 class="text-danger"><?php echo form_error('name') ?></h6>
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control" type="email" id="email" placeholder="Email@gmail.com">
                        </div>
                        <div class="form-group">
                            <input name="no_hp" class="form-control" type="number" id="no_hp" placeholder="Nomor HP">
                            <h6 class="text-danger"><?php echo form_error('no_hp') ?></h6>
                        </div>
                        <div class="form-group">
                            <input name="password" class="form-control" type="password" id="password" placeholder="Password">
                            <h6 class="text-danger"><?php echo form_error('password') ?></h6>
                        </div>
                        <div class="register">
                            <div class="text-center">
                                <p><a href="<?php echo base_url('auth/') ?>">Saya Sudah Punya Akun</a></p>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--===============================================================================================-->
    <script src="../asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../asset/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../asset/vendor/bootstrap/js/popper.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../asset/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="../asset/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="../asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="../asset/js/main.js"></script>
    <!--===============================================================================================-->
    <script src="../asset/form/vendor/jquery/jquery.min.js"></script>
    <script src="../asset/form/js/main.js"></script>
    <!--===============================================================================================-->
</body>

</html>