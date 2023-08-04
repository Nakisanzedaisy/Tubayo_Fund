<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <!-- Favicons -->
    <link href="new-ui-assets/assets/img/favicon.png" rel="icon">
    <link href="new-ui-assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="new-ui-assets/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="new-ui-assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="new-ui-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="new-ui-assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> N
    <link href="new-ui-assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="new-ui-assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="new-ui-assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="new-ui-assets/assets/css/style.css" rel="stylesheet">
    <link href="new-ui-assets/assets/css/register.css" rel="stylesheet">


    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- =======================================================
  * Template Name: Presento
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!--<h1 class="logo me-auto"><a href="index.html">PennyWise<span>.</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index" class="logo me-auto"><img src="new-ui-assets/assets/img/logo.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">Home</a></li>
                    <li><a class="nav-link scrollto" href="about">About</a></li>
                    <li><a class="nav-link scrollto" href="services">Services</a></li>
                    <li><a class="nav-link scrollto" href="contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="siteregister" class="get-started-btn scrollto">Get Started</a>
        </div>
    </header><!-- End Header -->
    <br><br>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="new-ui-assets/assets/img/withdraw.png" alt="" class="img-fluid mb-3 d-none d-md-block">
               
                <!-- <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>
            <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
                <u>Bootstrapious</u></a>
            </p>-->
            </div>

            <!-- Payment Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">
                
                        <!-- Amount -->
                        <div class="col-lg-12 mb-4">
                            <label for="amount">Amount to be withdrawn</label>
                            <br>
                            <input id="money" type="text" name="amount" 
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>
                
                        <!-- Mode of Payment -->
                        <div class="col-lg-12 mb-4">
                            <label for="mode_of_withdraw">Mode of withdraw</label>
                            <br>
                            <select id="mode_of_withdraw" name="mode_of_withdraw" class="form-select bg-white border-md font-weight-bold text-muted">
                                <option value="">Choose method</option>
                                <option value="">Airtel money</option>
                                <option value="">MTN mobile money</option>
                            </select>
                        </div>

                        <!--account number-->
                        {{-- <div class="col-lg-12 mb-4">
                            <label for="account number"> Account number</label>
                            <br>
                            <input id="account" type="number" name="account number" 
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div> --}}

                          
                        <!--mobile number-->
                        <div class="col-lg-12 mb-4">
                            <label for="phone number"> Phone number</label>
                            <br>
                            <input id="number" type="number" name="phone number" 
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>

                        <!--proof of ownership-->
                        {{-- <div class="col-lg-12 mb-4">
                            <label for="pin number"> PIN number</label>
                            <br>
                            <input id="pin" type="number" name="pin number" 
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div> --}}
                        
                        
                
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="#" class="btn btn-primary btn-block py-2 button" id="signUp" style="background-color: #2b2b2b;">
                                <span class="font-weight-bold">Withdraw</span>
                            </a>
                        </div>
                
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>

     <!--   <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-app.js";
            import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-analytics.js";
            // TODO: Add SDKs for Firebase products that you want to use
            // https://firebase.google.com/docs/web/setup#available-libraries
          
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            const firebaseConfig = {
              apiKey: "AIzaSyCm5AiPb-T0a4jJ8Y2nzbb0J0ZLAjfZsw4",
              authDomain: "withdraw-tubayo.firebaseapp.com",
              databaseURL: "https://withdraw-tubayo-default-rtdb.firebaseio.com",
              projectId: "withdraw-tubayo",
              storageBucket: "withdraw-tubayo.appspot.com",
              messagingSenderId: "656637293598",
              appId: "1:656637293598:web:a824b05f8a3440003faa0f",
              measurementId: "G-M29G7PM44Y"
            };
          
            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
            const analytics = getAnalytics(app);

            //importing some filegits from firebase library to be used
            import {getDatabase, set, get, update, remove, ref, child}
            from "https://www.gstatic.com/firebasejs/9.23.0/firebase-database.js"

            //declare variables 
            const db = getDatabase();   //to get the database from where we created it from
             
            var money = docume

            </script> -->
</body>
<script>
    // For Demo Purpose [Changing input group text on focus]
    $(function () {
        $('input, select').on('focus', function () {
            $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
        });
        $('input, select').on('blur', function () {
            $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
        });
    });
</script>

</html>