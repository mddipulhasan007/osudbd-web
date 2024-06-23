@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> Slider Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('slider') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Upload Sliders</h5>
              <small class="text-muted float-end">Main Slider Add</small>
            </div>
            <div class="card-body slider-area img-item-sec">
              <div class="row mb-5">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-sm-3 col-form-label" for="formFile">Upload Slider 1</label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file" name="slider1" id="formFile">
                      <div class="img-preview mt-3">
                        <img id="preview" loading="lazy" src="{{ $slider1->image_path ? asset('storage/' . $slider1->image_path) : asset('assets/admin/img/no-photo.png') }}" alt="Osudbd">
                        <a class="remove_slider_item" id="remove_slider_item1" href="javascript:void(0)"><i class="bx bxs-message-square-x"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Caption Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="caption_title1" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 1st Text Caption Title"
                          aria-label="caption-title" aria-describedby="basic-icon-default-email2" value="{{ $slider1->caption_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Main Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="main_title1" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 2nd Text Main Title"
                          aria-label="main-title" aria-describedby="basic-icon-default-email2" value="{{ $slider1->main_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 1 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="contact_url1" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/contact-us"
                          aria-label="contact" aria-describedby="basic-icon-default-email2" value="{{ $slider1->contact_url }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 2 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="services_url1" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/services"
                          aria-label="services" aria-describedby="basic-icon-default-email2" value="{{ $slider1->services_url }}" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-sm-3 col-form-label" for="formFile">Upload Slider 1</label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file" name="slider2" id="formFile">
                      <div class="img-preview mt-3">
                      <img id="preview" loading="lazy" src="{{ $slider2->image_path ? asset('storage/' . $slider2->image_path) : asset('assets/admin/img/no-photo.png') }}" alt="Osudbd">
                        <a class="remove_slider_item" id="remove_slider_item2" href="javascript:void(0)"><i class="bx bxs-message-square-x"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Caption Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="caption_title2" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 1st Text Caption Title"
                          aria-label="caption-title" aria-describedby="basic-icon-default-email2" value="{{ $slider2->caption_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Main Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="main_title2" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 2nd Text Main Title"
                          aria-label="main-title" aria-describedby="basic-icon-default-email2" value="{{ $slider2->main_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 1 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="contact_url2" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/contact-us"
                          aria-label="contact" aria-describedby="basic-icon-default-email2" value="{{ $slider2->contact_url }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 2 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="services_url2" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/services"
                          aria-label="services" aria-describedby="basic-icon-default-email2" value="{{ $slider2->services_url }}" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-sm-3 col-form-label" for="formFile">Upload Slider 1</label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file" name="slider3" id="formFile">
                      <div class="img-preview mt-3">
                      <img id="preview" loading="lazy" src="{{ $slider3->image_path ? asset('storage/' . $slider3->image_path) : asset('assets/admin/img/no-photo.png') }}" alt="Osudbd">
                        <a class="remove_slider_item" id="remove_slider_item3" href="javascript:void(0)"><i class="bx bxs-message-square-x"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Caption Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="caption_title3" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 1st Text Caption Title"
                          aria-label="caption-title" aria-describedby="basic-icon-default-email2" value="{{ $slider3->caption_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Main Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="main_title3" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 2nd Text Main Title"
                          aria-label="main-title" aria-describedby="basic-icon-default-email2" value="{{ $slider3->main_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 1 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="contact_url3" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/contact-us"
                          aria-label="contact" aria-describedby="basic-icon-default-email2" value="{{ $slider3->contact_url }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 2 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="services_url3" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/services"
                          aria-label="services" aria-describedby="basic-icon-default-email2" value="{{ $slider3->services_url }}" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-sm-3 col-form-label" for="formFile">Upload Slider 1</label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file" name="slider4" id="formFile">
                      <div class="img-preview mt-3">
                        <img id="preview" loading="lazy" src="{{ $slider4->image_path ? asset('storage/' . $slider4->image_path) : asset('assets/admin/img/no-photo.png') }}" alt="Osudbd">
                        <a class="remove_slider_item" id="remove_slider_item4" href="javascript:void(0)"><i class="bx bxs-message-square-x"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Caption Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="caption_title4" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 1st Text Caption Title"
                          aria-label="caption-title" aria-describedby="basic-icon-default-email2" value="{{ $slider4->caption_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Main Title</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="main_title4" type="text" id="basic-icon-default-email" class="form-control" placeholder="Slider 2nd Text Main Title"
                          aria-label="main-title" aria-describedby="basic-icon-default-email2" value="{{ $slider4->main_title }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 1 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="contact_url4" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/contact-us"
                          aria-label="contact" aria-describedby="basic-icon-default-email2" value="{{ $slider4->contact_url }}" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Button 2 URL</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-text"></i></span>
                        <input name="services_url4" type="text" id="basic-icon-default-email" class="form-control" placeholder="https://Osudbd.com/services"
                          aria-label="services" aria-describedby="basic-icon-default-email2" value="{{ $slider4->services_url }}" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->
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

<script>
    // Function to remove the slider item
    function removeSliderItem(sliderNumber) {
        // Remove the file input value
        var sliderInput = document.getElementById(`slider${sliderNumber}`);
        if (sliderInput) {
            sliderInput.value = '';
        }

        // Update the image preview to show the default image
        var previewImage = document.getElementById(`preview${sliderNumber}`);
        if (previewImage) {
            previewImage.src = '{{ asset("assets/admin/img/no-photo.png") }}';
        }
    }

    // Attach click event listeners for each remove button after the window has loaded
    window.addEventListener('load', function() {
        document.getElementById('remove_slider_item1').addEventListener('click', function() {
            removeSliderItem(1);
        });

        document.getElementById('remove_slider_item2').addEventListener('click', function() {
            removeSliderItem(2);
        });

        document.getElementById('remove_slider_item3').addEventListener('click', function() {
            removeSliderItem(3);
        });

        document.getElementById('remove_slider_item4').addEventListener('click', function() {
            removeSliderItem(4);
        });

        // Add similar code for additional sliders...
    });
</script>


  @include('layout.admin.footer')
