@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All/</span> Add New Product</h4>

    <!-- Basic Layout & Basic with Icons -->
    <h2>Add Category</h2>

    <form method="post" action="{{ route('addcategory') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-5">
            <label for="name">Category New Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
        </div>

        <div class="row mb-5 mt-5">
          <label class="col-sm-2 col-form-label" for="formFile">Upload Category Image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="cat_image" id="formFile" onchange="previewImage()" required>
                <div class="brand-logo img-preview mt-3">
                    <img
                        id="preview"
                        loading="lazy"
                        src="{{ asset('assets/admin/img/no-photo.png') }}"
                        width="200" height="200"
                        alt="Osudbd"
                    />
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>
  <!-- / Content -->


  <script>
  function previewImage() {
      var input = document.getElementById('formFile');
      var preview = document.getElementById('preview');
      var reader = new FileReader();

      reader.onload = function (e) {
          preview.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  }
  </script>

@include('layout.admin.footer')