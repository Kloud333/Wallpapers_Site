<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/portfolio.css" rel="stylesheet">

</head>

<body>

@include('layouts.nav')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Choose your
        <small>Image</small>
    </h1>

    @yield('content')

    @include('layouts.pagination')

</div>
<!-- /.container -->

@include('layouts.footer')


</body>

</html>
