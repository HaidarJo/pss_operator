<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Penjual - Pesanan</title>
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
            <h1>Daftar Pesanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Pesanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Pesanan</h5>
                            <p>
                                Klik tombol ini <button class="btn btn-success"><i class="bi bi-check-circle"></i></button> jika barang sudah dikemas.
                            </p>
                            <!-- <p>
                                Klik tombol ini <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                jika ingin menghapus produk.
                            </p> -->
                            <br>
                            <br>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>ID</b> Transaksi
                                        </th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Produk</th>
                                        <th>Foto</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataPesanan as $key) : ?>
                                        <tr>
                                            <td class="text-center">#<?php echo $key['id_transaksi'] ?></td>
                                            <td class="text-center"><?php echo $key['name'] ?></td>
                                            <td class="text-center"><?php echo $key['nama_produk'] ?></td>
                                            <td class="text-center">
                                                <!-- <button type="submit" class="btn btn-secondary"><i class="bi bi-eye"> Lihat Foto -->
                                                <img width="80px" height="95px" src="<?= base_url() ?>/assets/produk/<?php echo $key['foto_produk'] ?>">
                                                <!-- <img width="100px" height="50px" src="<?php echo base_url() . 'asset/produk/' . $key->foto_produk ?>"> -->
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">
                                                <?php if (($key['status']) == 'sedang dikemas') { ?>
                                                    <span class="badge bg-primary text-capitalize"><i class="bi bi-clock me-1"></i> <?php echo $key['status'] ?></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-success text-capitalize"><i class="bi bi-check-circle me-1"></i> <?php echo $key['status'] ?></span>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <div style="display: flex; ">
                                                    <div style="margin-right: 10px;">
                                                        <form action="pesanan/selesaiKemas" method="post">
                                                            <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $key['id_transaksi'] ?>">
                                                            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"> </i></button>
                                                        </form>
                                                    </div>
                                                    <!-- <form action="konfirmasi_bayar/statusGagal" method="post">
                                                        <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $key['id_transaksi'] ?>">
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                                                    </form> -->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach  ?>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

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