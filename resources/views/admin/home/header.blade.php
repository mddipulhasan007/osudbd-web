@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> Header Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('header') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Upload Logo</h5>
              <small class="text-muted float-end">Site Logo Main</small>
            </div>
            <div class="card-body img-item-sec">
              <div class="row mb-5">
                  <label class="col-sm-2 col-form-label" for="formFile">Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="logo" id="formFile">
                    <div class="img-preview mt-3">
                      <img
                          id="preview"
                          loading="lazy"
                          src="{{ $header && $header->logo ? asset('storage/' . $header->logo) : asset('assets/admin/img/no-photo.png') }}"
                          width="100%"
                          alt="Osudbd"
                      />
                    </div>
                  </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Contact Email Set</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input name="contact_email" type="text" id="basic-icon-default-email" class="form-control" placeholder="contact@Osudbd.com"
                      aria-label="contact@Osudbd.com" aria-describedby="basic-icon-default-email2" value="{{ $header->contact_email ?? '' }}" />
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
              <h5 class="mb-0">Top Header</h5>
              <small class="text-muted float-end">Header Info Area</small>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input name="email" type="text" id="basic-icon-default-email" class="form-control" placeholder="example@gmail.com"
                        aria-label="example@gmail.com" aria-describedby="basic-icon-default-email2" value="{{ $header->email ?? '' }}" />
                      <span id="basic-icon-default-email2" class="input-group-text">stony@example.com</span>
                    </div>
                    <div class="form-text">You can use letters, numbers & periods</div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input name="phone" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="01xxxxxxxxx" aria-label="01xxxxxxxxx"
                        aria-describedby="basic-icon-default-phone2" value="{{ $header->phone ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Address</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                      <textarea name="address" id="basic-icon-default-message" class="form-control"
                        placeholder="75-76, Janata Housing"
                        aria-label="75-76, Janata Housing"
                        aria-describedby="basic-icon-default-message2">{{ $header->address ?? '' }}</textarea>
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
              <h5 class="mb-0">Social Link</h5>
              <small class="text-muted float-end">Header & Footer Socials Area</small>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Facebook</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bxl-facebook"></i></span>
                      <input name="facebook" type="text" id="basic-icon-default-email" class="form-control" placeholder="www.facebook.com"
                        aria-label="www.facebook.com" aria-describedby="basic-icon-default-email2" value="{{ $header->facebook ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Linkedin</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bxl-linkedin"></i></span>
                      <input name="linkedin" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="www.linkedin.com" aria-label="www.linkedin.com"
                        aria-describedby="basic-icon-default-phone2" value="{{ $header->linkedin ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">You Tube</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bxl-youtube"></i></span>
                      <input name="youtube" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="www.youtube.com" aria-label="www.youtube.com"
                        aria-describedby="basic-icon-default-phone2" value="{{ $header->youtube ?? '' }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Whatsapp</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bxl-whatsapp"></i></span>
                      <input name="whatsapp" type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="https://wa.me/8801997719933" aria-label="https://wa.me/8801997719933"
                        aria-describedby="basic-icon-default-phone2" value="{{ $header->whatsapp ?? '' }}" />
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
