@extends('admin.admin')

@section('content')
	<h1 align="center">Ekskul</h1>
	<a href="/admin/ekskul/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Nama Ekskul</th>
				<th>Deskripsi</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $ekskul)
			
			<tr>
				<td>{{ $ekskul -> nama_ekskul }}</td>
				<td>{{ $ekskul -> deskripsi }}</td>
				<td><img src="/img/Ekskul/{{ $ekskul -> gambar }}" id="myImg" width="100" alt="{{ $ekskul -> gambar }}"></td>
				<td>
					<a href="/admin/ekskul/edit/{{ $ekskul -> idekskul }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/ekskul/delete/{{ $ekskul -> idekskul }}" method="POST" style="display: inline-block;">
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