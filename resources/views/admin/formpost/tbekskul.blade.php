@extends('admin.admin')

@section('content')
	<h1 align="center">Ekskul (Post)</h1>

	<a href="/admin/ekskul"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/ekskul/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Nama Ekskul</th>
				<td><input class="form-control" type="text" name="nama_ekskul"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" style="resize: vertical;" rows="3" name="deskripsi"></textarea></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
