<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('boots/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('boots/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('boots/css/style.css') }}">
</head>
<body>

  <!-- Start your project here-->


@include('layout.navbar')
@yield('principal')
@yield('registro')
@include('layout.footer')

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('boots/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('boots/js/popper.min.js') }} "></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('boots/js/bootstrap.min.js') }} "></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('boots/js/mdb.min.js') }} "></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>

