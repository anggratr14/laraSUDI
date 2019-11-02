<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('siswa.store') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		input		
		<input type="submit" value="Simpan">
	</form>
</body>
</html>