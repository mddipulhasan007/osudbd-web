@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> Edit New Brand Logo</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('editBrandLogo', ['id' => $brand->id]) }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Upload Brand Logo</h5>
              <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/brands') }}">Manage Brands</a></small>
            </div>
            <div class="card-body img-item-sec">
              <div class="row mb-5">
                  <label class="col-sm-2 col-form-label" for="formFile">Upload Logo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="logo" id="formFile">
                    <div class="brand-logo img-preview mt-3">
                    <img
                        id="preview"
                        loading="lazy"
                        src="{{ asset('storage/' . $brand->logo) }}"
                        width="100%"
                        alt="Stonytrack"
                    />
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