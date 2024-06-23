@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home/</span> About Content Settings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('saveAboutContent') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Home About Left Side</h5>
              <small class="text-muted float-end">Home About Left Side & Content</small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">About Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="left_about_txt" rows="2" >{!! $aboutContent->left_about_txt ?? '' !!}</textarea>
                  </div>
                </div>
                <div class="row mb-3 mt-4">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Read More Text</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="read_more_text" type="text" id="basic-icon-default-email" class="form-control" placeholder="Read More"
                        aria-label="Read More" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->read_more_text }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Read More URL</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="read_more_url" type="text" id="basic-icon-default-email" class="form-control" placeholder="Read More url"
                        aria-label="Read More url" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->read_more_url }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Bottom Text 1</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="bottom_text_1" type="text" id="basic-icon-default-email" class="form-control" placeholder="Bottom Text 1"
                        aria-label="Bottom text 1" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->bottom_text_1 }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Bottom Text 2</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="bottom_text_2" type="text" id="basic-icon-default-email" class="form-control" placeholder="Bottom Text 2"
                        aria-label="Bottom Text 2" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->bottom_text_2 }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Bottom Text 3</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="bottom_text_3" type="text" id="basic-icon-default-email" class="form-control" placeholder="Bottom Text 3"
                        aria-label="Bottom Text 3" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->bottom_text_3 }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Bottom Text 4</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="bottom_text_4" type="text" id="basic-icon-default-email" class="form-control" placeholder="Bottom Text 4"
                        aria-label="Bottom Text 4" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->bottom_text_4 }}" />
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
              <h5 class="mb-0">Home About Right Side</h5>
              <small class="text-muted float-end">Home About Right Side & Content</small>
            </div>
            <div class="card-body">
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">About Values Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="right_values_txt">
                        {!! $aboutContent->right_values_txt ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mb-3 mt-4">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Safety Text</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="safety_text" type="text" id="basic-icon-default-email" class="form-control" placeholder="Safety Text"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->safety_text }}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Safety Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="safety_txt">
                          {!! $aboutContent->safety_txt ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mb-3 mt-4">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Service Text</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="service_text" type="text" id="basic-icon-default-email" class="form-control" placeholder="Service Text"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->service_text }}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Service Content</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="service_txt">
                          {!! $aboutContent->service_txt ?? '' !!}
                        </textarea>
                  </div>
                </div>
                <div class="row mb-3 mt-4">
                  <label class="col-sm-4 col-form-label" for="basic-icon-default-email">Integrity Text</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="integrity_text" type="text" id="basic-icon-default-email" class="form-control" placeholder="Integrity Text"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="{{ $aboutContent->integrity_text }}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Integrity Content</label>
                  <div class="col-sm-12">
                    <textarea id="mytextarea" name="integrity_txt">
                      {!! $aboutContent->integrity_txt ?? '' !!}
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

  

  @include('layout.admin.footer')
