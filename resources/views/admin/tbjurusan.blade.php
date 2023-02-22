@extends('admin.admin')

@section('content')
	<h1 align="center">Jurusan</h1>
	<a href="/admin/jurusan/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Nama Jurusan</th>
				<th>Deskripsi</th>
				<th>Logo</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $jurusan)
			
			<tr>
				<td>{{ $jurusan -> jurusan }}</td>
				<td>{{ $jurusan -> deskripsi }}</td>
				<td><img src="/img/Jurusan/{{ $jurusan -> logo }}" id="myImg" width="100" alt="{{ $jurusan -> logo }}"></td>
				<td>
					<a href="/admin/jurusan/edit/{{ $jurusan -> idjurusan }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/jurusan/delete/{{ $jurusan -> idjurusan }}" method="POST" style="display: inline-block;">
					    <input type="hidden" name="_method" value="DELETE">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-outline-danger">Delete <i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			
			@empty
			
			<tr>
				<td colspan="4" align="center">- Tidak Ada Data -</td>
			</tr>

			@endforelse
		</tbody>
	</table>
@endsection