@extends('admin.admin')

@section('content')
	<h1 align="center">History Siswa</h1>
	<a href="/admin/historysiswa/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Kode User</th>
				<th>Tahun</th>
				<th>Kelas</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $historysiswa)
			
			<tr>
				<td>{{ $historysiswa -> kodeuser }}</td>
				<td>{{ $historysiswa -> tahun }}</td>
				<td>{{ $historysiswa -> kelas }}</td>
				<td>{{ $historysiswa -> deskripsi }}</td>
				<td>
					<a href="/admin/historysiswa/edit/{{ $historysiswa -> kodeuser }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/historysiswa/delete/{{ $historysiswa -> kodeuser }}" method="POST" style="display: inline-block;">
					    <input type="hidden" name="_method" value="DELETE">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-outline-danger">Delete <i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			
			@empty
			
			<tr>
				<td colspan="5" align="center">- Tidak Ada Data -</td>
			</tr>

			@endforelse
		</tbody>
	</table>
@endsection