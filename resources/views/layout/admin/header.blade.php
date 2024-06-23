<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Osudbd - Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicon/favicon.ico') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('assets/admin/js/config.js') }}"></script>
  <!-- <script src="https://cdn.tiny.cloud/1/b9oxw0g8mo7sqcdnc1g9ta99tqdd9ve9izb9ttjsbdb7jul5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script> -->

  <style>
    li.menu-item.open ul.menu-sub li.active{
      background: #626262;
    }
    </style>
</head>

<body>
@php
$authUser = auth()->user();
@endphp
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
            <a href="/dashboard" class="app-brand-link">
                <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                    <path
                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                        id="path-1"></path>
                    <path
                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                        id="path-3"></path>
                    <path
                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                        id="path-4"></path>
                    <path
                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                        id="path-5"></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                            <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                            </mask>
                            <use fill="#696cff" xlink:href="#path-1"></use>
                            <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                            </g>
                            <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                            </g>
                        </g>
                        <g id="Triangle"
                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                            <use fill="#696cff" xlink:href="#path-5"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Osudbd</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <div data-i18n="Analytics">Visit Site</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Forms & Tables -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Appearence</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/header', 'admin/footer') ? 'active' : '' }}"> -->
                <!-- <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Site Settings</div>
                </a> -->
                <ul class="menu-sub">
                  <!-- @if(in_array($authUser->role_id,[1,3]))
                    <li class="menu-item {{ request()->is('admin/header') ? 'active' : '' }}">
                        <a href="{{ url('admin/header') }}" class="menu-link">
                            <div data-i18n="Vertical Form">Header</div>
                        </a>
                    </li>
                  @endif -->

{{--                    @if(in_array($authUser->role_id,[2,3]))--}}
{{--                        --}}
{{--                    @endif--}}
                  <!-- <li class="menu-item d-none">
                      <a href="{{ url('admin/menu') }}" class="menu-link">
                      <div data-i18n="Horizontal Form">Menu/Navbar</div>
                      </a>
                  </li> -->
                  <!-- <li class="menu-item d-none">
                      <a href="{{ url('admin/slider') }}" class="menu-link">
                      <div data-i18n="Horizontal Form">Sliders</div>
                      </a>
                  </li> -->
                  <!-- @if(in_array($authUser->role_id,[1,3]))
                    <li class="menu-item {{ request()->is('admin/footer') ? 'active' : '' }}">
                        <a href="{{ url('admin/footer') }}" class="menu-link">
                        <div data-i18n="Horizontal Form">Footer</div>
                        </a>
                    </li>
                  @endif -->
                </ul>
            <!-- </li> -->
          
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Banner Slider</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/banners') ? 'active' : '' }}">
                <a href="{{ url('admin/banners') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Sliders</div>
                </a>
            </li> -->
            <!-- Tables -->
            <!-- @if(in_array($authUser->role_id,[1,3]))
              <li class="menu-item {{ request()->is('admin/addnewbanner') ? 'active' : '' }}">
                  <a href="{{ url('admin/addnewbanner') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-table"></i>
                  <div data-i18n="Tables">Add New Slider</div>
                  </a>
              </li>
            @endif   -->

            <!-- <li class="menu-item d-none">
                <a href="{{ url('admin/setmail') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Mail Setting</div>
                </a>
            </li> -->

            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Home About/Service</span></li> -->
            <!-- Forms -->
            <!-- @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/aboutcontent') ? 'active' : '' }}">
                <a href="{{ url('admin/aboutcontent') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">About in Home</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('admin/servicecontent') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Service in Home</div>
                </a>
            </li> -->
            <!-- Tables -->
            <!-- <li class="menu-item {{ request()->is('admin/aboutpage') ? 'active' : '' }}">
                <a href="{{ url('admin/aboutpage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">About Page</div>
                </a>
            </li>
            @endif -->

            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Products & Services</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/services') ? 'active' : '' }}">
                <a href="{{ url('admin/services') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Services</div>
                </a>
            </li> -->
            <!-- Tables -->

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Our Products</span></li>
            <!-- Forms -->
            <li class="menu-item {{ request()->is('admin/products') ? 'active' : '' }}">
                <a href="{{ url('admin/products') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Products</div>
                </a>
            </li>
            <!-- Tables -->

            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addproduct') ? 'active' : '' }}">
                <a href="{{ url('admin/addproduct') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Product</div>
                </a>
            </li>
            @endif

            <li class="menu-item {{ request()->is('admin/productcategories') ? 'active' : '' }}">
                <a href="{{ url('admin/productcategories') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Manage Product Cat.</div>
                </a>
            </li>
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addproductcategory') ? 'active' : '' }}">
                <a href="{{ url('admin/addproductcategory') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add Product Category</div>
                </a>
            </li>
            @endif

            <li class="menu-item {{ request()->is('admin/producttypes') ? 'active' : '' }}">
                <a href="{{ url('admin/producttypes') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Manage Product Type </div>
                </a>
            </li>
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addproducttype') ? 'active' : '' }}">
                <a href="{{ url('admin/addproducttype') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add Product Type </div>
                </a>
            </li>
            @endif

            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Manufactures & Category</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/projects') ? 'active' : '' }}">
                <a href="{{ url('admin/projects') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Manufacture</div>
                </a>
            </li> -->
            <!-- Tables -->
            <!-- @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addproject') ? 'active' : '' }}">
                <a href="{{ url('admin/addproject') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Manufacture</div>
                </a>
            </li>
            @endif

            <li class="menu-item {{ request()->is('admin/projectcategories') ? 'active' : '' }}">
                <a href="{{ url('admin/projectcategories') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Manage P. Category</div>
                </a>
            </li>
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addprojectcategory') ? 'active' : '' }}">
                <a href="{{ url('admin/addprojectcategory') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New P. Category</div>
                </a>
            </li>
            @endif -->

            <li class="menu-header small text-uppercase"><span class="menu-header-text">PARTNERS / BRANDS</span></li>
            <!-- Forms -->
            <li class="menu-item {{ request()->is('admin/brands') ? 'active' : '' }}">
                <a href="{{ url('admin/brands') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Brands Logo</div>
                </a>
            </li>
            <!-- Tables -->
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addnewbrandlogo') ? 'active' : '' }}">
                <a href="{{ url('admin/addnewbrandlogo') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Brand Logo</div>
                </a>
            </li>
            @endif

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Our Teams</span></li>
            <!-- Forms -->
            <li class="menu-item {{ request()->is('admin/teams') ? 'active' : '' }}">
                <a href="{{ url('admin/teams') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Team</div>
                </a>
            </li>
            <!-- Tables -->
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addnewteam') ? 'active' : '' }}">
                <a href="{{ url('admin/addnewteam') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Team Memb.</div>
                </a>
            </li>
            @endif

            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Media & News</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/newses') ? 'active' : '' }}">
                <a href="{{ url('admin/newses') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage News</div>
                </a>
            </li> -->
            
            <!-- Tables -->
            <!-- @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addnewnews') ? 'active' : '' }}">
                <a href="{{ url('admin/addnewnews') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New News</div>
                </a>
            </li>
            @endif -->

            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Our Videos</span></li> -->
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/videos') ? 'active' : '' }}">
                <a href="{{ url('admin/videos') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Videos</div>
                </a>
            </li> -->
            
            <!-- Tables -->
            <!-- @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/addnewvideo') ? 'active' : '' }}">
                <a href="{{ url('admin/addnewvideo') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Video</div>
                </a>
            </li>
            @endif -->

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Users Setting</span>
            </li>
            <li class="menu-item {{ request()->is('admin/settings') ? 'active' : '' }}">
                <a href="{{ url('admin/settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Profile Setting</div>
                </a>
            </li>
            @if(in_array($authUser->role_id,[1,3]))
            <li class="menu-item {{ request()->is('admin/users/create') ? 'active' : '' }}">
                <a href="{{ url('admin/users/create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Create New User">Create New User</div>
                </a>
            </li>
            @endif
            <li class="menu-item {{ request()->is('admin/users') ? 'active' : '' }}">
                <a href="{{ url('admin/users') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Create New User">All User</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Notices</span></li>
            <!-- Forms -->
            <!-- <li class="menu-item {{ request()->is('admin/notices') ? 'active' : '' }}">
                <a href="{{ url('admin/notices') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Manage Notice</div>
                </a>
            </li> -->
            <!-- Tables -->
            @if(in_array($authUser->role_id,[1,3]))
            <!-- <li class="menu-item {{ request()->is('admin/addnewnotice') ? 'active' : '' }}">
                <a href="{{ url('admin/addnewnotice') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Add New Notice</div>
                </a>
            </li> -->
            @endif
            <!-- Tables -->
            <!-- <li class="menu-item {{ request()->is('admin/contacts') ? 'active' : '' }}">
                <a href="{{ url('admin/contacts') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Contact Messages</div>
                </a>
            </li> -->

            <!-- Tables -->
            <!-- <li class="menu-item border-top">
                <a href="http://Osudbd.com/dbbackup/stonytra_db.zip" class="menu-link">
                <i class="menu-icon tf-icons bx bx-download"></i>
                <div data-i18n="Tables"> Database Download</div>
                </a>
            </li> -->
          </ul>
        </aside>
        <!-- / Menu -->





          <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="#"
                  data-icon="octicon-star" data-size="large" data-show-count="true"
                  aria-label="Osudbd">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('assets/admin/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{ asset('assets/admin/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Osudbd</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li class="d-none">
                    <a class="dropdown-item" href="pages-account-settings-account.php">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{url('admin/settings')}}">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Accont Settings</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li> -->
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                      </a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->
