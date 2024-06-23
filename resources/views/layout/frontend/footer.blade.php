<footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>
                @if($footer && $footer->logo)
                  <img loading="lazy" width="200px" class="footer-logo" src="{{ asset('storage/' . $footer->logo) }}" alt="Osudbd">
                @else
                  <img loading="lazy" width="200px" class="footer-logo" src="{{ asset('assets/images/logo/logo-footer.png') }}" alt="Osudbd">
                @endif
      
              {!! $footer->about_txt ?? '' !!}
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
              </div><!-- Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Contact</h3>
              <div class="working-hours">
                {{ $header->address ?? '' }}
                <br><br> Call Now: <span class="text-right">{{ $header->phone ?? '' }}</span>
                <br> Send Email: <span class="text-right">{{ $header->email ?? '' }}</span>
                <br>
                <br>
                <ul class="list-arrow">
                  <span class="text-left">
                      Web Mail URL Link: <a style="color:#fff; hover:#EFB601 !important;" class="link web-link" target="_blank" href="https://Osudbd.com/webmail"> Osudbd.com/webmail</a>
                  </span>
                </ul>
              </div>
            </div><!-- Col end -->

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Services</h3>
              <ul class="list-arrow">
              <!-- @foreach($categories->take(6) as $category)
                  <li><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
              @endforeach -->
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-info">
                <span>Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, {{ $footer->copyright_txt ?? '' }} <a href="{{ url('/') }}">Osudbd</a>
                </span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="footer-menu text-center text-md-right">
                <ul class="list-unstyled">
                  <li><a href="{{ $footer->foo_menu_url1 ?? '' }}">About</a></li>
                  <li><a href="{{ $footer->foo_menu_url2 ?? '' }}">Our Gallery</a></li>
                  <!-- <li><a href="faq.html">Faq</a></li> -->
                  <li><a href="{{ $footer->foo_menu_url3 ?? '' }}">Terms & Conditions</a></li>
                  <li><a href="{{ $footer->foo_menu_url4 ?? '' }}">Privacy & Policy</a></li>
                </ul>
              </div>
            </div>
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->

<style>
    a.web-link:hover{
    color: #F7941D !important;
};
    }
</style>

    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('assets/plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{ asset('assets/plugins/google-map/map.js') }}" defer></script>

    <!-- Template custom -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

  </div><!-- Body inner end -->

  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
    $(document).ready(function () {
      $('.customer-brands').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.customer-standc').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.customer-brands2').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    $(document).ready(function () {
      $('.customer-standc2').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    $(document).ready(function () {
      $('.customer-brands3').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    $(document).ready(function () {
      $('.customer-standc3').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    $(document).ready(function () {
      $('.customer-brands4').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });

    $(document).ready(function () {
      $('.customer-standc4').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
  </script>

</body>

</html>