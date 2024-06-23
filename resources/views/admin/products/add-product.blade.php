@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All/</span> Add New Product</h4>

    <!-- Basic Layout & Basic with Icons -->
    <form method="post" action="{{ route('addproduct') }}" enctype="multipart/form-data">
      @csrf <!-- CSRF token for security -->

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add Product</h5>
              <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/products') }}">Manage Products</a></small>
            </div>
            <div class="card-body img-item-sec">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Product Title</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="title" type="text" id="basic-icon-default-email" class="form-control" placeholder="The Title"
                        aria-label="the title" aria-describedby="basic-icon-default-email2" value="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Product Content</label>
                  <div class="col-sm-10">
                        <textarea id="mytextarea" name="content" >Content here...</textarea>
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
                                alt="Osudbd"
                            />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Squ Number</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="squ_no" type="number" id="basic-icon-default" class="form-control" placeholder="squ number"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Quantity</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="qty" type="number" id="basic-icon-default" class="form-control" placeholder="Quantity"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" required />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Company name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="company_name" type="text" id="basic-icon-default" class="form-control" placeholder="Company name"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Reqular price</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="regular_price" type="number" id="basic-icon-default" class="form-control" placeholder="regular price"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" required />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Offer price</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="offer_price" type="number" id="basic-icon-default" class="form-control" placeholder="Offer price"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default">Offer percent</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-text"></i></span>
                      <input name="offer_percent" type="number" id="basic-icon-default" class="form-control" placeholder="Offer percent"
                        aria-label="" aria-describedby="basic-icon-default-email2" value="" />
                    </div>
                  </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="category_id">Choose Category</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select class="form-control custom-select" id="category_id" name="category_id" style="color:#00f3ff !important;">
                                @foreach ($productcategories as $productcategory)
                                    <option value="{{ $productcategory->id }}">{{ $productcategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="type_id">Choose Product Type</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select class="form-control custom-select" id="type_id" name="type_id" style="color:#00f3ff !important;">
                                @foreach ($producttypes as $producttype)
                                    <option value="{{ $producttype->id }}">{{ $producttype->name }}</option>
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