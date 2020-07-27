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
                        <a class="nav-link heather-color" href="#about" data-offset="100">
                            <strong>About us</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link heather-color" href="#articles" data-offset="100">
                            <strong>Articles</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link heather-color" href="#offer" data-offset="100">
                            <strong>Memberships</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link heather-color" href="#contact" data-offset="100">
                            <strong>Contact us</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0-1" href="#contact" data-offset="100">
                            <button type="button" class="btn btn-outline-purple-pastel btn-rounded btn-md z-depth-0 m-0 pt-2">Join Us <i class="fas fa-angle-double-right"></i></button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar -->