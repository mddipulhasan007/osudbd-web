
    <div class="banner-carousel banner-carousel banner-carousel-1 mb-0">
      @foreach($banner as $ban)
        <div class="banner-carousel-item" style="background-image: url({{ asset('storage/' . $ban->banner_image) ?: asset('assets/images/slider-main/banner-1.jpg') }})">
          <div class="slider-content text-right">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInLeft">{{ $ban->caption_title }}</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">{{ $ban->main_title }}</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="{{ $ban->services_url }}" class="slider btn btn-primary">Our Services</a>
                    <a href="{{ $ban->contact_url }}" class="slider btn btn-primary border">Contact Now</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <section class="call-to-action-box no-padding d-none">
      <div class="container">
        <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="{{ ('contact') }}">Request Quote</a>
              </div>
            </div><!-- col end -->
          </div><!-- row end -->
        </div><!-- Action style box -->
      </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features solid-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
            {!! $aboutContent->left_about_txt ?? '' !!}
              <a class="btn btn-primary" href="{{ $aboutContent->read_more_url }}">{{ $aboutContent->read_more_text }}</a>
            </div><!-- Intro box end -->

            <div class="gap-20"></div>

            <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-trophy"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">{{ $aboutContent->bottom_text_1 }}</h3>
                  </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-sliders-h"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">{{ $aboutContent->bottom_text_2 }}</h3>
                  </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
            </div><!-- Content row 1 end -->

            <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-thumbs-up"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">{{ $aboutContent->bottom_text_3 }}</h3>
                  </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">{{ $aboutContent->bottom_text_4 }}</h3>
                  </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-4 mt-lg-0">
          {!! $aboutContent->right_values_txt ?? '' !!}

            <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      {{ $aboutContent->safety_text }}
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#our-values-accordion">
                  <div class="card-body">
                  {!! $aboutContent->safety_txt ?? '' !!}
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      {{ $aboutContent->service_text }}
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                  <div class="card-body">
                  {!! $aboutContent->service_txt ?? '' !!}
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      {{ $aboutContent->integrity_text }}
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                  data-parent="#our-values-accordion">
                  <div class="card-body">
                  {!! $aboutContent->integrity_txt ?? '' !!}
                  </div>
                </div>
              </div>
            </div>
            <!--/ Accordion end -->

          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg d-none">
      <div class="container">
        <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact1.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact2.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact3.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/fact4.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="10">0</span></h2>
                <h3 class="ts-facts-title">District Experience</h3>
              </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->

    <section id="ts-service-area" class="ts-service-area pb-0">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
          {!! $serviceContent->middle_title_txt ?? '' !!}
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->fire_protect_system ?? '' !!}
              </div>
            </div><!-- Service 1 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon2.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->hvac_system ?? '' !!}
              </div>
            </div><!-- Service 2 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon3.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->electrical_solu ?? '' !!}
              </div>
            </div><!-- Service 3 end -->

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" 
            src="{{ $serviceContent && $serviceContent->service_img ? asset('storage/' . $serviceContent->service_img) : asset('assets/images/services/service-center.jpg') }}"
            alt="service-avater-image">
          </div><!-- Col end -->

          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon4.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->plumbing_service ?? '' !!}
              </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon5.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->elevator_escalator ?? '' !!}
              </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon6.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
              {!! $serviceContent->safety_consult ?? '' !!}
              </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end -->
        </div><!-- Content row end -->

      </div>
      <!--/ Container end -->
    </section><!-- Service end -->

    <section id="project-area" class="project-area solid-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Our Projects</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-12">
            <div class="shuffle-btn-group">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-ongoing-tab" data-toggle="pill" href="#pills-ongoing" role="tab" aria-controls="pills-ongoing" aria-selected="true">Ongoing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-completed-tab" data-toggle="pill" href="#pills-completed" role="tab" aria-controls="pills-completed" aria-selected="false">Completed</a>
                </li>
              </ul>

            </div><!-- project filter end -->

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row">
                  @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 shuffle-item px-3 mb-4" data-groups='@json($project->category->pluck("name"))'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('project.pdetails', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                    </h3>
                                    <p class="project-cat"> {{ $project->category->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item end -->
                @endforeach
                </div><!-- tab end -->
              </div><!-- tab end -->
              <div class="tab-pane fade" id="pills-ongoing" role="tabpanel" aria-labelledby="pills-ongoing-tab">
                <div class="row">
                @foreach($ongoingProjects as $project)
                <div class="col-lg-4 col-md-6 shuffle-item px-3 mb-4" data-groups='@json($project->category->pluck("name"))'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('project.pdetails', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                    </h3>
                                    <p class="project-cat"> {{ $project->category->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item end -->
                    @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="pills-completed" role="tabpanel" aria-labelledby="pills-completed-tab">
                <div class="row">
                @foreach($completedProjects as $project)
                  <div class="col-lg-4 col-md-6 shuffle-item px-3 mb-4" data-groups='@json($project->category->pluck("name"))'>
                      <div class="project-img-container">
                          <a class="gallery-popup" href="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" aria-label="project-img">
                              <img class="img-fluid" src="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-img">
                              <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                          </a>
                          <div class="project-item-info">
                              <div class="project-item-info-content">
                                  <h3 class="project-item-title">
                                      <a href="{{ route('project.pdetails', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                  </h3>
                                  <p class="project-cat"> {{ $project->category->name }}</p>
                              </div>
                          </div>
                      </div>
                    </div><!-- shuffle item end -->
                    @endforeach
                </div>
              </div>
            </div>
           
          <div class="col-12">
            <div class="general-btn text-center">
              <a class="btn btn-primary" href="{{ ('projects') }}">View All Projects</a>
            </div>
          </div>

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Project area end -->

    <section class="content d-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Testimonials</h3>

            <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                    view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                    subline of her own road.
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial1.png') }}"
                      alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author">Gabriel Denis</h3>
                      <span class="quote-subtext">Chairman, OKT</span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                    nisi aliquip consequat.
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial2.png') }}"
                      alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author">Weldon Cash</h3>
                      <span class="quote-subtext">CFO, First Choice</span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                  <span class="quote-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                    nisi ut commodo consequat.
                  </span>

                  <div class="quote-item-footer">
                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial3.png') }}"
                      alt="testimonial">
                    <div class="quote-item-info">
                      <h3 class="quote-author">Minter Puchan</h3>
                      <span class="quote-subtext">Director, AKT</span>
                    </div>
                  </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h3 class="column-title">Happy Clints</h3>

            <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client1.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client2.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client3.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client4.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client5.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                  <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('assets/images/clients/client6.png') }}"
                      alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

            </div><!-- Clients row end -->

          </div><!-- Col end -->

        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Content end -->

    <section class="d-none subscribe no-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+9) 847-291-4353</h4>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-8">
            <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                    <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg"
                      placeholder="Your your email and hit enter" autocomplete="off">
                  </div>
                </form>
              </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section>
    <!--/ subscribe end -->

    <div class="container">
      <h2 class="text-center my-3 py-3">PARTNERS / BRANDS</h2>
      <section class="clints-brands customer-logos slider pt-0">
        @foreach($brands as $brand)
          <div class="slide">
              <img src="{{ asset('storage/' . $brand->logo) }}" alt="Brand Logo">
          </div>
        @endforeach
      </section>
    </div>

    <section id="news" class="news">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Srvices & Products Feature</h2>
            <h3 class="section-sub-title">Products & Services</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
    @foreach ($services->slice(-3) as $service)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                    <a href="{{ route('service.details', ['slug' => $service->slug]) }}" class="latest-post-img">
                        <img loading="lazy" class="img-fluid" src="{{ $service['feature_image'] ? asset('storage/' . $service['feature_image']) : asset('assets/images/news/default.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="post-body">
                    <h4 class="post-title">
                        <a href="{{ route('service.details', ['slug' => $service->slug]) }}" class="d-inline-block">
                            {{ $service['title'] }}
                        </a>
                    </h4>
                    <div class="latest-post-meta">
                        <span class="post-item-date">
                            <i class="fa fa-clock-o"></i> {!! $service['content'] !!}
                        </span>
                    </div>
                </div>
            </div><!-- Latest post end -->
        </div><!-- Post col end -->
    @endforeach
</div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4 d-none">
          <a class="btn btn-primary" href="{{ ('projects') }}">See All Project</a>
        </div>

      </div>
      <!--/ Container end -->
    </section>
    <!--/ News end -->

