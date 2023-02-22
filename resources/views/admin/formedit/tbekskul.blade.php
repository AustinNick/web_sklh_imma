@extends('admin.admin')

@section('content')
	<h1 align="center">Ekskul (Edit)</h1>

	<a href="/admin/ekskul"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/ekskul/edit/{{ $stat -> idekskul }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Nama Ekskul</th>
				<td><input class="form-control" type="text" name="nama_ekskul" value="{{ $stat -> nama_ekskul }}"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" rows="3" style="resize: vertical;" name="deskripsi">{{ $stat -> deskripsi }}</textarea></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar" value="{{ $stat -> gambar }}"></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection