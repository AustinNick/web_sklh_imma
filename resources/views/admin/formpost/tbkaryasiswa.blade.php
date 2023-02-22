@extends('admin.admin')

@section('content')
	<h1 align="center">Karya Siswa (Post)</h1>

	<a href="/admin/karyasiswa"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/karyasiswa/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Judul Proyek</th>
				<td><input class="form-control" type="text" name="judul_proyek"></td>
			</tr>

			<tr>
				<th>Anggota</th>
				<td><input type="text" class="form-control" style="resize: vertical;" name="anggota"></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar"></td>
			</tr>

			<tr>
				<th>Link Proyek</th>
				<td><input class="form-control" type="text" name="link_proyek"></td>
			</tr>

			<tr>
				<th>Kategori</th>
				<td><input class="form-control" type="text" name="kategori"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
