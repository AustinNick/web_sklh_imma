@extends('admin.admin')

@section('content')

	<h1 align="center">User</h1>
	<a href="/admin/user/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>

	<table class="table table-hover table-striped">
	
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Nis</th>
				<th>Nisn</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Alamat</th>
				<th>Telp</th>
				<th>Email</th>
				<th>Angkatan</th>
				<th>Status</th>
				<th>Aktif</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $user)

			<tr>
				<td>{{ $user -> iduser }}</td>
				<td>{{ $user -> nisn }}</td>
				<td>{{ $user -> nama }}</td>
				<td>{{ $user -> kelas }}</td>
				<td>{{ $user -> jurusan }}</td>
				<td>{{ $user -> alamat }}</td>
				<td>{{ $user -> telp }}</td>
				<td>{{ $user -> email }}</td>
				<td>{{ $user -> angkatan }}</td>
				<td>{{ $user -> status }}</td>
				<td>{{ $user -> aktif }}</td>
				<td>
					<a href="/admin/user/edit/{{ $user -> iduser }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/user/delete/{{ $user -> iduser }}" method="POST" style="display: inline-block;">
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