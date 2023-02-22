@extends('admin.admin')

@section('content')
	<h1 align="center">Karya Siswa (Edit)</h1>

	<a href="/admin/karyasiswa"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/karyasiswa/edit/{{ $stat -> id }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Judul Proyek</th>
				<td><input class="form-control" type="text" name="judul_proyek" value="{{ $stat -> judul_proyek }}"></td>
			</tr>

			<tr>
				<th>Anggota</th>
				<td><input class="form-control" name="anggota" value="{{ $stat -> anggota }}"></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar" value="{{ $stat -> gambar }}"></td>
			</tr>

			<tr>
				<th>Link Proyek</th>
				<td><input class="form-control" type="text" name="link_proyek" value="{{ $stat -> link_proyek }}"></td>
			</tr>

			<tr>
				<th>Kategori</th>
				<td><input class="form-control" type="text" name="kategori" value="{{ $stat -> kategori }}"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection