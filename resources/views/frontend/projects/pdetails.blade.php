@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }})">
        <div class="banner-text">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="banner-heading">
                    <h1 class="banner-title">{{ $project->title }}</h1>
                </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <div class="container mt-3">
        <div class="row pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb2">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Manufacture</a></li>
                    <li class="breadcrumb-item">{{ $project->title }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <h3 class="column-title mrt-0">{{ $project->title }}</h3>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col-lg-6">
                <div id="page-slider" class="page-slider small-bg">
                <div class="item">
                    <img loading="lazy" class="img-fluid" src="{{ $project && $project->feature_image ? asset('storage/' . $project->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-image" />
                </div>

                <!-- <div class="item">
                    <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/projects/Fire-Door.jpg') }}" alt="project-image" />
                </div> -->
                </div><!-- Page slider end -->
            </div><!-- Slider col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">
                {!! $project->content !!}

                @if (!empty($project->pdf_url))
                    <div>
                        <a class="btn btn-primary" href="{{ $project->pdf_url }}" target="_blank">View PDF</a>
                    </div>
                @else
                    <p></p>
                @endif

            </div><!-- Content col end -->


            </div><!-- Row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    <style>
    .breadcrumb2 li a{
       color:#000 !important;
    }
    .breadcrumb2 li a:hover{
       color:#FF9723 !important;
    }
    .breadcrumb2 li a:active{
       color:#FF9723 !important;
    }
</style>

@include('layout.frontend.footer')