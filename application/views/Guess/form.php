<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $tittle; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awsome/css/') ?>all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/guess') ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url('assets/guess') ?>/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/dropify/dist/css/dropify.min.css' ?>">
    <style>
        .md-outline.select-wrapper+label {
            top: .6em !important;
            z-index: 2 !important;
        }
    </style>
</head>

<body class="coworking-page">

    <!-- Main navigation -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg scrolling-navbar navbar-light z-depth-0 fixed-top white ml-md-4 mr-md-3">
            <a class="navbar-brand purple-pastel" href="#">
                <strong>
                    <span class="font-weight-bold">U</span>KS <br><span class="font-weight-bold">D</span>ispendik<br><span class="font-weight-bold">SBY</span><span class="font-weight-bold pink-pastel">.</span>
                </strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto text-uppercase smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link heather-color" href="#admin" data-offset="100">
                            <strong>Admin ?</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0-1" href="#contact" data-offset="100">
                            <button type="button" class="btn btn-outline-purple-pastel btn-rounded btn-md z-depth-0 m-0 pt-2">Daftar<i class="fas fa-angle-double-right"></i></button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Frame Modal Bottom -->
        <div class="modal fade top" id="frameModaltop" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Add class .modal-frame and then add class .modal-top (or other classes from list above) to set a position to the modal -->
            <div class="modal-dialog modal-frame modal-top" role="document">


                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">

                            <p class="pt-3 pr-2">Anda telah terdaftar sebagai peserta Event <strong><u><?= $event; ?></strong></u></p>
                            <button type="button" class="btn btn-outline-purple-pastel btn-rounded btn-md z-depth-0 m-0 pt-2 float-right" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Frame Modal top -->
        <!-- Intro -->
        <section class="view intro">

            <div class="container-fluid">

                <div class="row d-flex justify-content-center align-items-center h-100 mx-md-5">

                    <div class="col-lg-4 col-xl-5 col-flex mt-lg-0 pt-lg-4 mt-5 pt-5">

                        <h1 class="heading font-weight-bold display-3 mb-4">Hai :D<span>,</span><br> <br class="d-block d-md-none d-lg-block d-xl-none">Yuk jadi siswa <br>Berprestasi</span></h1>
                        <h5 class="subheading mb-xl-4 pb-xl-0 mb-md-3 pb-md-3 mb-4"><strong>Yuk gabung jadi peserta dalam event - event yang diselenggarakan oleh Dinas Pendidikan Kota Surabaya.
                                <br class="d-none d-xl-block">Kamu akan mendapatkan pengalaman berharga, mendapatkan teman baru, mengasah mental juara kamu.</strong></h5>
                        <div class="mr-auto">
                            <a href="#contact" data-offset="100" type="button" class="btn purple-gradient btn-rounded ml-0">Check this out</a>
                        </div>

                    </div>

                    <div class="col-lg-8 col-xl-7 pt-lg-4">

                        <div class="view">
                            <img src="https://mdbootstrap.com/img/illustrations/graphics(2).png" class="img-fluid" alt="smaple image">
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- Intro -->

    </header>
    <!-- Main navigation -->

    <!-- Main layout -->
    <main>
        <div class="container">
            <!-- Section: Offer -->
            <section id="offer" class="mb-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center">Apa yang akan kamu dapatkan ?</h2>
                <hr class="hr-pink my-3">
                <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit.</p>

                <!-- Grid row -->
                <div class="row mb-lg-0 mb-5">

                    <!-- Grid column -->
                    <div class="col-lg-6 mb-lg-0 mb-5" style="margin-top: -5.3rem;">
                        <div class="view">
                            <img src="https://mdbootstrap.com/img/illustrations/graphics(3).png" class="img-fluid" alt="smaple image">
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6">

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-md-1 col-2">
                                <i class="fas fa-book-open purple-pastel fa-2x"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold purple-pastel mb-2">Desks for any period</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                                    aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-md-1 col-2">
                                <i class="fas fa-wifi green-pastel fa-2x"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold green-pastel mb-2">Fast Internet</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                                    aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-md-1 col-2">
                                <i class="far fa-clock orange-pastel fa-2x"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold orange-pastel mb-2">Access 24/7</h5>
                                <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores
                                    nam, aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-6">

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-md-1 col-2">
                                <i class="fas fa-users fa-2x blue-pastel"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold blue-pastel mb-2">Meeting rooms</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                                    aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-md-1 col-2">
                                <i class="fas fa-gem fa-2x pink-pastel"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold pink-pastel mb-2">Flexible memberships</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                                    aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-lg-0 mb-5">
                            <div class="col-md-1 col-2">
                                <i class="fas fa-utensils fa-2x navy-blue-color"></i>
                            </div>
                            <div class="col-md-11 col-10">
                                <h5 class="font-weight-bold navy-blue-color mb-2">Kitchenettes</h5>
                                <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores
                                    nam, aperiam minima elit assumenda voluptate velit.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6" style="margin-top: -6rem;">
                        <div class="view">
                            <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="smaple image">
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Offer -->

            <!-- Section: Contact Us -->
            <section id="contact" class="mb-3">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center"><?= str_replace('|', '-', $tittle); ?></h2>
                <hr class="hr-pink my-3">
                <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Saat ini untuk event ini kami sudah menerima 123421 pendaftar, makadari itu persiapkan diri kalian sebaik mungkin, Good luck!.</p>


                <!-- Form -->
                <form class="" id="form_peserta">
                    <input type="hidden" name="id_evn" value="<?= $id; ?>">
                    <!-- Name -->
                    <div class="row">
                        <div class="col mb-lg-0 mb-4 text-center ">
                            <div class="md-form md-outline">
                                <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" class="form-control">
                                <label for="nama">Name</label>
                            </div>
                            <small class="text-danger" id="nama_error"></small>

                            <!-- E-mail -->
                            <div class="md-form md-outline">
                                <input type="email" name="email" id="Email" value="<?php echo set_value('email'); ?>" class="form-control">
                                <label for="Email">E-mail</label>
                            </div>
                            <small class="text-danger" id="email_error"></small>

                            <!--Message-->
                            <div class="md-form md-outline">
                                <textarea id="Alamat" name="alamat" value="<?php echo set_value('alamat'); ?>" class="form-control md-textarea" rows="3"></textarea>
                                <label for="Alamat">Alamat</label>
                            </div>
                            <small class="text-danger" id="alamat_error"></small>
                        </div>
                        <!-- Name -->
                        <div class="col mb-lg-0 mb-4 text-center">
                            <div class="md-form md-outline">
                                <input type="text" name="nis" id="Nis" value="<?php echo set_value('nis'); ?>" class="form-control">
                                <label for="Nis">NISN</label>
                            </div>
                            <small class="text-danger" id="nis_error"></small>

                            <!-- E-mail -->
                            <div class="md-form md-outline">
                                <input type="text" name="sekolah" id="Sekolah" value="<?php echo set_value('sekolah'); ?>" class="form-control">
                                <label for="Sekolah">Nama Sekolah</label>
                            </div>
                            <small class="text-danger" id="sekolah_error"></small>

                            <!--Message-->
                            <div class="col-sm-12">
                                <input type="file" class="custom-file-input" data-min-height="825" data-min-width="2039" data-max-height="827" data-max-width="2041" data-default-file="" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="3080K" name="fhoto" id="fhoto" required>
                            </div>
                            <small class="text-mute" id="gambar_error"></small>
                            <!-- Send button -->
                            <button id="save" class="float-right col-sm-3 btn btn-outline-purple-pastel btn-rounded btn-block z-depth-0 mx-0 my-4 waves-effect" type="submit">Send</button>
                        </div>
                    </div>
                </form>
                <!-- Form -->
            </section>
            <!-- Section: Contact Us -->

        </div>

    </main>
    <!-- Main layout -->
    <script type="text/javascript" src="<?= base_url() . 'assets/dropify/dist/js/dropify.min.js' ?>"></script>
    <script type="text/javascript">
        $('#fhoto').dropify({
            messages: {
                'default': '<font face="Tahoma"  size="4">Seret & Lepas Gambar disini</font>',
                'replace': 'Ganti',
                'remove': 'Hapus',
                'error': 'error'
            }
        });
    </script>
    <script>
        var nama = $('#nama').val();
        $('#form_peserta').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= base_url('Guess/add'); ?>",
                method: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                beforeSend: function() {
                    $('#save').attr('disabled', 'disabled');
                },
                success: function(data) {
                    if (data.error) {
                        if (data.nama_error != '') {
                            $('#nama_error').html(data.nama_error);
                        } else {
                            $('#nama_error').html('');
                        }
                        if (data.alamat_error != '') {
                            $('#alamat_error').html(data.alamat_error);
                        } else {
                            $('#alamat_error').html('');
                        }
                        if (data.email_error != '') {
                            $('#email_error').html(data.email_error);
                        } else {
                            $('#email_error').html('');
                        }
                        if (data.sekolah_error != '') {
                            $('#sekolah_error').html(data.sekolah_error);
                        } else {
                            $('#sekolah_error').html('');
                        }
                        if (data.nis_error != '') {
                            $('#nis_error').html(data.nis_error);
                        } else {
                            $('#nis_error').html('');
                        }
                        if (data.gambar_error != '') {
                            $('#gambar_error').html(data.gambar_error);
                        } else {
                            $('#gambar_error').html('');
                        }
                    }
                    if (data.success) {
                        $('#peserta').val(nama);
                        $('#frameModaltop').modal("show");
                        $('#success_message').html(data.success);
                        $('#nama_error').html('');
                        $('#email_error').html('');
                        $('#alamat_error').html('');
                        $('#sekolah_error').html('');
                        $('#nis_error').html('');
                        $('#gambar_error').html('');
                        $('#form_peserta')[0].reset();
                    }
                    $('#save').attr('disabled', false);

                }
            });
        })
    </script>