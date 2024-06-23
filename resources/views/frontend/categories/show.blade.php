@include('layout.frontend.header')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }})">
        <div class="banner-text">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="banner-heading">
                    <h1 class="banner-title">{{ $category->name }}</h1>
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
                    <li class="breadcrumb-item">Products & Services</li>
                    <li class="breadcrumb-item">{{ $category->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5 mt-4">
        <div class="row">
        @foreach($services as $service)
            <div class="col-md-4 cus-card-cs">
                <a href="{{ route('service.details', ['slug' => $service->slug]) }}" class="card" style="width: 18rem;">
                    <img loading="lazy" class="img-fluid card-img-top" src="{{ $service && $service->feature_image ? asset('storage/' . $service->feature_image) : asset('assets/images/projects/Fire-Alarm System.jpg') }}" alt="project-image" />
                    <div class="card-body">
                        <h4 class="card-title">{{ $service->title }}</h4>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>

@include('layout.frontend.footer')