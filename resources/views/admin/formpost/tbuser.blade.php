@extends('admin.admin')

@section('content')
	<h1 align="center">User (Post)</h1>

	<a href="/admin/user"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/user/tambah" method="POST">
		<table class="table table-hover">
			<tr>
				<th>Id User (NIS)</th>
				<td><input class="form-control" type="text" name="iduser"></td>
			</tr>

			<tr>
				<th>NISN</th>
				<td><input class="form-control" type="number" name="nisn"></td>
			</tr>

			<tr>
				<th>Nama</th>
				<td><input class="form-control" type="text" name="nama"></td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td><input class="form-control" type="text" name="kelas"></td>
			</tr>

			<tr>
				<th>Jurusan</th>
				<td>
					<select name="jurusan" class="form-control">
						@forelse($jurusan as $jr)
							<option>Pilih Jurusan</option>
							<option value="{{ $jr -> jurusan }}">{{ $jr -> jurusan }} ({{ $jr -> jurusan }})</option>
						@empty
							<option disabled>Tidak Ada Data</option>
						@endforelse
					</select>
				</td>
			</tr>

			<tr>
				<th>Alamat</th>
				<td><input class="form-control" type="text" name="alamat"></td>
			</tr>

			<tr>
				<th>Telp</th>
				<td><input class="form-control" type="text" name="telp"></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><input class="form-control" type="text" name="email"></td>
			</tr>

			<tr>
				<th>Angkatan</th>
				<td><input class="form-control" type="text" name="angkatan"></td>
			</tr>

			<tr>
				<th>Status</th>
				<td><input class="form-control" type="text" name="status"></td>
			</tr>

			<tr>
				<th>Aktif</th>
				<td>
					<select class="form-control" name="aktif">
						<option value="Y">Y</option>
						<option value="N">N</option>
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
