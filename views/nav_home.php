<main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="<?= App::baseUrl('assets') ?>/home/assets/img/Logo.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= App::baseUrl('home/about') ?>">About</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= App::baseUrl('home/blog') ?>">Blogs</a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="<?= App::baseUrl('login') ?>">Log In</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="<?= App::baseUrl('assets') ?>/home/assets/img/hero/hero-bg.png" alt="" />

