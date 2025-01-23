<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('SEODash/src/assets/images/logos/seodashlogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('SEODash/src/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('SEODash/src/assets/images/logos/logo-light.svg')}}" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('/admin/products') }}" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link"{{ url('/admin/orders') }} aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Orders</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="#" target="_blank"
                class="btn btn-primary me-2"><span class="d-none d-md-block">Check Pro Version</span> <span class="d-block d-md-none">Pro</span></a>
              <a href="#" target="_blank"
                class="btn btn-success"><span class="d-none d-md-block">Download Free </span> <span class="d-block d-md-none">Free</span></a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('SEODash/src/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      @yield('content')

      {{-- <div class="container-fluid">
        <div class="row">

        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View by page title and screen class</h5>
              <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0">
                      <th scope="col" class="ps-0">Page Title</th>
                      <th scope="col" >Link</th>
                      <th scope="col" class="text-center">Pageviews</th>
                      <th scope="col" class="text-center">Page Value</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Welcome to our
                          website</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
                      </td>
                      <td class="text-center fw-medium">18,456</td>
                      <td class="text-center fw-medium">$2.40</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Modern Admin
                          Dashboard Template</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
                      </td>
                      <td class="text-center fw-medium">17,452</td>
                      <td class="text-center fw-medium">$0.97</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Explore our
                          product catalog</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
                      </td>
                      <td class="text-center fw-medium">12,180</td>
                      <td class="text-center fw-medium">$7,50</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Comprehensive
                          User Guide</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
                      </td>
                      <td class="text-center fw-medium">800</td>
                      <td class="text-center fw-medium">$5,50</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium border-0">
                        <span class="table-link1 text-truncate d-block">Check out our
                          services</span>
                      </th>
                      <td class="border-0">
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
                      </td>
                      <td class="text-center fw-medium border-0">1300</td>
                      <td class="text-center fw-medium border-0">$2,15</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> --}}


      </div>
    </div>
  </div>
  <script src="{{ asset('SEODash/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('SEODash/src/assets/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
