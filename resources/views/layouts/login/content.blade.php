<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    {{Html::style('assets/loginform/images/icons/favicon.ico')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    {{Html::style('assets/loginform/vendor/bootstrap/css/bootstrap.min.css')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    {{Html::style('assets/loginform/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    {{Html::style('assets/loginform/vendor/animate/animate.css')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    {{Html::style('assets/loginform/vendor/css-hamburgers/hamburgers.min.css')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    {{Html::style('assets/loginform/vendor/select2/select2.min.css')}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    {{Html::style('assets/loginform/css/util.css')}}
    <link rel="stylesheet" type="text/css" href="css/main.css">
    {{Html::style('assets/loginform/css/main.css')}}

</head>
<body>

    @yield('content')

</body>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    {{Html::script('assets/loginform/vendor/jquery/jquery-3.2.1.min.js')}}
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    {{Html::script('assets/loginform/vendor/bootstrap/js/popper.js')}}
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    {{Html::script('assets/loginform/vendor/bootstrap/js/bootstrap.min.js')}}
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    {{Html::script('assets/loginform/vendor/select2/select2.min.js')}}
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    {{Html::script('assets/loginform/vendor/tilt/tilt.jquery.min.js')}}
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    {{Html::script('assets/loginform/js/main.js')}}

</html>
