@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> Footer Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('footer') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Upload Footer Logo</h5>
              <small class="text-muted float-end">Site Logo Footer & Content</small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row mb-5">
                  <label class="col-sm-4 col-form-label" for="formFile">Upload Logo</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="file" name="logo" id="formFile">
                    <div class="img-preview mt-3">
                      <img
                        id="preview"
                        loading="lazy"
                        src="{{ $footer && $footer->logo ? asset('storage/' . $footer->logo) : asset('assets/admin/img/no-photo.png') }}"
                        width="100%"
                        alt="Stonytrack"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 form-label" for="basic-icon-default-message">Footer About Content</label>
                 
                </div>
                <div class="row">
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="about_txt">{{ $footer->about_txt ?? '' }}</textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->
        <div class="col--md-12">
          <div class="card mb-4 d-none">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Top Footer Services Menu Link</h5>
              <small class="text-muted float-end">Footer Services Right Menu Area</small>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Fire Detection & Alarm System</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url1" type="text" id="basic-icon-default-email" class="form-control" placeholder="http://stonytrack.com/link"
                        aria-label="http://stonytrack.com/link" aria-describedby="basic-icon-default-email2" value="{{ $footer->s_menu_url1 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Fire Protection System</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url2" type="text" id="basic-icon-default-email" class="form-control" placeholder="http://stonytrack.com/link"
                        aria-label="http://stonytrack.com/link" aria-describedby="basic-icon-default-email2" value="{{ $footer->s_menu_url2 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Fire Safety Consultancy</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url3" type="text" id="basic-icon-default-email" class="form-control" placeholder="http://stonytrack.com/link"
                        aria-label="http://stonytrack.com/link" aria-describedby="basic-icon-default-email2" value="{{ $footer->s_menu_url3 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 form-label" for="basic-icon-default-phone">HVAC System</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url4" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->s_menu_url4 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 form-label" for="basic-icon-default-phone">Electrical Sub-Station</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url5" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->s_menu_url5 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 form-label" for="basic-icon-default-phone">Electrical Generator</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="s_menu_url6" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->s_menu_url6 ?? '' }}" />
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
              <h5 class="mb-0">Bottom Footer Copy Right Content & Link</h5>
              <small class="text-muted float-end"> Footer Copy Right Content & Menu Link Area</small>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Copyright Content</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                      <textarea name="copyright_txt" id="basic-icon-default-message" class="form-control"
                        placeholder="Content Here"
                        aria-label="Content Here"
                        aria-describedby="basic-icon-default-message2">{{ $footer->copyright_txt ?? '' }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">About</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="foo_menu_url1" type="text" id="basic-icon-default-email" class="form-control" placeholder="http://stonytrack.com/link"
                        aria-label="http://stonytrack.com/link" aria-describedby="basic-icon-default-email2" value="{{ $footer->foo_menu_url1 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Our Gallery</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="foo_menu_url2" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->foo_menu_url2 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Terms & Conditions</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="foo_menu_url3" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->foo_menu_url3 ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Privacy & Policy</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="foo_menu_url4" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="http://stonytrack.com/link" aria-label="http://stonytrack.com/link"
                        aria-describedby="basic-icon-default-phone2" value="{{ $footer->foo_menu_url4 ?? '' }}" />
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
