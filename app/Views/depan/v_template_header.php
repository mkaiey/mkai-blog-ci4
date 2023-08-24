<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Mkai Blog
    <?php if ($judul)
      echo " | " . $judul; ?>
  </title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?php echo base_url('depan') ?>/css/styles.css" rel="stylesheet" />

  <style>
    .container img {
      max-width: 100%;
    }
  </style>

</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="<?php echo site_url() ?>">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url() ?>">Beranda</a></li>
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo set_post_link('14') ?>">Tentang
              Kami</a></li>
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
              href="<?php echo set_post_link('13') ?>">Artikel</a></li>
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
              href="<?php echo site_url('contact') ?>">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Header-->
  <header class="masthead" style="background-image: url('<?php echo base_url(LOKASI_UPLOAD . "/" . $thumbnail) ?>')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <?php
          if ($type == 'article') {
            ?>
            <div class="post-heading">
              <h1>
                <?php echo $judul ?>
              </h1>
              <?php if ($deskripsi) { ?>
                <h2 class="subheading">
                  <?php echo $deskripsi ?>
                </h2>
              <?php } ?>
              <span class="meta">
                Diposting oleh:
                <a href="#!">
                  <?php echo post_penulis($penulis) ?>
                </a>
                pada hari
                <?php echo tanggal_indonesia($tanggal) ?>
              </span>
            </div>
            <?php
          } elseif ($type == 'page') {
            ?>
            <div class="site-heading">
              <h1>
                <?php echo $judul ?>
              </h1>
              <?php if ($deskripsi) { ?>
                <span class="subheading">
                  <?php echo $deskripsi ?>
                </span>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">