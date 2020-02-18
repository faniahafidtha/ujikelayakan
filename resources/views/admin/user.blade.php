@extends('adminlte::page')

@section('content')
	<div class="box-body">
		<table class="table table-striped table-hover" id="user-table">
			<thead>
				<th>Nama</th>
				<th>Email</th>
			</thead>
			<tbody>
				@foreach ($user as $key => $value)
				<tr>
					<th>{{ $value->name }}</th>
					<th>{{ $value->email }}</th>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
@endsection