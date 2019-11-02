<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('siswa.update',$siswa->nis) }}" method="POST">
        {{ method_field('PUT') }}        	
        {{ csrf_field() }}	
		<input type="text" placeholder="NIS" value="{{ $siswa->nis }}" name="nis"> <br>
		<input type="text" placeholder="Nama" value="{{ $siswa->nama }}" name="nama"> <br>
		<input type="text" placeholder="No tlp" value="{{ $siswa->no_tlp }}" name="no_tlp">
		<br>		
		<input type="submit" value="Update">
	</form>	
</body>
</html>