<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $judul; ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awsome/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <!-- Bootstrap core CSS -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url(); ?>assets/css/mdb.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/mdb.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/dropify/dist/css/dropify.min.css' ?>">
  <script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery.js"></script>
  <style>
    .overflow-auto {
      height: 150px;
      overflow-y: scroll;
    }
  </style>
  <style>
    .ui-autocomplete {
      max-height: 150px;
      overflow-y: auto;
      /* prevent horizontal scrollbar */
      overflow-x: hidden;
    }

    /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
    * html .ui-autocomplete {
      height: 150px;
    }
  </style>
</head>

<body class="fixed-sn homepage-v1">

  <!-- Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav elegant-color fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
          </div>
        </li>
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <!-- Simple link -->
            <li>
              <a href="<?= base_url() ?>events" class="collapsible-header waves-effect"><i class="w-fa fas fa-tachometer-alt-average"></i>Dashboard</a>
            </li>

            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-map"></i>Events<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="<?= base_url() ?>datamaster" class="waves-effect">Data-Master</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="<?= base_url() ?>galeri" class="collapsible-header waves-effect"><i class="far fa-images"></i>Galeri</a>
            </li>
          </ul>
        </li>
        <!-- Side navigation links -->

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg grey lighten-5 scrolling-navbar">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
      </div>

      <div class="d-flex">

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="badge red rounded">3</span> <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                <span>Your campaign is about to end</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Log Out</a>
              <a class="dropdown-item" href="#">My account</a>
            </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>

    </nav>
    <!-- Navbar -->
  </header>
  <div class="mb-3"></div>
  <!-- Navigation -->