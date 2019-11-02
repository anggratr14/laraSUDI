@extends("layouts.app")
@section("content")
<table border="1">
	<tr>
		<td><a href="{{route('siswa.Add')}}">Add</a></td>
	</tr>
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>No. Tlp</th>
		<th>Tools</th>
	</tr>
	@foreach($siswa as $s)
		<tr>
			<th>{{ $s->nis }}</th>
			<th>{{ $s->nama }}</th>
			<th>{{ $s->no_tlp }}</th>
			<th>
				<a href="{{route('siswa.Update',$s->nis)}}">Edit</a>
				<a href="{{route('siswa.Delete',$s->nis)}}">Delete</a>
			</th>
		</tr>
	@endforeach 
</table>
@endsection