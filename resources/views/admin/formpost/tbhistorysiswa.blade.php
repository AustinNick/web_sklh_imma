@extends('admin.admin')

@section('content')
	<h1 align="center">History Siswa (Post)</h1>

	<a href="/admin/historysiswa"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/historysiswa/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Kode User</th>
				<td><input class="form-control" type="text" name="kodeuser"></td>
			</tr>

			<tr>
				<th>Tahun</th>
				<td><input class="form-control" type="year" name="tahun"></td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td><input class="form-control" type="text" name="kelas"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" type="text" name="deskripsi" style="resize: vertical;"></textarea></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
