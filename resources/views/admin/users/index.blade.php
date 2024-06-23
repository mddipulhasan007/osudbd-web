@include('layout.admin.header')

@php
$authUser = auth()->user();
@endphp

<div class="container-xxl mb-5">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
           <table class="table table-responsive mb-5">
               <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
               </thead>
               <tbody>
               @if(!empty($users) && count($users)>0)
                   @foreach($users as $user)
                       <tr>
                           <td>{{$user->name??""}}</td>
                           <td>{{$user->email??""}}</td>
                           <td>{{\App\Models\User::ROLES[$user->role_id]??"N/A"}}</td>
                           <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    @if (auth()->user()->role_id == 1)
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            @if ($user->id != 1)
                                                <a class="dropdown-item text-danger" href="{{ route('users.delete', ['user' => $user->id]) }}">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </td>
                       </tr>
                   @endforeach
               @else
                   <tr>
                       <td colspan="3" class="text-center">Not found!</td>
                   </tr>
               @endif

               </tbody>
           </table>
            <!-- Register Card -->
        </div>
    </div>
</div>

@include('layout.admin.footer')
