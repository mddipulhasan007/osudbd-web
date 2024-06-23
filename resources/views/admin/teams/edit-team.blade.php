@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All/</span> Edit Team</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('editteam', ['id' => $team->id]) }}" enctype="multipart/form-data">
    @csrf <!-- CSRF token for security -->

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit Team</h5>
              <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/teams') }}">Manage Teams</a></small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Team Member Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="name" type="text" id="basic-icon-default-email" class="form-control" placeholder="Team Member Name"
                        aria-label="the title" aria-describedby="basic-icon-default-email2" value="{{ $team->name }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Qualification</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="qualification" type="text" id="basic-icon-default-email" class="form-control" placeholder="Enter qualification"
                        aria-label="the title" aria-describedby="basic-icon-default-email2" value="{{ $team->qualification }}" />
                    </div>
                  </div>
                </div>
                <div class="row mb-5 mt-5">
                  <label class="col-sm-2 col-form-label" for="formFile">Upload Profile Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="profile_image" id="formFile">
                    <div class="brand-logo img-preview mt-3">
                        <img
                            id="preview"
                            loading="lazy"
                            src="{{ $profilePath ? asset('storage/' . $profilePath) : asset('assets/admin/img/no-photo.png') }}"
                            width="100%"
                            alt="Osudbd"
                        />
                    </div>
                </div>
                </div>
                <div class="row">
                  <label class="col-sm-12 form-label" for="basic-icon-default-message">Short Description</label>
                  <div class="col-sm-12">
                        <textarea id="mytextarea" name="short_content">{{ $team->short_content }}</textarea>
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