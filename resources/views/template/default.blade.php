<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page -->
    <title>AKL ALBAYT | Home</title>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <link rel="icon" type="image/png" href="image/logo.png"> -->
    <!-- file css project -->
    <!-- Include Bootstrap4 File -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('elements.navbar')
    
    @yield('content')

    @include('elements.footer')
    <!-- script File -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
