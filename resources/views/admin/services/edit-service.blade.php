@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All/</span> Edit Service</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('editservice', ['id' => $service->id]) }}" enctype="multipart/form-data">
    @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add Service</h5>
              <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/services') }}">Manage Services</a></small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Service Title</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="title" type="text" id="basic-icon-default-email" class="form-control" placeholder="The Title"
                        aria-label="the title" aria-describedby="basic-icon-default-email2" value="{{ $service->title }}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Service Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="content">{{ $service->content }}</textarea>
                  </div>
                </div>
                <div class="row mb-5 mt-5">
                  <label class="col-sm-2 col-form-label" for="formFile">Upload Feature Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="feature_image" id="formFile">
                        <div class="brand-logo img-preview mt-3">
                            <img
                                id="preview"
                                loading="lazy"
                                src="{{ isset($featurePath) ? asset('storage/' . $featurePath) : asset('assets/admin/img/no-photo.png') }}"
                                width="100%"
                                alt="Stonytrack"
                            />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">PDF URL</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="pdf_url" type="text" id="basic-icon-default-email" class="form-control" placeholder="www.pdfurl.com/abcdef"
                        aria-label="www.pdfurl.com/abcdef" aria-describedby="basic-icon-default-email2" value="{{ $service->pdf_url }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="category_id">Choose Category</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <select class="form-control custom-select" id="category_id" name="category_id" style="color:#00f3ff !important;">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $service->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
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
                      <button type="submit" class="btn btn-primary">Save Change</button>
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
    function previewImage() {
        var input = document.getElementById('formFile');
        var preview = document.getElementById('preview');
        var imgPreview = new FileReader();

        imgPreview.onload = function () {
            preview.src = imgPreview.result;
        }

        if (input.files && input.files[0]) {
            imgPreview.readAsDataURL(input.files[0]);
        }
    }
  </script>


@include('layout.admin.footer')