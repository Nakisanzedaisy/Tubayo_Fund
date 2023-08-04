<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
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

</head>

<body>

    @include('new-ui.includes.header')

    @yield("content")




    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    {{-- <script type="module" src="new-ui-assets/firebase backend/auth.js"></script> --}}

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

</body>

</html>
