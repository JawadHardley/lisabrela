
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
                <span class="text-danger">BRE</span><span class="text-primary">LA</span>
              </h1>
            </a>
          </h1>
          
        </div> 
      </header>
      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body my-auto">
          
            <div class="page page-center">
                <div class="container">
                    <h1 style="font-family: gotham;" class="text-center text-greyn display-2">
                        OBRS
                    </h1>
                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                            <a href="/applicant/login" class="text-decoration-none">
                                <div class="card shadow p-3 mb-5 bg-body rounded">
                                    <div class="empty">
                                        <div class="empty-img">
                                            <img src="./tabler/svg/tax.svg" height="128" alt="">
                                        </div>
                                        <p class="empty-title">Applicant</p>
                                        <p class="empty-subtitle text-muted">
                                        Click here if you are applying for a license in our system.
                                        </p>
                                        <div class="empty-action">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <a href="/gvt/login" class="text-decoration-none">
                                <div class="card shadow p-3 mb-5 bg-body rounded">
                                    <div class="empty">
                                        <div class="empty-img">
                                            <img src="./tabler/svg/gvt.svg" height="128" alt="">
                                        </div>
                                        <p class="empty-title">Government Official</p>
                                        <p class="empty-subtitle text-muted">
                                        Click here if you are the government official.
                                        </p>
                                        <div class="empty-action">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <a href="/tax/login" class="text-decoration-none">
                                <div class="card shadow p-3 mb-5 bg-body rounded">
                                    <div class="empty">
                                        <div class="empty-img">
                                            <img src="./tabler/svg/applicant.svg" height="128" alt="">
                                        </div>
                                        <p class="empty-title">Tax Officer</p>
                                        <p class="empty-subtitle text-muted">
                                        Click here if you are the tax clearance officer.
                                        </p>
                                        <div class="empty-action">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
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
    <!-- Tabler Core -->
    <script src="./tabler/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="./tabler/dist/js/demo.min.js?1674944402" defer></script>
  </body>
</html>