@extends('admin.admin')

@section('content')
	<h1 align="center">History Siswa (Edit)</h1>

	<a href="/admin/historysiswa"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/historysiswa/edit/{{ $stat -> kodeuser }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Kode User</th>
				<td><input class="form-control" type="text" name="kodeuser" value="{{ $stat -> kodeuser }}" disabled></td>
			</tr>

			<tr>
				<th>Tahun</th>
				<td><input class="form-control" type="year" name="tahun" value="{{ $stat -> tahun }}"></td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td><input class="form-control" type="text" name="kelas" value="{{ $stat -> kelas }}"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" type="text" name="deskripsi" style="resize: vertical;">{{ $stat -> deskripsi }}</textarea></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection