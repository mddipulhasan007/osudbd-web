<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Osudbd - Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('assets/admin/js/config.js') }}"></script>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <script src="{{ asset('assets/admin/vendor/js/menu.js') }}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('assets/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/admin/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/admin/js/dashboards-analytics.js') }}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

