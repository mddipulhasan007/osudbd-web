@include('layout.admin.header')
@php
$authUser = auth()->user();
@endphp
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All /</span> Media & News Manage</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="card-header">Manage Videos</h5>
      @if(in_array($authUser->role_id,[1,3]))
      <small class="text-muted float-end"><a class="btn btn-primary" href="{{ url('admin/addnewvideo') }}">Add New Video</a></small>
      @endif
    </div>
      <div class="table-responsive text-nowrap" style="min-height:300px;">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Video Title</th>
              <th>Video Enbed URL</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($videos as $video)
                <tr>
                    <td><strong>{{ $video->id }}</strong></td>
                    <td><strong>{{ $video->video_title }}</strong></td>
                    <td>
                      {{ $video->video_iframe }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            @if(in_array($authUser->role_id,[1,3]))
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('editvideo', ['id' => $video->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="{{ route('removevideo', ['id' => $video->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
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