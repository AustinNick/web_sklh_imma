@extends('admin.admin')

@section('content')

	<h1 align="center">Download</h1>
	<a href="/admin/download/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>

	<table class="table table-hover table-striped">
	
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Judul</th>
				<th>Nama File</th>
				<th>Deskripsi</th>
				<th>Kode Mapel</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $down)

			<tr>
				<td>{{ $down -> id }}</td>
				<td>{{ $down -> judul }}</td>
				<td><a href="/file/{{ $down -> nama_file }}" target="blank">{{ $down -> nama_file }}</a></td>
				<td>{{ $down -> deskripsi }}</td>
				<td>{{ $down -> kode_mapel }}</td>
				<td>
					<a href="/admin/download/edit/{{ $down -> id }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/download/delete/{{ $down -> id }}" method="POST" style="display: inline-block;">
					    <input type="hidden" name="_method" value="DELETE">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-outline-danger">Delete <i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			
			@empty
			
			<tr>
				<td colspan="12" align="center">- Tidak Ada Data -</td>
			</tr>

			@endforelse
		</tbody>
	</table>
@endsection