@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }}">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Media & News</h1>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">
      <div class="row">
          <div class="col-12">
            <div class="shuffle-btn-group">
                <div class="nav-item">
                  <label class="pl-0">Photo & Alburm</label>
                </div>
            </div><!-- project filter end -->

            <div class="col-md-12">
              <div class="row gap-2">
                @foreach($news as $item)
                  <div class="col-lg-4 col-md-6 shuffle-item px-2">
                    <div class="project-img-container">
                      <a class="" href="{{ route('news.newsshow', $item->id) }}" aria-label="news-img">
                        <img class="img-fluid" src="{{ asset('storage/' . $item->news_image) }}" alt="news-img">
                        <div class="project-item-info">
                          <div class="project-item-info-content d-flex align-items-center justify-content-center h-100">
                            <h3 class="project-item-title text-white">
                              {{ $item->title }}
                            </h3>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>       
          
        </div><!-- Content row end -->

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    <section id="main-container" class="main-container">
      <div class="container">
      <div class="row">
          <div class="col-12">
            <div class="shuffle-btn-group">
                <div class="nav-item">
                  <label class="pl-0">Video Gallery</label>
                </div>
            </div><!-- project filter end -->

            <div class="col-md-12">
              <div class="row">
                @foreach($videos as $video)
                  <div class="col-lg-4 col-md-6 shuffle-item px-2">
                    <iframe width="354" height="300" src="{{ $video->video_iframe }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div><!-- shuffle item end -->
                @endforeach
              </div>
            </div>
          
        </div><!-- Content row end -->

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    <section id="main-container" class="main-container">
      <div class="container">
      <div class="row">
          <div class="col-12">
            <div class="shuffle-btn-group">
                <div class="nav-item">
                  <label class="pl-0">Notice Board</label>
                </div>
            </div><!-- project filter end -->

            <div class="col-md-12">
              <div class="row">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Sl No</th>
                              <th>Title</th>
                              <th>PDF</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                              $slNo = 1;
                          @endphp
                          @foreach($notice->reverse() as $not)
                              <tr>
                                  <td>{{ $slNo++ }}</td>
                                  <td>
                                      <a href="{{ $not->pdf_url }}" target="_blank">
                                          <h4>{{ $not->title }}</h4>
                                      </a>
                                  </td>
                                  <td>
                                      <a href="{{ $not->pdf_url }}" target="_blank" title="Open PDF">
                                          <i class="fas fa-file-pdf"></i>
                                      </a>
                                      <a href="{{ $not->pdf_url }}" download title="Download PDF">
                                          <i class="fas fa-download"></i>
                                      </a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
           
          
        </div><!-- Content row end -->

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->
   
<style>
    .project-img-container{
      height: 100%;
      width: 100%;
    }
    .project-img-container a img{
      height: 100%;
      width: 100%;
      max-height: 300px;
    }
    .notice-board {
      list-style: none;
      padding: 0;
      height: 225px;
      overflow: auto;
      padding-right: 200px
    }
    .notice {
      border: 1px solid #ddd;
      margin-bottom: 10px;
      padding: 15px;
      border-radius: 5px;
      background-color: #f8f9fa;
    }
    .notice a {
      text-decoration: none;
      color: inherit;
    }
    .notice h4 {
      margin-top: 0;
    }
    .urgent {
      border-color: #dc3545;
      background-color: #f8d7da;
    }
    .important {
      border-color: #ffc107;
      background-color: #fff3cd;
    }
    .normal {
      border-color: #007bff;
      background-color: #cce5ff;
    }
    .shuffle-item .project-img-container .project-item-info {
      top: 11%;
    }
  </style>


@include('layout.frontend.footer')