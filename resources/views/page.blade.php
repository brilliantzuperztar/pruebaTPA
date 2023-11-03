<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="https://typical-pipe-production.up.railway.app/images/icons/favicon.ico">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/bootstrap/css/bootstrap.min.css ">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/animate/animate.css">	
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/css-hamburgers/hamburgers.min.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/animsition/css/animsition.min.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/select2/select2.min.css">	
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/vendor/daterangepicker/daterangepicker.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/css/util.css">
	    <link rel="stylesheet" type="text/css" href="https://typical-pipe-production.up.railway.app/css/main.css">

        <title>@yield('title')</title>

        <link rel="stylesheet" type="text/css" href="css/app.css" >

    </head>
    
    <body class="antialiased">  
            @yield('content') 
            
    </body>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</html>
