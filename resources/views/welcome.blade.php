<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    
    <div id="page-container" class="page-header-dark main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold text-dual tracking-wide" href="index.html">
              Dash<span class="opacity-75">mix</span>
              <span class="fw-normal">Boxed</span>
            </a>
            <!-- END Logo -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div>
            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary ms-2" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle"></i>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="rounded-top fw-semibold text-white bg-image" style="background-image: url('assets/media/photos/photo20.jpg');">
                  <div class="p-3 bg-black-50 rounded-top">
                    <div class="d-flex align-items-center">
                      <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar3.jpg" alt="">
                      <div class="ms-3">
                        <a class="text-white fw-semibold" href="be_pages_generic_profile.html">Carol Ray</a>
                        <div class="fs-sm text-white-75">c.ray@example.com</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-globe opacity-50 me-1"></i>
                      Projects
                    </div>
                    <span class="badge rounded-pill bg-primary">3</span>
                  </a>
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-sync-alt opacity-50 me-1"></i>
                      Servers
                    </div>
                    <span class="badge rounded-pill bg-primary">1</span>
                  </a>
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-users opacity-50 me-1"></i>
                      Customers
                    </div>
                    <span class="badge rounded-pill bg-primary">15</span>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fa fa-fw fa-user-circle opacity-50 me-1"></i>
                    Profile
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fab fa-fw fa-paypal opacity-50 me-1"></i>
                    Billing
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fa fa-fw fa-wrench opacity-50 me-1"></i>
                    Preferences
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center mb-0" href="op_auth_signin.html">
                    <i class="fa fa-fw fa-sign-out-alt text-danger me-1"></i>
                    Log Out
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-sidebar-dark">
          <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search your projects.." id="page-header-search-input" name="page-header-search-input">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-sidebar-dark">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Navigation -->
        <div class="bg-sidebar-dark">
          <div class="content">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none push">
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn w-100 btn-primary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block push">
              <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="/">
                    <i class="nav-main-link-icon fa fa-compass"></i>
                    <span class="nav-main-link-name">Social Media</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{route('authentications')}}">
                    <i class="nav-main-link-icon fa fa-search"></i>
                    <span class="nav-main-link-name">Auth</span>
                  </a>
                </li>
                
            
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
        <!-- END Navigation -->
       @yield('hero')

        <!-- Page Content -->
        <div class="content">
          <!-- Dummy content -->


            @yield('content')
          
          <!-- END Dummy content -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="footer-static bg-body-extra-light">
        <div class="content py-4">
          <!-- Footer Navigation -->
       
          <!-- END Footer Navigation -->

          <!-- Footer Copyright -->
          <div class="row fs-sm pt-4">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
              Created   <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://instagram.com/feelit.qa" target="_blank">Ismail Taibi</a>
            </div>
            
          </div>
          <!-- END Footer Copyright -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>


      <!-- jQuery (required for BS Notify plugin) -->
      <script src="assets/js/lib/jquery.min.js"></script>
      <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
      <!-- Page JS Plugins -->
      <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
  
      <!-- Page JS Helpers (BS Notify Plugin) -->
      <script>Dashmix.helpersOnLoad(['jq-notify']);</script>


    <script>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            Dashmix.helpers('jq-notify', {type: 'info', icon: 'fa fa-check me-1', message: '{{$error}}'});
            @endforeach
        @endif
    </script>

@stack('scripts')
  </body>
</html>
