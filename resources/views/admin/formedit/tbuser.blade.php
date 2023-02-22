@extends('admin.admin')

@section('content')
	<h1 align="center">User (Edit)</h1>

	<a href="/admin/user"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/user/edit/{{ $stat -> iduser }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Id User (NIS)</th>
				<td><input class="form-control" type="text" disabled value="{{ $stat -> iduser }}"></td>
			</tr>

			<tr>
				<th>NISN</th>
				<td><input class="form-control" type="number" name="nisn" value="{{ $stat -> nisn }}"></td>
			</tr>

			<tr>
				<th>Nama</th>
				<td><input class="form-control" type="text" name="nama" value="{{ $stat -> nama }}"></td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td><input class="form-control" type="text" name="kelas" value="{{ $stat -> kelas }}"></td>
			</tr>

			<tr>
				<th>Jurusan</th>
				<td>
					<select name="jurusan" class="form-control">
						@forelse($jurusan as $jr)
							@if($stat -> jurusan == $jr -> jurusan)
							<option value="{{ $jr -> jurusan }}" selected>{{ $jr -> jurusan }}</option>
							@else
							<option value="{{ $jr -> jurusan }}">{{ $jr -> jurusan }}</option>
							@endif
						@empty
							<option disabled>Tidak Ada Data</option>
						@endforelse
					</select>
				</td>
			</tr>

			<tr>
				<th>Alamat</th>
				<td><input class="form-control" type="text" name="alamat" value="{{ $stat -> alamat }}"></td>
			</tr>

			<tr>
				<th>Telp</th>
				<td><input class="form-control" type="text" name="telp" value="{{ $stat -> telp }}"></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><input class="form-control" type="text" name="email" value="{{ $stat -> email }}"></td>
			</tr>

			<tr>
				<th>Angkatan</th>
				<td><input class="form-control" type="text" name="angkatan" value="{{ $stat -> angkatan }}"></td>
			</tr>

			<tr>
				<th>Status</th>
				<td><input class="form-control" type="text" name="status" value="{{ $stat -> status }}"></td>
			</tr>

			<tr>
				<th>Aktif</th>
				<td>
					<select name="aktif" class="form-control">						
						@if($stat -> aktif == "Y")
						
						<option value="Y" selected>Y</option>
						<option value="N">N</option>
						
						@elseif($stat -> aktif == "N")

						<option value="Y">Y</option>
						<option value="N" selected>N</option>

						@else

						<option value="Y">Y</option>
						<option value="N">N</option>

						@endif
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection