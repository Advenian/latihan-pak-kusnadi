<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MISIBANG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons -->
    <link href="{{ asset('/user/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,400;1,900&family=Montserrat:ital,wght@0,100;0,400;1,900&family=Poppins:ital,wght@0,100;0,400;1,900&family=Ysabeau+Infant:ital,wght@0,100;0,400;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/user/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/assets/css/custom.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('/user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/user/assets/js/main.js') }}"></script>

    {{-- Custom JS --}}
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="{{ asset('/user/assets/js/custom.js') }}"></script>
    <script>
        // JavaScript to display image preview
        // document.getElementById('imageInput').addEventListener('change', function () {
        //     const fileInput = this;
        //     const imagePreview = document.getElementById('imagePreview');

        //     if (fileInput.files && fileInput.files[0]) {
        //         const reader = new FileReader();

        //         reader.onload = function (e) {
        //             imagePreview.src = e.target.result;
        //             imagePreview.style.display = 'block';
        //         };

        //         reader.readAsDataURL(fileInput.files[0]);
        //     }
        // });
        
        function showPreview() {
           const imgInp = document.getElementById("imageInput")
           const imagePreview = document.getElementById("imagePreview")

            const [file] = imgInp.files
            if (file) {
                imagePreview.style.display = 'block';
                imagePreview.src = URL.createObjectURL(file)
            }
        }
    </script>
</body>

</html>
