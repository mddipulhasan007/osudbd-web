@include('layout.frontend.header')


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="shuffle-btn-group">
                <div class="nav-item">
                    <label class="pl-0">{{ $news->title }} Photo Gallery</label>
                </div>
            </div><!-- project filter end -->

            <div class="col-md-12">
                <div class="row gap-2">
                @foreach(json_decode($news->news_gallery_image) as $image)
                    <div class="col-lg-4 col-md-6 shuffle-item px-2">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('storage/' . $image) }}" aria-label="gallery-img">
                               <img class="img-fluid" src="{{ asset('storage/' . $image) }}" alt="gallery-img">
                               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content d-flex align-items-center justify-content-center h-100">
                                <h3 class="project-item-title text-white">
                                   
                                </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>       
            
        </div>
    </div>
</section>

@include('layout.frontend.footer')