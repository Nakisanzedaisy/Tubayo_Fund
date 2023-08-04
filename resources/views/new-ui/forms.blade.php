<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header z-index-50">
        <nav class="nav navbar py-3 px-0 shadow-sm text-white position-relative">
          <!-- Search Box-->
          <div class="search-box shadow-sm">
            <button class="dismiss d-flex align-items-center">
              <svg class="svg-icon svg-icon-heavy">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
            <form id="searchForm" action="#" role="search">
              <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
            </form>
          </div>
          <div class="container-fluid w-100">
            <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                  <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#find-1"> </use>
                    </svg></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a class="nav-link text-white" id="notifications" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#chart-1"> </use>
                    </svg><span class="badge bg-red badge-corner fw-normal">12</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="notifications">
                    <li><a class="dropdown-item py-3" href="#"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-blue">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#envelope-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-green">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#chats-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-orange">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#checked-window-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-green">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#chats-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item all-notifications text-center" href="#"> <strong class="text-xs text-gray-600">view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a class="nav-link text-white" id="messages" rel="nofollow" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#envelope-1"> </use>
                    </svg><span class="badge bg-orange badge-corner fw-normal">10</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="messages">
                    <li><a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div></a></li>
                    <li><a class="dropdown-item text-center" href="#"> <strong class="text-xs text-gray-600">Read all messages   </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a class="nav-link text-white dropdown-toggle d-flex align-items-center" id="languages" href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="me-2" src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="languages">
                    <li><a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="img/flags/16/DE.png" alt="English"><span class="text-xs text-gray-700">German</span></a></li>
                    <li><a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="img/flags/16/FR.png" alt="English"><span class="text-xs text-gray-700">French                                         </span></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a class="nav-link text-white" href="login.html"> <span class="d-none d-sm-inline">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="...">
            <div class="ms-3 title">
              <h1 class="h4 mb-2">Mark Stephen</h1>
              <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
          <ul class="list-unstyled py-4">
            <li class="sidebar-item"><a class="sidebar-link" href="index.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"> </use>
                </svg>Home </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#portfolio-grid-1"> </use>
                </svg>Tables </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="charts.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#sales-up-1"> </use>
                </svg>Charts </a></li>
            <li class="sidebar-item active"><a class="sidebar-link" href="forms.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#survey-1"> </use>
                </svg>Forms </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#browser-window-1"> </use>
                </svg>Example dropdown </a>
              <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="#">Page</a></li>
                <li><a class="sidebar-link" href="#">Page</a></li>
                <li><a class="sidebar-link" href="#">Page</a></li>
              </ul>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#disable-1"> </use>
                </svg>Login page </a></li>
          </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Extras</span>
          <ul class="list-unstyled py-4">
            <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#imac-screen-1"> </use>
                </svg>Demo </a></li>
            <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#chart-1"> </use>
                </svg>Demo </a></li>
            <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#quality-1"> </use>
                </svg>Demo </a></li>
            <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#security-shield-1"> </use>
                </svg>Demo </a></li>
          </ul>
        </nav>
        <div class="content-inner w-100">
          <!-- Page Header-->
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">Forms</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="bg-white">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                  <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                  <li class="breadcrumb-item active fw-light" aria-current="page">Forms</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Basic Form</h3>
                    </div>
                    <div class="card-body">
                      <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p>
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="exampleInputEmail1">Email address</label>
                          <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp">
                          <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleInputPassword1">Password</label>
                          <input class="form-control" id="exampleInputPassword1" type="password">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Horizontal Form</h3>
                    </div>
                    <div class="card-body">
                      <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p>
                      <form class="form-horizontal">
                        <div class="row gy-2 mb-4">
                          <label class="col-sm-3 form-label" for="inputHorizontalElOne">Email</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="inputHorizontalElOne" type="email" placeholder="Email Address"><small class="form-text">Example help text that remains unchanged.</small>
                          </div>
                        </div>
                        <div class="row gy-2 mb-4">
                          <label class="col-sm-3 form-label" for="inputHorizontalElTwo">Password</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="inputHorizontalElTwo" type="password" placeholder="Pasword"><small class="form-text">Example help text that remains unchanged.</small>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-9 ms-auto">
                            <input class="btn btn-primary" type="submit" value="Signin">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Inline Form-->
                <div class="col-lg-8">                           
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Inline Form</h3>
                    </div>
                    <div class="card-body">
                      <form class="row g-3 align-items-center">
                        <div class="col-lg">
                          <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                          <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input class="form-control" id="inlineFormInputGroupUsername" type="text" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-lg">
                          <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                          <select class="form-select" id="inlineFormSelectPref">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="col-lg">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Modal Form-->
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="mb-0">Signin Modal</h3>
                    </div>
                    <div class="card-body text-center">
                      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Form in simple modal </button>
                      <!-- Modal-->
                      <div class="modal fade text-start" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Signin Modal</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Lorem ipsum dolor sit amet consectetur.</p>
                              <form>
                                <div class="mb-3">
                                  <label class="form-label" for="modalInputEmail1">Email address</label>
                                  <input class="form-control" id="modalInputEmail1" type="email" aria-describedby="emailHelp">
                                  <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="modalInputPassword1">Password</label>
                                  <input class="form-control" id="modalInputPassword1" type="password">
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">All form elements</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="row">
                          <label class="col-sm-3 form-label">Normal</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Help text</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text"><small class="form-text">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Password</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="password" name="password">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Placeholder</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" placeholder="placeholder">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Disabled</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled="" placeholder="Disabled input here...">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                          <div class="col-sm-9">
                            <div class="form-check">
                              <input class="form-check-input" id="defaultCheck0" type="checkbox">
                              <label class="form-check-label" for="defaultCheck0">Option one</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultCheck1" type="checkbox" checked>
                              <label class="form-check-label" for="defaultCheck1">Option two checked</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultCheck2" type="checkbox" checked disabled>
                              <label class="form-check-label" for="defaultCheck2">Option three checked and disabled</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultCheck3" type="checkbox" disabled>
                              <label class="form-check-label" for="defaultCheck3">Option four disabled</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultRadio0" type="radio" name="exampleRadios">
                              <label class="form-check-label" for="defaultRadio0">Option one</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultRadio1" type="radio" name="exampleRadios" checked>
                              <label class="form-check-label" for="defaultRadio1">Option two checked</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultRadio2" type="radio" name="exampleRadios" checked disabled>
                              <label class="form-check-label" for="defaultRadio2">Option three checked and disabled</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="defaultRadio3" type="radio" name="exampleRadios" disabled>
                              <label class="form-check-label" for="defaultRadio3">Option four disabled</label>
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Select</label>
                          <div class="col-sm-9">
                            <select class="form-select mb-3" name="account">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                          <div class="col-sm-9 offset-sm-3">
                            <select class="form-select" multiple="">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label" for="formFile">File input</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="formFile" type="file">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Input with success</label>
                          <div class="col-sm-9">
                            <input class="form-control is-valid" type="text">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Input with error</label>
                          <div class="col-sm-9">
                            <input class="form-control is-invalid" type="text">
                            <div class="invalid-feedback">Please provide your name.</div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Control sizing</label>
                          <div class="col-sm-9">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder=".input-lg">
                            <input class="form-control mb-3" type="text" placeholder="Default input">
                            <input class="form-control form-control-sm mb-3" type="text" placeholder=".input-sm">
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Column sizing</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-md-3">
                                <input class="form-control" type="text" placeholder=".col-md-3">
                              </div>
                              <div class="col-md-4">
                                <input class="form-control" type="text" placeholder=".col-md-4">
                              </div>
                              <div class="col-md-5">
                                <input class="form-control" type="text" placeholder=".col-md-5">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"> </div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Material Inputs</label>
                          <div class="col-sm-9">
                            <div class="input-material-group mb-3">
                              <input class="input-material" id="register-username" type="text" name="registerUsername" required value="Jason Doe">
                              <label class="label-material" for="register-username">Username</label>
                            </div>
                            <div class="input-material-group mb-3">
                              <input class="input-material" id="register-email" type="email" name="registerEmail" required>
                              <label class="label-material" for="register-email">Email Address      </label>
                            </div>
                            <div class="input-material-group mb-3">
                              <input class="input-material" id="register-password" type="password" name="registerPassword" required>
                              <label class="label-material" for="register-password">Password     </label>
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Input groups</label>
                          <div class="col-sm-9">
                            <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span>
                              <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">@</span>
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                              </div>
                              <input class="form-control" type="text" aria-label="Text input with checkbox">
                            </div>
                            <div class="input-group mb-3">
                              <input class="form-control" type="text" aria-label="Text input with radio button">
                              <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input">
                              </div>
                            </div>
                            <div class="input-group mb-3"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
                              <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                            <div class="input-group">
                              <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Button addons</label>
                          <div class="col-sm-9">
                            <div class="input-group mb-3">
                              <button class="btn btn-primary" id="button-addon1" type="button">Button</button>
                              <input class="form-control" type="text" placeholder aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                            <div class="input-group">
                              <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                              <button class="btn btn-primary" id="button-addon2" type="button">Button</button>
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">With dropdowns</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                              <ul class="dropdown-menu shadow-sm">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                              </ul>
                              <input class="form-control" type="text" aria-label="Text input with dropdown button">
                            </div>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <div class="col-sm-9 ms-auto">
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid">
              <div class="row gy-2">
                <div class="col-sm-6 text-sm-start">
                  <p class="mb-0">Your company &copy; 2017-2022</p>
                </div>
                <div class="col-sm-6 text-sm-end">
                  <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template" class="text-white text-decoration-none">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>