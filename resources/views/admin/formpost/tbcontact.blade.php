@extends('admin.admin')

@section('content')
	<h1 align="center">Contact (Post)</h1>

	<a href="/admin/contact"><button class="btn btn-outline-primary">< Back</button></a>
	<form action="/api/contact/tambah" method="POST">
		<table class="table table-hover table-stripped">
			<tr>
				<th>Nama</th>
				<td><input class="form-control" type="text" name="nama"></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>

			<tr>
				<th>No Hp</th>
				<td><input class="form-control" type="number" name="hp"></td>
			</tr>

			<tr>
				<th>Pesan</th>
				<td class="form-group"><textarea class="form-control" style="resize: vertical;" rows="3" type="text" name="pesan"></textarea></td>
			</tr>
		</table>

		<button type="submit" class="btn btn-outline-success btn-block">Submit <i class="fa fa-plus"></i></button>
	</form>
@endsection
