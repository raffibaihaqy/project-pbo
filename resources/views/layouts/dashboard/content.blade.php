<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <link rel="icon" type="image/jpg" href="{!! asset('assets/loginform/images/rsz_3logo.jpg') !!}">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/css/font-face.css')}}

    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}

    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/bootstrap-4.1/bootstrap.min.css')}}

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}

    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/wow/animate.css')}}

    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/css-hamburgers/hamburgers.min.css')}}

    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/slick/slick.css')}}

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/select2/select2.min.css')}}

    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    {{Html::style('assets/cooladmin/css/theme.css')}}

</head>

<body class="animsition">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.dashboard.header-mobile')

    @include('layouts.dashboard.header')

    @include('layouts.dashboard.sidebar')

    @yield('content')

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/jquery-3.2.1.min.js')}}
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/bootstrap-4.1/popper.min.js')}}

    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/bootstrap-4.1/bootstrap.min.js')}}
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    {{Html::script('assets/cooladmin/vendor/slick/slick.min.js')}}

    <script src="vendor/wow/wow.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/wow/wow.min.js')}}

    <script src="vendor/animsition/animsition.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/animsition/animsition.min.js')}}

    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    {{Html::script('assets/cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}

    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/counter-up/jquery.waypoints.min.js')}}

    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    {{Html::script('assets/cooladmin/vendor/counter-up/jquery.counterup.min.js')}}

    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/circle-progress/circle-progress.min.js')}}

    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    {{Html::script('assets/cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}

    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    {{Html::script('assets/cooladmin/vendor/chartjs/Chart.bundle.min.js')}}

    <script src="vendor/select2/select2.min.js">
    </script>
    {{Html::script('assets/cooladmin/vendor/select2/select2.min.js')}}

    <!-- Main JS-->
    <script src="js/main.js"></script>
    {{Html::script('assets/cooladmin/js/main.js')}}


</body>

</html>
<!-- end document-->
