@extends('admin.admin')

@section('content')
	<h1 align="center">Contact</h1>
	<a href="/admin/contact/create"><button class="btn btn-outline-success"><i class="fa fa-plus"></i></button></a>
	<br>
	<br>
	
	<table class="table table-hover table-striped">
		<thead style="color: white; background: #212529" class="thead-dark">
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>No HP</th>
				<th>Pesan</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody class="table-hover table-striped">
			@forelse($stat as $contact)
			
			<tr>
				<td>{{ $contact -> nama }}</td>
				<td>{{ $contact -> email }}</td>
				<td>{{ $contact -> hp }}</td>
				<td>{{ $contact -> pesan }}</td>
				<td>{{ $contact -> status }}</td>
				<td>
					<a href="/admin/contact/edit/{{ $contact -> no }}" style="display: inline-block;"><button type="submit" class="btn btn-outline-primary">Balas <i class="fa fa-edit"></i></button></a>

					<form action="/api/contact/delete/{{ $contact -> no }}" method="POST" style="display: inline-block;">
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