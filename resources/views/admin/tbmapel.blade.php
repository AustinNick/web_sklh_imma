@extends('admin.admin')

@section('content')

	<h1 align="center">Mapel</h1>
	<a href="/admin/mapel/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>

	<table class="table table-hover table-striped">
	
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Kode Mapel</th>
				<th>Mapel</th>
				<th>Id Guru</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $mapel)

			<tr>
				<td>{{ $mapel -> kodemapel }}</td>
				<td>{{ $mapel -> mapel }}</td>
				<td>{{ $mapel -> id_guru }}</td>
				<td>
					<a href="/admin/mapel/edit/{{ $mapel -> kodemapel }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/mapel/delete/{{ $mapel -> kodemapel }}" method="POST" style="display: inline-block;">
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