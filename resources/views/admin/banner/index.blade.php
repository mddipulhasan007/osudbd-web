@include('layout.admin.header')

@php
$authUser = auth()->user();
@endphp
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All /</span> Banner Slider Manage</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="card-header">Manage Banner Slider</h5>
      @if(in_array($authUser->role_id,[1,3]))
      <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/addnewbanner') }}">Add New Banner Slider</a></small>
      @endif
    </div>
      <div class="table-responsive text-nowrap" style="min-height:300px;">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Banner Image</th>
              <th>Main Title</th>
              <th>Caption Title</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($banner as $ban)
                <tr>
                    <td><strong>{{ $ban->id }}</strong></td>
                    <td>
                        <img width="60" src="{{ asset('storage/' . $ban->banner_image) }}" alt="image" class="square" />
                    </td>
                    <td><strong>{{ $ban->main_title }}</strong></td>
                    <td><strong>{{ $ban->caption_title }}</strong></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            @if(in_array($authUser->role_id,[1,3]))
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('editbanner', ['id' => $ban->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="{{ route('removebanner', ['id' => $ban->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
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