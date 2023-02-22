@extends('admin.admin')

@section('content')
	<h1 align="center">News (Edit)</h1>

	<a href="/admin/news"><button class="btn btn-outline-primary">< Back</button></a>
	<form enctype="multipart/form-data" action="/api/news/edit/{{ $stat -> idnews }}" method="POST">
		@method('PUT')
		<table class="table table-hover table-stripped">
			<input type="hidden" name="_method" value="PUT">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<tr>
				<th>Header</th>
				<td><input class="form-control" type="text" name="header" value="{{ $stat -> header }}"></td>
			</tr>

			<tr>
				<th>Subtitle</th>
				<td><input class="form-control" rows="3" style="resize: vertical;" name="subtitle" value="{{ $stat -> subtitle }}"></td>
			</tr>

			<tr>
				<th>Deskripsi</th>
				<td><textarea class="form-control" name="deskripsi" rows="3" style="resize: vertical;">{{ $stat -> deskripsi }}</textarea></td>
			</tr>

			<tr>
				<th>Created By</th>
				<td><input class="form-control" type="text" name="created_by" value="{{ $stat -> created_by }}"></td>
			</tr>

			<tr>
				<th>Gambar</th>
				<td><input class="form-control" type="file" name="gambar" value="{{ $stat -> gambar }}"></td>
			</tr>

			<tr>
				<th>Kategori</th>
				<td>
					<select name="kategori" class="form-control">
						@if($stat -> kategori == 'News')
						
						<option value="News" selected>News</option>
						<option value="Prestasi">Prestasi</option>

						@elseif($stat -> kategori == 'Prestasi')
						
						<option value="News">News</option>
						<option value="Prestasi" selected>Prestasi</option>

						@else

						<option value="News">News</option>
						<option value="Prestasi">Prestasi</option>

						@endif
					</select>
				</td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-warning btn-block">Edit <i class="fa fa-edit"></i></button>
	</form>
@endsection