<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Serido Soft">
		<title>@yield('title')</title>
		<!-- CSS GLOBAL -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/global.css')}}">
		<!-- CSS BOOTSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<!-- BOOTSTRAP ICONS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
			/>
			@yield('head')
		<link rel="shortcut icon" href="{{asset('assets/icons/favicon.ico')}}" type="image/x-icon">
		</head>
		<!-- JS BOOTSTRAP -->
		@yield('content')
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</html>