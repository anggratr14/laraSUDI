<form action="{{ route('siswa.CreateAdd') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
		<input type="text" placeholder="NIS" name="nis"> <br>
		<input type="text" placeholder="Nama" name="nama"> <br>
		<input type="text" placeholder="No tlp" name="no_tlp">
		<br>		
		<input type="submit" value="Simpan">
</form>