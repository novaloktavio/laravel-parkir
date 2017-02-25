@extends('template')
@section('content')

<h1> Input Parkir </h1>
{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'parkir')) !!}


<table class="table table-bordered" action="/kendaraan" method="post">
	<tr>
		<td>No Polisi</td>
		<td>{!! Form::text('no_pol',null,['class'=>'form-control']) !!}</td>
	</tr>
	<tr>
		<td>Jenis Kendaraan</td>
		<td>{!! Form::text('jenis_kendaraan',null,['class'=>'form-control']) !!}</td>
	</tr>
	<tr>
		<td colspan="2">
			{!! Form::submit('Submit',['class'=>'btn btn-danger btn-sm']) !!}
			{!! link_to('parkir','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
		</td>
	</tr>
</table>

{!! Form::close() !!}

@stop