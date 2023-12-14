<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admini</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{url('/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('/images/logo.png')}}" />
</head>

<body>
  <!--<div class="row" id="proBanner">
    <div class="col-12">
      <span class="d-flex align-items-center purchase-pop">
        <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
        <a href="https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
        <i class="typcn typcn-delete-outline" id="bannerClose"></i>
      </span>
    </div>
  </div>-->
  <div class="containescroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="#"><img src="{{('/images/Logo.jpg')}}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="{{('/images/Logo.jpg')}}" width="3500px" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile" /> 
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-user-status dropdown">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="typcn typcn-power-outline btn-icon-append"></i>Logout</a>
                </form>
            </li>
        </ul>
    </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
           
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">request...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">request...</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">request...</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">request...</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">request...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">request...</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="typcn typcn-compass menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="typcn typcn-globe-outline menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html">
              <i class="typcn typcn-mortar-board menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <h3 style="margin-left:10px;padding:10px; background:orangered; color:white;">LISTE DE PRESENCE</h3>
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive col-md-12 pl-0">
                  <table class="table table-striped project-orders-table" style="padding-left: 0px;">
                    <thead>
                      <tr>
                        <th>FONCTIONS</th>
                        <th>NOMS</th>
                        <th>HEURES DEBUTS<i class=" typcn typcn-watch btn-icon-append" 
                        style="color:orangered; font-size:23px;"></i></th>
                        <th>HEURES FINS<i class=" typcn typcn-watch btn-icon-append" 
                        style="color:orangered; font-size:23px;"></i></th>
                        <th>OBSERVATIONS</th>
                        <th>
                          <form action="" method="get" style="width:35px;">
                            @csrf 
                            <input type="date"name="begin"
                                 style="width:80px; font-size:10px;"> à
                            <input type="date"name="end"
                                 style="width:80px; font-size:10px;">
                            <input type="submit" value="ok"
                                 style="width:40px;font-size:12px;">
                          </form>
                        </th>
                      </tr>
                    </thead>
                    <tbody>@foreach ($horaire as $Horaires)
                      <tr>
                        <td>{{$Horaires->fonctionUser}}</td>
                        <td>{{$Horaires->nameUser}}</td>
                        <td>{{$Horaires->debut}}</td>
                        <td>{{$Horaires->fin}}</td>
                        <td>{{$Horaires->observation}}</td>
                        <td></td>
                        <td></td><td></td><td></td><td></td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/dashboard/{{{$Horaires->idUser}}}"  class="btn btn-success btn-sm btn-icon-text mr-3">
                              DETAILS<i class="typcn typcn-eye-outline btn-icon-append"></i>
                            </a> 
                          </div></td>
                        
                      </tr>@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
          <div class="col-xl-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body border-bottom">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">LES STATS</h6>
                  <div class="dropdown">
                    <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 30 days
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="javascript:;">Action</a>
                      <a class="dropdown-item" href="javascript:;">Another action</a>
                      <a class="dropdown-item" href="javascript:;">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <canvas id="sales-chart-c" class="mt-2"></canvas>
                <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-muted">Gross Sales</p>
                    <h5>492</h5>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success mb-0">0.5%</p>
                      <i class="typcn typcn-arrow-up-thick text-success"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-muted">Purchases</p>
                    <h5>87k</h5>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success mb-0">0.8%</p>
                      <i class="typcn typcn-arrow-up-thick text-success"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-muted">Tax Return</p>
                    <h5>882</h5>
                    <div class="d-flex align-items-baseline">
                      <p class="text-danger mb-0">-04%</p>
                      <i class="typcn typcn-arrow-down-thick text-danger"></i>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="dropdown">
                    <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 7 days
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="javascript:;">Action</a>
                      <a class="dropdown-item" href="javascript:;">Another action</a>
                      <a class="dropdown-item" href="javascript:;">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                  </div>
                  <p class="mb-0">overview</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card newsletter-card bg-gradient-warning">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                      <h5 class="mb-3 text-white">Envoyé un mail</h5>
                      <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                        <div class="form-group mb-2 w-100">
                          <input type="text" class="form-control" placeholder="email address">
                        </div>
                        <a href="mailto:contact@example.com">Subscribe</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 stretch-card">
                <div class="card profile-card bg-gradient-primary">
                  <div class="card-body">
                    <div class="row align-items-center h-100">
                      <div class="col-md-4">
                        <figure class="avatar mx-auto mb-4 mb-md-0">
                          <img src="images/faces/face20.jpg" alt="avatar">
                        </figure>
                      </div>
                      <div class="col-md-8">
                        <h5 class="text-white text-center text-md-left">Phoebe Kennedy</h5>
                        <p class="text-white text-center text-md-left">kennedy@gmail.com</p>
                        <div class="d-flex align-items-center justify-content-between info pt-2">
                          <div>
                            <p class="text-white font-weight-bold">Birth date</p>
                            <p class="text-white font-weight-bold">Birth city</p>
                          </div>
                          <div>
                            <p class="text-white">16 Sep 2019</p>
                            <p class="text-white">Netherlands</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body border-bottom">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Sales statistics</h6>
                  <div class="dropdown">
                    <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 7 days
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="javascript:;">Action</a>
                      <a class="dropdown-item" href="javascript:;">Another action</a>
                      <a class="dropdown-item" href="javascript:;">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <canvas id="sales-chart-d" height="320"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div>
                    <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
                    <h1 class="mb-0">8742</h1>
                  </div>
                  <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                </div>
                <canvas id="expense-chart" height="80"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div>
                    <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
                    <h1 class="mb-0">47,840</h1>
                  </div>
                  <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                </div>
                <canvas id="budget-chart" height="80"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div>
                    <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
                    <h1 class="mb-0">$7,243</h1>
                  </div>
                  <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <canvas id="balance-chart" height="80"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <h3 style="margin-left:10px; padding:10px; background:orangered; color:white;"><i class="typcn typcn-home-outline btn-icon-append"></i>LISTE DE MEMBRE ACTIF</h3>
          <div class="col-md-12">
            <div class="card">
              <div class="table-responsive pt-3">
                <table class="table table-striped project-orders-table">

                  <thead>
                    <tr>
                      <th>NOMS</th>
                      <th>FONCTIONS</th>
                      <th>CONTACTS</th>
                      <th>Date D'integration</th>

                      <th>ACTIONS</th>
                    </tr>
                  </thead>

                  <tbody>@foreach ($user as $User)


                    <tr>
                      <td>{{$User->name}}</td>
                      <td>{{$User->fonction}}</td>
                      <td>{{$User->phone}}</td>
                      <td>{{$User->created_at}}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="#"  class="btn btn-success btn-sm btn-icon-text mr-3">
                            Details<i class="typcn typcn-edit btn-icon-append"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-sm btn-icon-text">
                              Editer<i class="typcn typcn-eye-outline btn-icon-append"></i>
                          </a>
                        </div> 
                      </td>
                    </tr>@endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{url('vendors/js/vendor.bundle.basejs')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{url('vendors/chart.js/Chart.minjs')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('jsoff-canvasjs')}}"></script>
  <script src="{{url('jshoverable-collapsejs')}}"></script>
  <script src="{{url('jstemplatejs')}}"></script>
  <script src="{{url('jssettingsjs')}}"></script>
  <script src="{{url('jstodolistjs')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

