@include('layout.admin.header')
@php
$authUser = auth()->user();
@endphp
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home /</span> Brands/Partners Manage</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="card-header">Manage Brands / Partners</h5>
      @if(in_array($authUser->role_id,[1,3]))
      <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/addnewbrandlogo') }}">Add New Logo</a></small>
      @endif
    </div>
      <div class="table-responsive text-nowrap" style="min-height:300px;">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Brands Logo</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($brands as $brand)
                <tr>
                    <td><strong>{{ $brand->id }}</strong></td>
                    <td>
                        <img width="60" src="{{ asset('storage/' . $brand->logo) }}" alt="Brand Logo" class="rounded-circle" />
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            @if(in_array($authUser->role_id,[1,3]))
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('editBrandLogo', ['id' => $brand->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="{{ route('removeBrandLogo', ['id' => $brand->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  <!-- / Content -->

  @include('layout.admin.footer')