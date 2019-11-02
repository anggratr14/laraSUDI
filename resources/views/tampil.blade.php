<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('siswa.store') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
		<input type="text" placeholder="NIS" name="nis"> <br>
		<input type="text" placeholder="Nama" name="nama"> <br>
		<input type="text" placeholder="No tlp" name="no_tlp">
		<br>		
		<input type="submit" value="Simpan">
	</form>
	<hr>
	<table border="1">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama</th>
				<th>Tlp</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($siswa as $siswa)
				<tr>
					<td>{{ $siswa->nis }}</td>
					<td>{{ $siswa->nama }}</td>
					<td>{{ $siswa->no_tlp }}</td>
					<td>
						<a href="{{ route('siswa.edit',$siswa->nis) }}">Edit</a>
						<form action="{{ route('siswa.delete',$siswa->nis) }}" method="POST">
							{{ method_field('DELETE') }}        	
        					{{ csrf_field() }}
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>