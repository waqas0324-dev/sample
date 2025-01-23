<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
