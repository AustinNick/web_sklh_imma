@extends('admin.admin')

@section('content')
	<h1 align="center">Karya Siswa</h1>
	<a href="/admin/karyasiswa/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Judul Proyek</th>
				<th>Anggota</th>
				<th>Gambar</th>
				<th>Link Proyek</th>
				<th>Kateogri</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $karyasiswa)
			
			<tr>
				<td>{{ $karyasiswa -> judul_proyek }}</td>
				<td>{{ $karyasiswa -> anggota }}</td>
				<td><img src="/img/Karya Siswa/{{ $karyasiswa -> gambar }}" id="myImg" width="100" alt="{{ $karyasiswa -> gambar }}"></td>
				<td><a href="{{ $karyasiswa -> link_proyek }}" target="_blank">{{ $karyasiswa -> link_proyek }}</a></td>
				<td>{{ $karyasiswa -> kategori }}</td>
				<td>
					<a href="/admin/karyasiswa/edit/{{ $karyasiswa -> id }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/karyasiswa/delete/{{ $karyasiswa -> id }}" method="POST" style="display: inline-block;">
					    <input type="hidden" name="_method" value="DELETE">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-outline-danger">Delete <i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			
			@empty
			
			<tr>
				<td colspan="6" align="center">- Tidak Ada Data -</td>
			</tr>

			@endforelse
		</tbody>
	</table>
@endsection