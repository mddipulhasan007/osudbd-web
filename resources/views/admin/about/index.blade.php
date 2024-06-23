@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About/</span> About Content Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('saveAboutPage') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Top Breadcrumb Banner Image</h5>
              <small class="text-muted float-end">Breadcrumb Banner Image Upload</small>
            </div>
            <div class="card-body">
                <div class="row">
                  <label class="col-sm-8 col-form-label" for="formFile">Upload Banner Image</label>
                    <div class="col-sm-4">
                      <div class="row">
                        <label class="col-sm-6 col-form-label" for="">Select Banner Hide/Show</label>
                        <div class="col-sm-6">
                          <div class="input-group input-group-merge">
                            <select class="form-control custom-select" id="bdcmb_show_hide" name="bdcmb_show_hide" style="color:#00f3ff !important;">
                              <option value="block">Show</option>
                              <option value="none">Hide</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row mb-5">
                  <div class="col-sm-12">
                    <input class="form-control" type="file" name="bdcmb_banner_img" id="formFile">
                    <div class="img-preview mt-3">
                      <img
                          id="preview"
                          loading="lazy"
                          src="{{ $aboutPage && $aboutPage->bdcmb_banner_img ? asset('storage/' . $aboutPage->bdcmb_banner_img) : asset('assets/admin/img/no-photo.png') }}"
                          width="100%" height="300px"
                          alt="Osudbd"
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
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">About Left Side</h5>
              <small class="text-muted float-end"> About Left Side & Content</small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">About Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="left_about_txt" rows="2" >{!! $aboutPage->left_about_txt ?? '' !!}</textarea>
                  </div>
                </div>

                <small class="text-muted float-end"> About Skill Counts Add</small>
                <div class="row mb-3 mt-4">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Total Manufacture Add</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="total_projects_count" type="text" id="basic-icon-default-email" class="form-control" placeholder="Total Manufacture Count"
                        aria-label="Total Manufacture" aria-describedby="basic-icon-default-email2" value="{{ $aboutPage->total_projects_count }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Staff Members Add</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="staff_members_count" type="text" id="basic-icon-default-email" class="form-control" placeholder="Staff Members Count"
                        aria-label="Staff Members" aria-describedby="basic-icon-default-email2" value="{{ $aboutPage->staff_members_count }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Running of Manufacture</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="running_project_count" type="text" id="basic-icon-default-email" class="form-control" placeholder="Running of Project"
                        aria-label="Running of Project" aria-describedby="basic-icon-default-email2" value="{{ $aboutPage->running_project_count }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">District Experience</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="dist_exp_count" type="text" id="basic-icon-default-email" class="form-control" placeholder="District Experince"
                        aria-label="District Experince" aria-describedby="basic-icon-default-email2" value="{{ $aboutPage->dist_exp_count }}" />
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0"> About Right Side</h5>
              <small class="text-muted float-end"> About Right Side & Content</small>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                  <label class="col-sm-12 col-form-label" for="formFile">Upload Middle Img</label>
                  <div class="col-sm-12">
                    <input class="form-control" type="file" name="about_img" id="formFile">
                    <div class="img-preview mt-3">
                      <img
                          id="preview"
                          loading="lazy"
                          src="{{ $aboutPage && $aboutPage->about_img ? asset('storage/' . $aboutPage->about_img) : asset('assets/admin/img/no-photo.png') }}"
                          width="100%"
                          alt="Osudbd"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Integrity Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="integrity_txt">
                          {!! $aboutPage->integrity_txt ?? '' !!}
                        </textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <label class="col-sm-2 col-form-label" for="">Select Teams Hide/Show</label>
        <div class="col-sm-10">
          <div class="input-group input-group-merge">
            <select class="form-control custom-select" id="teams_show_hide" name="teams_show_hide" style="color:#00f3ff !important;">
              <option value="block">Show</option>
              <option value="none">Hide</option>
            </select>
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
