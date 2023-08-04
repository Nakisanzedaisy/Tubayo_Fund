<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trends</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="new-ui-assets/assets/img/favicon.png" rel="icon">
  <link href="new-ui-assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="new-ui-assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="new-ui-assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="new-ui-assets/assets/css/dash.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index" class="logo d-flex align-items-center">
        <img src="new-ui-assets/assets/img/logo.png" alt="">
    
      </a>
    
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Pending </h4>
                <p>Ensure to complete your choice for saving target goal</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Registration Failed</h4>
                <p>Please provide a correct unique ID</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Unique ID</h4>
                <p>Your unique Id has been sent to your e-mail</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Welcome</h4>
                <p>Follow the prompts to obtain your unique ID</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

     
        <li class="nav-item dropdown pe-3">
        
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="" alt="Profile Image" class="rounded-circle pimg3">
            <span class="d-none d-md-block dropdown-toggle ps-2 pname3"></span>
          </a><!-- End Profile Iamge Icon -->
        
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6 class="pname4"></h6>
              <span class="j3"></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
        
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
        
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
        
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
        
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" id="logOut">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
        
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <!--
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts">
              <i class="bi bi-circle"></i><span>Savings</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts" class="active">
              <i class="bi bi-circle"></i><span>Trends</span>
            </a>
          </li>
          
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Trends</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">Trends</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <p>Monitor your saving trends with us!</p>

    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Line Chart (Personal Savings)</h5>

              <!-- Line Chart -->
              <div id="lineChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#lineChart"), {
                    series: [{
                      name: "000 UGX",
                      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                    }],
                    chart: {
                      height: 350,
                      type: 'line',
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    grid: {
                      row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                      },
                    },
                    xaxis: {
                      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Area Chart(Participation Overtime) </h5>

              <!-- Area Chart -->
              <div id="areaChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  const series = {
                    "monthDataSeries1": {
                      "prices": [
                        8107.85,
                        8128.0,
                        8122.9,
                        8165.5,
                        8340.7,
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2,
                        8668.95,
                        8602.3,
                        8607.55,
                        8512.9,
                        8496.25,
                        8600.65,
                        8881.1,
                        9340.85
                      ],
                      "dates": [
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017",
                        "29 Nov 2017",
                        "30 Nov 2017",
                        "01 Dec 2017",
                        "04 Dec 2017",
                        "05 Dec 2017",
                        "06 Dec 2017",
                        "07 Dec 2017",
                        "08 Dec 2017"
                      ]
                    },
                    "monthDataSeries2": {
                      "prices": [
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2,
                        8668.95,
                        8602.3,
                        8607.55,
                        8512.9,
                        8496.25,
                        8600.65,
                        8881.1,
                        9040.85,
                        8340.7,
                        8165.5,
                        8122.9,
                        8107.85,
                        8128.0
                      ],
                      "dates": [
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017",
                        "29 Nov 2017",
                        "30 Nov 2017",
                        "01 Dec 2017",
                        "04 Dec 2017",
                        "05 Dec 2017",
                        "06 Dec 2017",
                        "07 Dec 2017",
                        "08 Dec 2017"
                      ]
                    },
                    "monthDataSeries3": {
                      "prices": [
                        7114.25,
                        7126.6,
                        7116.95,
                        7203.7,
                        7233.75,
                        7451.0,
                        7381.15,
                        7348.95,
                        7347.75,
                        7311.25,
                        7266.4,
                        7253.25,
                        7215.45,
                        7266.35,
                        7315.25,
                        7237.2,
                        7191.4,
                        7238.95,
                        7222.6,
                        7217.9,
                        7359.3,
                        7371.55,
                        7371.15,
                        7469.2,
                        7429.25,
                        7434.65,
                        7451.1,
                        7475.25,
                        7566.25,
                        7556.8,
                        7525.55,
                        7555.45,
                        7560.9,
                        7490.7,
                        7527.6,
                        7551.9,
                        7514.85,
                        7577.95,
                        7592.3,
                        7621.95,
                        7707.95,
                        7859.1,
                        7815.7,
                        7739.0,
                        7778.7,
                        7839.45,
                        7756.45,
                        7669.2,
                        7580.45,
                        7452.85,
                        7617.25,
                        7701.6,
                        7606.8,
                        7620.05,
                        7513.85,
                        7498.45,
                        7575.45,
                        7601.95,
                        7589.1,
                        7525.85,
                        7569.5,
                        7702.5,
                        7812.7,
                        7803.75,
                        7816.3,
                        7851.15,
                        7912.2,
                        7972.8,
                        8145.0,
                        8161.1,
                        8121.05,
                        8071.25,
                        8088.2,
                        8154.45,
                        8148.3,
                        8122.05,
                        8132.65,
                        8074.55,
                        7952.8,
                        7885.55,
                        7733.9,
                        7897.15,
                        7973.15,
                        7888.5,
                        7842.8,
                        7838.4,
                        7909.85,
                        7892.75,
                        7897.75,
                        7820.05,
                        7904.4,
                        7872.2,
                        7847.5,
                        7849.55,
                        7789.6,
                        7736.35,
                        7819.4,
                        7875.35,
                        7871.8,
                        8076.5,
                        8114.8,
                        8193.55,
                        8217.1,
                        8235.05,
                        8215.3,
                        8216.4,
                        8301.55,
                        8235.25,
                        8229.75,
                        8201.95,
                        8164.95,
                        8107.85,
                        8128.0,
                        8122.9,
                        8165.5,
                        8340.7,
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2
                      ],
                      "dates": [
                        "02 Jun 2017",
                        "05 Jun 2017",
                        "06 Jun 2017",
                        "07 Jun 2017",
                        "08 Jun 2017",
                        "09 Jun 2017",
                        "12 Jun 2017",
                        "13 Jun 2017",
                        "14 Jun 2017",
                        "15 Jun 2017",
                        "16 Jun 2017",
                        "19 Jun 2017",
                        "20 Jun 2017",
                        "21 Jun 2017",
                        "22 Jun 2017",
                        "23 Jun 2017",
                        "27 Jun 2017",
                        "28 Jun 2017",
                        "29 Jun 2017",
                        "30 Jun 2017",
                        "03 Jul 2017",
                        "04 Jul 2017",
                        "05 Jul 2017",
                        "06 Jul 2017",
                        "07 Jul 2017",
                        "10 Jul 2017",
                        "11 Jul 2017",
                        "12 Jul 2017",
                        "13 Jul 2017",
                        "14 Jul 2017",
                        "17 Jul 2017",
                        "18 Jul 2017",
                        "19 Jul 2017",
                        "20 Jul 2017",
                        "21 Jul 2017",
                        "24 Jul 2017",
                        "25 Jul 2017",
                        "26 Jul 2017",
                        "27 Jul 2017",
                        "28 Jul 2017",
                        "31 Jul 2017",
                        "01 Aug 2017",
                        "02 Aug 2017",
                        "03 Aug 2017",
                        "04 Aug 2017",
                        "07 Aug 2017",
                        "08 Aug 2017",
                        "09 Aug 2017",
                        "10 Aug 2017",
                        "11 Aug 2017",
                        "14 Aug 2017",
                        "16 Aug 2017",
                        "17 Aug 2017",
                        "18 Aug 2017",
                        "21 Aug 2017",
                        "22 Aug 2017",
                        "23 Aug 2017",
                        "24 Aug 2017",
                        "28 Aug 2017",
                        "29 Aug 2017",
                        "30 Aug 2017",
                        "31 Aug 2017",
                        "01 Sep 2017",
                        "04 Sep 2017",
                        "05 Sep 2017",
                        "06 Sep 2017",
                        "07 Sep 2017",
                        "08 Sep 2017",
                        "11 Sep 2017",
                        "12 Sep 2017",
                        "13 Sep 2017",
                        "14 Sep 2017",
                        "15 Sep 2017",
                        "18 Sep 2017",
                        "19 Sep 2017",
                        "20 Sep 2017",
                        "21 Sep 2017",
                        "22 Sep 2017",
                        "25 Sep 2017",
                        "26 Sep 2017",
                        "27 Sep 2017",
                        "28 Sep 2017",
                        "29 Sep 2017",
                        "03 Oct 2017",
                        "04 Oct 2017",
                        "05 Oct 2017",
                        "06 Oct 2017",
                        "09 Oct 2017",
                        "10 Oct 2017",
                        "11 Oct 2017",
                        "12 Oct 2017",
                        "13 Oct 2017",
                        "16 Oct 2017",
                        "17 Oct 2017",
                        "18 Oct 2017",
                        "19 Oct 2017",
                        "23 Oct 2017",
                        "24 Oct 2017",
                        "25 Oct 2017",
                        "26 Oct 2017",
                        "27 Oct 2017",
                        "30 Oct 2017",
                        "31 Oct 2017",
                        "01 Nov 2017",
                        "02 Nov 2017",
                        "03 Nov 2017",
                        "06 Nov 2017",
                        "07 Nov 2017",
                        "08 Nov 2017",
                        "09 Nov 2017",
                        "10 Nov 2017",
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017"
                      ]
                    }
                  }
                  new ApexCharts(document.querySelector("#areaChart"), {
                    series: [{
                      name: "No. of people",
                      data: series.monthDataSeries1.prices
                    }],
                    chart: {
                      type: 'area',
                      height: 350,
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    subtitle: {
                      text: 'Community Participation',
                      align: 'left'
                    },
                    labels: series.monthDataSeries1.dates,
                    xaxis: {
                      type: 'datetime',
                    },
                    yaxis: {
                      opposite: true
                    },
                    legend: {
                      horizontalAlign: 'left'
                    }
                  }).render();
                });
              </script>
              <!-- End Area Chart -->

            </div>
          </div>
        </div>

       

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar Chart(Active Regions)</h5>

              <!-- Bar Chart -->
              <div id="barChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#barChart"), {
                    series: [{
                      data: [500, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        borderRadius: 4,
                        horizontal: true,
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    xaxis: {
                      categories: ['Makerere', 'Ntinda', 'Banda', 'Bweyogerere', 'Kiira', 'Nansana', 'Nakawa',
                        'Naguru', 'Bugolobi', 'Mutungo'
                      ],
                    }
                  }).render();
                });
              </script>
              <!-- End Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pie Chart(Target Goals)</h5>

              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Farming', 'Land', 'Travel', 'Investment', 'Houses']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>
<!-----
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Donut Chart</h5>

              <!-- Donut Chart -->
              <!-----
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->



              <!----
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Radar Chart</h5>

              <!-- Radar Chart -->
              <!-----
              <div id="radarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radarChart"), {
                    series: [{
                      name: 'Series 1',
                      data: [80, 50, 30, 40, 100, 20],
                    }],
                    chart: {
                      height: 350,
                      type: 'radar',
                    },
                    xaxis: {
                      categories: ['January', 'February', 'March', 'April', 'May', 'June']
                    }
                  }).render();
                });
              </script>
              <!-- End Radar Chart -->
             
            </div>
          </div>
        </div>

        

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>tubayo</span></strong>. All Rights Reserved
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="new-ui-assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="new-ui-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="new-ui-assets/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="new-ui-assets/assets/vendor/echarts/echarts.min.js"></script>
  <script src="new-ui-assets/assets/vendor/quill/quill.min.js"></script>
  <script src="new-ui-assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="new-ui-assets/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="new-ui-assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="new-ui-assets/assets/js/main.js"></script>

  <script type="module" src="./firebase backend/auth.js"></script>

</body>

</html>