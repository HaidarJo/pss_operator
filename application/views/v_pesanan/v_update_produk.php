<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Penjual - Edit Produk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <?php $this->load->view('tab_icon'); ?>
    <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?= base_url(); ?>https://fonts.gstatic.com" rel="preconnect">
    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <style>
        .form-space {
            /* display: inline-block; */
            /* Menjadikan form berdampingan secara horizontal */
            margin-right: 10px;
            /* Memberikan jarak antara kedua form */
        }
    </style>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php $this->load->view('sidebar'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update Produk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>

                            <!-- General Form Elements -->

                            <form action="<?= base_url('Produk/updateAksi') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="id_produk" value="<?= $dataProduk['id_produk'] ?>">
                                <!-- <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Pilih Foto Produk</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto" class="form-control" id="foto_produk" accept="image/png, image/jpeg, image/jpg, image/gif">
                                    </div>
                                </div> -->
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Pilih Gambar <span style="font-size:small">(*Maksimal 2MB)</span> </label>
                                    <input type="file" name="foto_produk" class="form-control" id="foto_produk" accept="image/png, image/jpeg, image/jpg, image/gif" <?= $dataProduk['foto_produk'] ?>>
                                    <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>

                                </div>
                                <div class=" row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_produk" value="<?= $dataProduk['nama_produk'] ?>" required>
                                    </div>
                                </div>
                                <div class=" row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" style="height: 100px" class="form-control" name="deskripsi" value="<?= $dataProduk['deskripsi_produk'] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="harga" value="<?= $dataProduk['harga'] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="stok" value="<?= $dataProduk['stok'] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update Produk</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="<?= base_url(); ?>https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="<?= base_url(); ?>#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>