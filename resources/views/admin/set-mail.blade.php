@include('layout.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Contact/</span> Contact Email Setting</h4>

    <!-- Basic Layout & Basic with Icons -->
    <h2>Set Email</h2>

    <form method="post" action="{{ route('addmail') }}">
        @csrf

        <div class="form-group mb-4">
            <label>Email Set</label>
            <input type="text" class="form-control" name="email" required placeholder="admin@Osudbd.com" value="{{ $setemail ? $setemail->email : '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
     

  </div>
  <!-- / Content -->


@include('layout.admin.footer')