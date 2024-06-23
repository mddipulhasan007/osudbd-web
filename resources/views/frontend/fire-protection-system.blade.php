@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }})">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Project</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Project</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects Single</li>
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
            <h3 class="column-title mrt-0">Fire Protection System</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div id="page-slider" class="page-slider small-bg">
              <div class="item">
                <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/standpipe.jpg') }}" alt="project-image" />
              </div>

              <!-- <div class="item">
                <img loading="lazy" class="img-fluid" src="images/projects/Fire-Door.jpg" alt="project-image" />
              </div> -->
            </div><!-- Page slider end -->

          </div><!-- Slider col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h5 class="column-title mb-1">Manual Fire Protection System: <span class="small-fs">Fire Standpipe & Hydrant
                System</span>
            </h5>
            <p>Stonytrack supplied, installed, serve and maintained of all types of fire protection solution for
              passive, active and manual fire protection as per NFPA, BNBC and IFC.
            </p>
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

        <div class="container mb-4">
          <div class="row">
            <div class="col-md-6 pl-0">
              <h4 class="text-start my-0 py-0">BRANDS</h4>
              <section class="clints-brands customer-brands2 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/1.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/3.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/8.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/9.png') }}">
                </div>
              </section>
            </div>
            <div class="col-md-6 pr-0">
              <h4 class="text-end my-0 py-0">Standard & Certification:</h4>
              <section class="clints-brands customer-standc2 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-2-nfpa.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-1-BNBC.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-5-PHC.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-6.png') }}">
                </div>
              </section>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div id="page-slider" class="page-slider small-bg">
              <div class="item">
                <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/gas.jpg') }}" alt="project-image" />
              </div>

              <!-- <div class="item">
                <img loading="lazy" class="img-fluid" src="images/projects/Fire-Door.jpg" alt="project-image" />
              </div> -->
            </div><!-- Page slider end -->
          </div><!-- Slider col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h5 class="column-title mb-1">Active Fire Protection System:
            </h5>
            <p>
              Fire Sprinkler System <br />
              Water Mist System <br />
              Fire Suppression (Clean Agent-NOVEC1230 & FM200) <br />
              Fire Suppression Aerosol System <br />
              Foam Deluge System <br />
              Oxygen reduction fire protection system <br />
            </p>

            <ul class="project-info list-unstyled">
              <li>
                <p class="project-info-label">Location</p>
                <p class="project-info-content">Kustia</p>
              </li>
              <!-- <li>
                <p class="project-info-label">Size</p>
                <p class="project-info-content">55,000 SF</p>
              </li> -->
              <li>
                <p class="project-info-label">Year Completed</p>
                <p class="project-info-content">2023</p>
              </li>
              <!-- <li>
                <p class="project-info-label">Categories</p>
                <p class="project-info-content">HVAC, Industrial</p>
              </li> -->
            </ul>

          </div><!-- Content col end -->

        </div><!-- Row end -->

        <div class="container mb-4">
          <div class="row">
            <div class="col-md-6 pl-0">
              <h4 class="text-start my-0 py-0">BRANDS</h4>
              <section class="clints-brands customer-brands3 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/14.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/15.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/7.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/16.png') }}">
                </div>
              </section>
            </div>
            <div class="col-md-6 pr-0">
              <h4 class="text-end my-0 py-0">Standard & Certification:</h4>
              <section class="clints-brands customer-standc3 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-2-nfpa.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-3-UL.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-4-fm.png') }}">
                </div>
              </section>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div id="page-slider" class="page-slider small-bg">
              <div class="item">
                <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/Fire-Door.jpg') }}" alt="project-image" />
              </div>

              <!-- <div class="item">
                <img loading="lazy" class="img-fluid" src="images/projects/Fire-Door.jpg" alt="project-image" />
              </div> -->
            </div><!-- Page slider end -->
          </div><!-- Slider col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h5 class="column-title mb-1">Passive Fire Protection System:</h3>
              <p>
                Fire Rated Doors & Windows <br />
                Fire Rated Gypsum Wall & Celling <br />
                Fire Rated Coating (Paint / Cementitious) <br />
                Fire Rated Curtains <br />
                Fire Rated Building Joint System <br />
                Fire Rated Expanding Foam
              </p>

              <ul class="project-info list-unstyled">
                <li>
                  <p class="project-info-label">Location</p>
                  <p class="project-info-content">Chattogram</p>
                </li>
                <!-- <li>
                  <p class="project-info-label">Size</p>
                  <p class="project-info-content">34,000 SF</p>
                </li> -->
                <li>
                  <p class="project-info-label">Year Completed</p>
                  <p class="project-info-content">2021</p>
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
              <section class="clints-brands customer-brands4 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/3.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/17.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/13.png') }}">
                </div>
              </section>
            </div>
            <div class="col-md-6 pr-0">
              <h4 class="text-end my-0 py-0">Standard & Certification:</h4>
              <section class="clints-brands customer-standc4 slider pt-0">
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-2-nfpa.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-3-UL.png') }}">
                </div>
                <div class="slide">
                  <img src="{{ asset('assets/images/clients-brands/SC-4-fm.png') }}">
                </div>
              </section>
            </div>
          </div>
        </div>

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    @include('layout.frontend.footer')