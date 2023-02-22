@extends('admin.admin')

@section('content')
	<h1 align="center">News</h1>
	<a href="/admin/news/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Header</th>
				<th>Subtitle</th>
				<th>Deskripsi</th>
				<th>Created By</th>
				<th>Gambar</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $news)
			
			<tr>
				<td>{{ $news -> header }}</td>
				<td>{{ $news -> subtitle }}</td>
				<td>{{ $news -> deskripsi }}</td>
				<td>{{ $news -> created_by }}</td>
				<td>
					<img src="/img/News/{{ $news -> gambar }}" id="myImg" width="100" alt="{{ $news -> gambar }}">
				</td>
				<td>{{ $news -> kategori }}</td>
				<td>
					<a href="/admin/news/edit/{{ $news -> idnews }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-warning">Edit <i class="fa fa-edit"></i></button></a>

					<form action="/api/news/delete/{{ $news -> idnews }}" method="POST" style="display: inline-block;">
					    <input type="hidden" name="_method" value="DELETE">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-outline-danger">Delete <i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			
			@empty
			
			<tr>
				<td colspan="7" align="center">- Tidak Ada Data -</td>
			</tr>

			@endforelse
		</tbody>
	</table>
@endsection