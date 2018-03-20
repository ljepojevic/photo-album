<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Photoshow</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
</head>
<body>
	@include('inc.topbar')
	<div class="grid-container fluid">
		@include('inc.flashMessage')
		@yield('content')
	</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
</body>
</html>