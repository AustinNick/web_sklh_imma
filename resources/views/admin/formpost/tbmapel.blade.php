@extends('admin.admin')

@section('content')
	<h1 align="center">Mapel (Post)</h1>

	<a href="/admin/mapel"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/mapel/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Kode Mapel</th>
				<td><input class="form-control" type="text" name="kodemapel" placeholder="Kode Mapel"></td>
			</tr>

			<tr>
				<th>Mapel</th>
				<td><input class="form-control" type="text" name="mapel" placeholder="Mapel"></td>
			</tr>

			<tr>
				<th>Id Guru</th>
				<td><input class="form-control" type="text" name="id_guru" placeholder="Id Guru"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
