@extends('template')
@section('content')

<h2>Detail</h2>

<table class="table table-bordered">
	<tr>
		<th>No Polisi</th>
		<th>Jenis Kendaraan</th>
		<th>Jam Masuk</th>
	</tr>
	<tr>
		<td>{{ $parkir->no_pol }}</td>
		<td>{{ $parkir->jenis_kendaraan }}</td>
		<td>{{ $parkir->created_at }}</td>
	</tr>
	<tr>
		<td colspan="2">
			{!! link_to('parkir','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
		</td>
	</tr>
</table>

@stop