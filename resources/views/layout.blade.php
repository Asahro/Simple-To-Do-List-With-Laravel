<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('library/prism/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('library/prism/prism.js') }}" rel="stylesheet" />
    <link href="{{ asset('library/prism/styles.css') }}" rel="stylesheet" />
</head>
<body>
<div class="col-md-6 col-md-offset-3" style="margin-top:40px;">
<a href="{{ url('daftar') }}"><button style="width:50%;float:left">Coba Aplikasi</button></a>
<a href="{{ url('code') }}"><button style="width:50%;float:left">Code Aplikasi</button></a>
	@yield('konten')

</div>
</body>
</html>