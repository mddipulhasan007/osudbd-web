@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }}">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Manufacture</h1>
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
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All Manufacture</a>
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
           
          
        </div><!-- Content row end -->

      </div><!-- Conatiner end -->
    </section><!-- Main container end -->
   
    @include('layout.frontend.footer')