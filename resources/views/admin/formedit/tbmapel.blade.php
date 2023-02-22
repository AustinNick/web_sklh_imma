@extends('admin.admin')

@section('content')
	<h1 align="center">Mapel (Edit)</h1>

	<a href="/admin/mapel"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/mapel/edit/{{ $stat -> kodemapel }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Kode Mapel</th>
				<td><input class="form-control" type="text" name="kodemapel" value="{{ $stat -> kodemapel }}" disabled></td>
			</tr>

			<tr>
				<th>Mapel</th>
				<td><input class="form-control" type="text" name="mapel" value="{{ $stat -> mapel }}"></td>
			</tr>

			<tr>
				<th>Id Guru</th>
				<td><input class="form-control" type="text" name="id_guru" value="{{ $stat -> id_guru }}"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection