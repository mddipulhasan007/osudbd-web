@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All/</span> Edit Media & News</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('editnews', ['id' => $news->id]) }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->
      <input type="hidden" name="current_image" value="{{ $news->news_image }}">
      <input type="hidden" name="current_gallery" value="{{ $news->news_gallery_image }}">
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit Media & News</h5>
              <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/newses') }}">Manage Media & News</a></small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Media & News Title</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="title" type="text" id="basic-icon-default-email" class="form-control" placeholder="Media & News Title"
                        aria-label="the title" aria-describedby="basic-icon-default-email2" value="{{ $news->title }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-5 mt-5">
                    <label class="col-sm-2 col-form-label">Upload Thumbnail Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="news_image" id="formFilethumb" onchange="previewThumbnail(event)">
                        <div class="brand-logo img-preview mt-3">
                            <img id="thumb_preview" loading="lazy" src="{{ isset($newsPath) ? asset('storage/' . $newsPath) : asset('assets/admin/img/no-photo.png') }}" width="100%" alt="Stonytrack">
                        </div>
                    </div>
                </div>

                <div class="row mb-5 mt-5">
                  <label class="col-sm-2 col-form-label" for="formFile">Upload Gallery Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="news_gallery_image[]" id="formFileGallery" multiple onchange="previewGallery(event)">
                    <div class="brand-logo img-preview multi-img-preview mt-3">
                        @if($news->news_gallery_image)
                            @foreach(json_decode($news->news_gallery_image) as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image">
                            @endforeach
                        @endif
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <!-- Basic Layout -->
          <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update Change</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </form>

  </div>
  <!-- / Content -->

  <script>
      function previewThumbnail(event) {
          var input = event.target;
          var preview = document.getElementById('thumb_preview');
          var imgPreview = new FileReader();

          imgPreview.onload = function () {
              preview.src = imgPreview.result;
          }

          if (input.files && input.files[0]) {
              imgPreview.readAsDataURL(input.files[0]);
          }
      }
  </script>

  <script>
      function previewGallery(event) {
          var input = event.target;
          var preview = input.nextElementSibling; // Get the next sibling, which is the preview container
          var files = input.files;

          preview.innerHTML = '';
          if(files) {
              [].forEach.call(files, function(file) {
                  var reader = new FileReader();

                  reader.onload = function(event) {
                      var img = document.createElement('img');
                      img.src = event.target.result;
                      img.width = 100; // Adjust as needed
                      preview.appendChild(img);
                  }

                  reader.readAsDataURL(file);
              });
          }
      }
  </script>


@include('layout.admin.footer')