@extends('admin.admin')

@section('content')
	<h1 align="center">News (Post)</h1>

	<a href="/admin/news"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/news/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Header</th>
				<td><input class="form-control" type="text" name="header"></td>
			</tr>

			<tr>
				<th>Subtitle</th>
				<td><input class="form-control" name="subtitle"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" name="deskripsi" rows="3" style="resize: vertical;"></textarea></td>
			</tr>

			<tr>
				<th>Created By</th>
				<td><input class="form-control" type="text" name="created_by"></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar"></td>
			</tr>

			<tr>
				<th>Kategori</th>
				<td>
					<select name="kategori" class="form-control">
						<option value="news">News</option>
						<option value="prestasi">Prestasi</option>
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
