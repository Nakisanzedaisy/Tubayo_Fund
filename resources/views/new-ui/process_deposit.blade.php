{{-- <!DOCTYPE html>
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
    <link href="new-ui-assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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
            <h1 class="logo me-auto"><a href="index.html">PennyWise<span>.</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="new-ui-assets/assets/img/logo.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">Home</a></li>
                    <li><a class="nav-link scrollto" href="about">About</a></li>
                    <li><a class="nav-link scrollto" href="service">Services</a></li>
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
                <img src="new-ui-assets/assets/img/depo.png" alt="" class="img-fluid mb-3 d-none d-md-block">
               
                <!-- <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>
            <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
                <u>Bootstrapious</u></a>
            </p>-->
            </div>

            <!-- Payment Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form method="POST" action="mailto:irenenakabugo0@gmail.com" name="New deposit">
                    <div class="row">
                
                        <!-- Amount -->
                        <div class="col-lg-12 mb-4">
                            <label for="amount">Amount</label>
                            <br>
                            <input id="amount" type="text"  required="required" name="amount" placeholder="e.g UGX 40,000"
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>
                
                        <!-- Mode of Payment -->
                        <div class="col-lg-12 mb-4">
                            <label for="mode_of_payment">Mode of payment</label>
                            <br>
                            <select id="mode_of_payment" name="mode_of_payment" class="form-select bg-white border-md font-weight-bold text-muted">
                                <option value="">Mode of payment</option>
                                <option value="">Airtel merchant code (1234567)</option>
                                <option value="">MOMO pay merchant code(123456)</option>
                            </select>
                        </div>

                         
                
                        <!-- Proof of Payment -->
                        <div class="col-lg-12 mb-4">
                            <label for="proof_of_payment">Proof of payment</label>
                            <br>
                            <input id="proof_of_payment" type="file"  required="required" onchange="uploadFile()" name="proof_of_payment" placeholder="Send proof of payment" 
                             class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>

                         <!--progress bar-->
                    <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status"></h3>
                    <p id="loaded_n_total"></p>
                    <!--progress bar ended-->
                    
                
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="#" class="btn btn-primary btn-block py-2 button" id="signUp" style="background-color: #2b2b2b;">
                                <span class="font-weight-bold">Deposit</span>
                            </a>
                        </div>
                
                    </div>

                   
                </form>

            </div>
        </div>
    </div>
    <script src="deposit.js">//link to deposit.js</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>

    <!-- <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-analytics.js";
        import { getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js";
        import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyD5S-UYsUxh4-Qz3vcchQ1jpqM96GSeDV8",
            authDomain: "pennywise-2023.firebaseapp.com",
            databaseURL: "https://pennywise-2023-default-rtdb.firebaseio.com",
            projectId: "pennywise-2023",
            storageBucket: "pennywise-2023.appspot.com",
            messagingSenderId: "286276321895",
            appId: "1:286276321895:web:1af99f1ee96a429efacac2",
            measurementId: "G-QFMHB13DPC"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const database = getDatabase(app);
        const auth = getAuth();



        signUp.addEventListener('click', (e) => {
            var firstname = document.getElementById('firstName').value;
            var lastname = document.getElementById('lastName').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;



            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    // Signed in 
                    const user = userCredential.user;

                    set(ref(database, 'users/' + user.uid), {
                        firstName: firstname,
                        lastName: lastname,
                        email: email

                    })
                    alert('User created!');
                    window.location.href = 'sitelogin.html';

                    // ...
                })
                .catch((error) => {
                    const errorCode = error.code;
                    const errorMessage = error.message;
                    alert('errorMessage');
                });


        });

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

</html> --}}



{{-- New Code --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (Head section remains the same) ... -->
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
    <link href="new-ui-assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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
  ================================
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">PennyWise<span>.</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="new-ui-assets/assets/img/logo.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">Home</a></li>
                    <li><a class="nav-link scrollto" href="about">About</a></li>
                    <li><a class="nav-link scrollto" href="service">Services</a></li>
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
                <img src="new-ui-assets/assets/img/depo.png" alt="" class="img-fluid mb-3 d-none d-md-block">
            </div>

            <!-- Payment Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form method="POST" action="{{ route('process_deposit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <!-- Amount -->
                        <div class="col-lg-12 mb-4">
                            <label for="amount">Amount</label>
                            <br>
                            <input id="amount" type="text" required="required" name="amount"
                                placeholder="e.g UGX 40,000" class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>

                        <!-- Mode of Payment -->
                        <div class="col-lg-12 mb-4">
                            <label for="mode_of_payment">Mode of payment</label>
                            <br>
                            <select id="mode_of_payment" name="mode_of_payment"
                                class="form-select bg-white border-md font-weight-bold text-muted">
                                <option value="">Mode of payment</option>
                                <option value="Airtel">Airtel merchant code (1234567)</option>
                                <option value="MOMO">MOMO pay merchant code (123456)</option>
                            </select>
                        </div>

                        <!-- Proof of Payment -->
                        <div class="col-lg-12 mb-4">
                            <label for="proof_of_payment">Proof of payment</label>
                            <br>
                            <input id="proof_of_payment" type="file" required="required" onchange="uploadFile()"
                                name="proof_of_payment" placeholder="Send proof of payment"
                                class="form-control bg-white font-weight-bold border-md input-sm">
                        </div>

                        <!-- Progress bar -->
                        <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                        <h3 id="status"></h3>
                        <p id="loaded_n_total"></p>
                        <!-- Progress bar ended -->

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" class="btn btn-primary btn-block py-2 button"
                                style="background-color: #2b2b2b;">
                                <span class="font-weight-bold">Deposit</span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include the jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    {{-- <script>
        // Function to handle form submission
        $(document).on('submit', 'form', function (e) {
            e.preventDefault();

            // Get form data
            var formData = new FormData(this);

            // Display the progress bar when form is submitted
            $('#progressBar').show();

            // Send the form data using AJAX
            $.ajax({
                url: "{{ route('process_deposit') }}", // Replace with the URL of your backend PHP script to process the deposit
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function (e) {
                        if (e.lengthComputable) {
                            var percent = Math.round((e.loaded / e.total) * 100);
                            $('#progressBar').val(percent);
                            $('#status').html(percent + '% uploaded');
                        }
                    });
                    return xhr;
                },
                success: function (response) {
                    // Hide the progress bar and display success message
                    $('#progressBar').hide();
                    $('#status').html("Deposit successful! Thank you for your payment.");
                },
                error: function (error) {
                    console.log(error)
                    // Hide the progress bar and display error message
                    $('#progressBar').hide();
                    $('#status').html("There was an error processing your deposit. Please try again later.");
                }
            });
        });

        // For Demo Purpose [Changing input group text on focus]
        $(function () {
            $('input, select').on('focus', function () {
                $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
            });
            $('input, select').on('blur', function () {
                $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
            });
        });
    </script> --}}

    <!-- ... (Rest of the HTML code remains the same) ... -->

</body>

</html>
