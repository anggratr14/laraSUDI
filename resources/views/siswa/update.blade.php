<form action="{{ route('siswa.CreateUpdate',$siswa->nis) }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">	
		<input type="hidden" name="_method" value="put">	
		<input type="text" placeholder="NIS" name="nis" value="{{ $siswa->nis }}"> <br>
		<input type="text" placeholder="Nama" name="nama" value="{{ $siswa->nama }}"> <br>
		<input type="text" placeholder="No tlp" name="no_tlp" value="{{ $siswa->no_tlp }}">
		<br>		
		<input type="submit" value="Simpan">
</form>