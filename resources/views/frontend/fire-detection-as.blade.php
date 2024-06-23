@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }})">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Manufacture</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manufacture</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manufacture Single</li>
                  </ol>
                </nav>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 m-auto text-center">
            <h3 class="column-title mrt-0">Fire Detection & Alarm System</h3>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-lg-6">
            <div id="page-slider" class="page-slider small-bg">
              <div class="item">
                <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-image" />
              </div>

              <!-- <div class="item">
                <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/Fire-Door.jpg') }}" alt="project-image" />
              </div> -->
            </div><!-- Page slider end -->
          </div><!-- Slider col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h5 class="column-title mb-1">Detection & Alarm Products: <span class="small-fs">Addressable &
                Conventional</span></h5>
            <p>A full range of addressable and conventional ﬁre detection systems, beam detection, aspiration system,
              gas detection systems, extinguishing aerosol system, ﬂame detectors and power supply units. We apply the
              latest science and Engineering code and standard of NFPA.</p>

            <ul class="project-info list-unstyled">
              <li>
                <p class="project-info-label">Location</p>
                <p class="project-info-content">Dhaka</p>
              </li>
              <!-- <li>
                <p class="project-info-label">Size</p>
                <p class="project-info-content">65,000 SF</p>
              </li> -->
              <li>
                <p class="project-info-label">Year Completed</p>
                <p class="project-info-content">2022</p>
              </li>
              <!-- <li>
                <p class="project-info-label">Categories</p>
                <p class="project-info-content">Commercial, Interiors</p>
              </li> -->
            </ul>

          </div><!-- Content col end -->

        </div><!-- Row end -->

        <div class="container">
          <div class="row">
            <div class="col-md-6 pl-0">
              <h4 class="text-start my-0 py-0">BRANDS</h4>
              <section class="clints-brands customer-brands slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/2.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/6.png') }}">
                </div>
              </section>
            </div>
            <div class="col-md-6 pr-0">
              <h4 class="text-end my-0 py-0">Standard & Certification:</h4>
              <section class="clints-brands customer-standc slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-2-nfpa.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-3-UL.png') }}">
                </div>
              </section>
            </div>
          </div>
        </div>

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->
  @include('layout.frontend.footer')