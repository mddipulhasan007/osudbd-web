<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Osudbd</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Industrial Services">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content=">
  <meta name=generator content= Stonytrack v1.0">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.css') }}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/colorbox/colorbox.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>
  <div class="body-inner">
    <div id="top-bar" class="top-bar d-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
              <li><i class="fas fa-map-marker-alt"></i>
                <p class="info-text">75-76, Janata Housing, Ring Road Adabor, Dhaka, Bangladesh
                </p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a target="_blank" title="Facebook" href="https://www.facebook.com/profile.php?id=61551020260743">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a target="_blank" title="Twitter" href="https://twitter.com.com">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a target="_blank" title="Instagram" href="https://instagram.com.com">
                  <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                </a>
                <a target="_blank" title="Linkdin" href="https://github.com.com">
                  <span class="social-icon"><i class="fab fa-whatsapp"></i></span>
                </a>
              </li>
            </ul>
          </div>
          <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
      <div class="bg-white">
        <div class="container">
          <div class="logo-area">
            <div class="row align-items-center">
              <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
              <a class="d-block" href="{{ url('/') }}">
                  @if($header && $header->logo)
                      <img loading="lazy" src="{{ asset('storage/' . $header->logo) }}" alt="Stonytrack">
                  @else
                      <img loading="lazy" src="{{ asset('assets/images/logo/logo.png') }}" alt="Stonytrack">
                  @endif
              </a>
              </div><!-- logo end -->

              <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <p class="info-box-title">Call Now</p>
                        <p class="info-box-subtitle">{{ $header->phone ?? '' }}</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <p class="info-box-title">Sent us on email</p>
                        <p class="info-box-subtitle">{{ $header->email ?? '' }}</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                        <p class="info-box-title">
                        {{ $header->address ?? '' }}
                        </p>
                        <!-- <p class="info-box-subtitle"></p> -->
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary d-none" href="contact.html">Get A Quote</a>
                    <div class="footer-social">
                      <ul>
                        <li><a target="_blank" href="{{ $header->facebook ?? '#' }}"
                                aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a target="_blank" href="{{ $header->linkedin ?? '#' }}"
                                aria-label="Linkedin"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a target="_blank" href="{{ $header->youtube ?? '#' }}"
                                aria-label="Youtube"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" href="{{ $header->whatsapp ?? '#' }}"
                                aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul><!-- Ul end -->
              </div><!-- header right end -->
            </div><!-- logo area end -->

          </div><!-- Row end -->
        </div><!-- Container end -->
      </div>

      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse custom-main-nav">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products & Services <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categories as $category)
                                <li><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                
                    <li class="nav-item {{ request()->is('projects') ? 'active' : '' }}">
                        <a href="{{ url('/projects') }}" class="nav-link">Projects</a>
                    </li>
                
                    <li class="nav-item {{ request()->is('medianews') ? 'active' : '' }}">
                        <a href="{{ url('/medianews') }}" class="nav-link">Media & News </a>
                    </li>
                
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->

          <div class="nav-search d-none">
            <span id="search"><i class="fa fa-search"></i></span>
          </div><!-- Search end -->

          <div class="search-block" style="display: none;">
            <label for="search-field" class="w-100 mb-0">
              <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
            </label>
            <span class="search-close">&times;</span>
          </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->