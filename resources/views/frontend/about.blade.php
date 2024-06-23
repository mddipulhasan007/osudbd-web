@include('layout.frontend.header')

    <div id="banner-area" class="banner-area d-{{ $aboutPage->bdcmb_show_hide ?? '' }}" style="background-image:url({{ $aboutPage->bdcmb_banner_img ? asset('storage/' . $aboutPage->bdcmb_banner_img) : asset('assets/images/banner/banner1.jpg') }})">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">About</h1>
                
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          {!! $aboutPage->left_about_txt ?? '' !!}

          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">
            <br />
            <br />
            <br />
            <div class="page-slider small-bg">

            <div class="item" style="background-image:url({{ $aboutPage->about_img ? asset('storage/' . $aboutPage->about_img) : asset('assets/images/slider-pages/slide-page1.jpg') }})">
                <div class="container">
                  
                </div>
              </div><!-- Item 1 end -->
            
            </div><!-- Page slider end-->

            <div id="page-slider" class="page-slider small-bg d-none">

              <div class="item" style="background-image:url({{ asset('assets/images/slider-pages/slide-page1.jpg') }})">
                <div class="container">
                  <div class="box-slider-content">
                    <div class="box-slider-text">
                      <h2 class="box-slide-title">Leadership</h2>
                    </div>
                  </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{ asset('assets/images/slider-pages/slide-page2.jpg') }})">
                <div class="container">
                  <div class="box-slider-content">
                    <div class="box-slider-text">
                      <h2 class="box-slide-title">Relationships</h2>
                    </div>
                  </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{ asset('assets/images/slider-pages/slide-page3.jpg') }})">
                <div class="container">
                  <div class="box-slider-content">
                    <div class="box-slider-text">
                      <h2 class="box-slide-title">Performance</h2>
                    </div>
                  </div>
                </div>
              </div><!-- Item 1 end -->
            </div><!-- Page slider end-->
            <br />
            <br />
            {!! $aboutPage->integrity_txt ?? '' !!}

          </div><!-- Col end -->
        </div><!-- Content row end -->
        <div class="row mt-4">
            <div class="col-md-12">
               <h3 class="border-bottom text-center">Company Profile</h3>
            </div>
            <br/>
            <div class="col-md-6">
              <div class="border d-flex align-items-center justify-content-center">
                <a class="btn btn-info" target="_blank" href="https://Osudbd.com/pdf/Stony_Track_Ltd._Company_Profile.pdf">
                  <h4 class="text-white">View PDF</h4>
                  <img height="400" src="{{ asset('assets/images/view-profile.png') }}" alt="PDF View">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border d-flex align-items-center justify-content-center" style="height:450px;">
               <a class="btn btn-primary" href="https://Osudbd.com/pdf/Stony_Track_Ltd._Company_Profile.pdf" download="Stony_Track_Ltd_Company_Profile.pdf">Download PDF</a>
              </div>
            </div>
        </div>

      </div><!-- Container end -->
    </section><!-- Main container end -->


    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact1.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="{{ $aboutPage->total_projects_count ?? '' }}">0</span>+</h2>
                <h3 class="ts-facts-title">Total Manufacture</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact2.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="{{ $aboutPage->staff_members_count ?? '' }}">0</span>+</h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact3.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="{{ $aboutPage->running_project_count ?? '' }}">0</span>+</h2>
                <h3 class="ts-facts-title">Running of Manufacture</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact4.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="{{ $aboutPage->dist_exp_count ?? '' }}">0</span>+</h2>
                <h3 class="ts-facts-title">District Experience</h3>
              </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->

    <section id="ts-team" class="ts-team">
      <div class="container d-{{ $aboutPage->teams_show_hide ?? '' }}">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Quality Service</h2>
            <h3 class="section-sub-title">Osud BD Team</h3>
          </div>
        </div><!--/ Title row end -->

        <div class="row">
          <div class="col-lg-12">
            <div id="team-slide" class="team-slide">
              @foreach ($teams as $team)
                <div class="item">
                    <div class="ts-team-wrapper">
                        <div class="team-img-wrapper">
                            <img loading="lazy" class="w-100" src="{{ $team->profile_image ? asset('storage/' . $team->profile_image) : asset('assets/images/team/team1.png') }}" alt="team-img">
                        </div>
                        <div class="ts-team-content">
                            <h3 class="ts-name">{{ $team->name }}</h3>
                            <p class="ts-designation">{{ $team->qualification }}</p>
                            <p class="ts-description">{!! $team->short_content !!}</p>
                        </div>
                    </div><!--/ Team wrapper end -->
                </div><!-- Team item end -->
              @endforeach

            </div><!-- Team slide end -->
          </div>
        </div><!--/ Content row end -->
      </div><!--/ Container end -->
    </section><!--/ Team end -->

    @include('layout.frontend.footer')