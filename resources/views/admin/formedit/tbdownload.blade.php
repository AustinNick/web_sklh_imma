@extends('admin.admin')

@section('content')
	<h1 align="center">Download (Edit)</h1>

	<a href="/admin/download"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/download/edit/{{ $stat -> id }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Judul</th>
				<td><input class="form-control" type="text" name="judul" value="{{ $stat -> judul }}"></td>
			</tr>

			<tr>
				<th>Nama File</th>
				<td><input type="file" class="form-control" name="nama_file" value="{{ $stat -> nama_file }}"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><input class="form-control" type="text" name="deskripsi" value="{{ $stat -> deskripsi }}"></td>
			</tr>

			<tr>
				<th>Kode Mapel</th>
				<td>
					<select name="kode_mapel" class="form-control">
						@forelse($mapel as $mp)
							<option>Pilih Mapel</option>
							@if($mp -> kodemapel == $stat -> kode_mapel)
							<option value="{{ $mp -> kodemapel }}" selected>{{ $mp -> mapel }} ({{ $mp -> kodemapel }})</option>\
							@else
							<option value="{{ $mp -> kodemapel }}">{{ $mp -> mapel }} ({{ $mp -> kodemapel }})</option>\
							@endif
						@empty
							<option disabled>Tidak Ada Data</option>
						@endforelse
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection