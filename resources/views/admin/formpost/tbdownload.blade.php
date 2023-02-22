@extends('admin.admin')

@section('content')
	<h1 align="center">Download (Post)</h1>

	<a href="/admin/download"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/download/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Judul</th>
				<td><input class="form-control" type="text" name="judul" placeholder="Judul"></td>
			</tr>

			<tr>
				<th>Nama File</th>
				<td><input type="file" class="form-control" name="nama_file"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi"></td>
			</tr>

			<tr>
				<th>Kode Mapel</th>
				<td>
					<select name="kode_mapel" class="form-control">
						@forelse($mapel as $mp)
							<option>Pilih Mapel</option>
							<option value="{{ $mp -> kodemapel }}">{{ $mp -> mapel }} ({{ $mp -> kodemapel }})</option>
						@empty
							<option disabled>Tidak Ada Data</option>
						@endforelse
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
