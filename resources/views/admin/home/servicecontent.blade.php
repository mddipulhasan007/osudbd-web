@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> Srvice Content Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('saveServiceContent') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Left Side</h5>
              <small class="text-muted float-end">Left Side & Content</small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Fire Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="fire_protect_system" rows="2" >
                        {!! $serviceContent->fire_protect_system ?? '' !!}
                    </textarea>
                  </div>
                </div>
                <div class="row mt-5">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">HVAC Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="hvac_system" rows="2" >
                        {!! $serviceContent->hvac_system ?? '' !!}
                    </textarea>
                  </div>
                </div>
                <div class="row mt-5">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Elevtrical Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="electrical_solu" rows="2" >
                        {!! $serviceContent->electrical_solu ?? '' !!}
                    </textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">middle Side</h5>
              <small class="text-muted float-end">middle Side & Content</small>
            </div>
            <div class="card-body">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Service Main Title</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="middle_title_txt">
                        {!! $serviceContent->middle_title_txt ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mb-5 mt-5">
                  <label class="col-sm-12 col-form-label" for="formFile">Upload Middle Img</label>
                  <div class="col-sm-12">
                    <input class="form-control" type="file" name="service_img" id="formFile">
                    <div class="img-preview mt-3">
                      <img
                          id="preview"
                          loading="lazy"
                          src="{{ $serviceContent && $serviceContent->service_img ? asset('storage/' . $serviceContent->service_img) : asset('assets/admin/img/no-photo.png') }}"
                          width="100%"
                          alt="Stonytrack"
                      />
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Right Side</h5>
              <small class="text-muted float-end">Right Side & Content</small>
            </div>
            <div class="card-body">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Plumbing Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="plumbing_service">
                          {!! $serviceContent->plumbing_service ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mt-5">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Elevator Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="elevator_escalator">
                          {!! $serviceContent->elevator_escalator ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mt-5">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Safety Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="safety_consult">
                      {!! $serviceContent->safety_consult ?? '' !!}
                    </textarea>
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
