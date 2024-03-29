<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--link rel="icon" href="../../../../favicon.ico"-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
	<title>Send Fax</title>
</head>

<body>
	<div id="app">
		<router-view />
	</div>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
