<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Brela</title>
    <base href="/">
    <!-- CSS files -->
    <link href="./tabler/dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./tabler/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./tabler/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./tabler/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./tabler/dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="./tabler/fonts/css/all.css">
    <link rel="stylesheet" href="./tabler/mystyle.css">
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="./tabler/dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="." class="text-decoration-none">
                <h1 style="font-family: gotham light;">
                    <i class="fa fa-cubes"></i>
                    <span class="text-danger">OB</span><span class="text-primary">RS</span>
                </h1>
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
              <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
                </a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm bg-primary-lt" style="background-image: url(./static/avatars/000m.jpg)">
                  <i class="fa fa-user"></i>
                </span>
                <div class="d-none d-xl-block ps-2">
                  <div><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></div>
                  <div class="mt-1 small text-muted">
                    
                    <?php if(Auth::user()->role == 'applicant'): ?>
                      <?php echo e('Applicant'); ?>

                    <?php endif; ?>
                     
                    <?php if(Auth::user()->role == 'admin'): ?>
                      <?php echo e('Admin'); ?>

                    <?php endif; ?>
                    
                    <?php if(Auth::user()->role == 'gvt'): ?> 
                      <?php echo e('Government Official'); ?>

                    <?php endif; ?> 
                    
                    <?php if(Auth::user()->role == 'tax'): ?>       
                      <?php echo e('Tax Officer'); ?>

                    <?php endif; ?>

                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="./profile.html" class="dropdown-item">Profile</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                      <i class="fa fa-cogs"></i>
                    </span>
                    <span class="nav-link-title">
                      Options
                    </span>
                  </a>
                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="/root/home">
                      Dashboard
                    </a>

                    <?php if(Auth::user()->role == "admin"): ?>
                    <a class="dropdown-item" href="/root/users">
                      Manage Users
                    </a>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == "gvt"): ?>
                    <a class="dropdown-item" href="/gvt/paycode">
                      Verified Applicants
                    </a>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == "tax"): ?>
                    <a class="dropdown-item" href="/tax/applications/pending">
                      Pending Applications
                    </a>
                    <a class="dropdown-item" href="/tax/applications/rejected">
                      Rejected Applications
                    </a>
                    <?php endif; ?>

                    <?php if(Auth::user()->role == "applicant"): ?>
                    <a class="dropdown-item" href="/applicant/myapps">
                      My applications
                    </a>
                    <a class="dropdown-item" href="/applicant/goodapps">
                      Confirmed Applications
                    </a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                      Source code
                    </a>
                  </div>
                </li>
              </ul>
              <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                <form action="./" method="get" autocomplete="off" novalidate="">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                    </span>
                    <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            
            <?php echo $__env->yieldContent('content'); ?>

          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2023
                    <a href="." class="link-secondary">DIT</a>.
                    All rights reserved.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="./tabler/dist/libs/apexcharts/dist/apexcharts.min.js?1674944402" defer></script>
    <!-- Tabler Core -->
    <script src="./tabler/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="./tabler/dist/js/demo.min.js?1674944402" defer></script>
    <script src="./tabler/mystyle.js" defer></script>
  </body>
</html><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>