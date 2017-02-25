@extends('layouts.app')
@section('content')

<div class="container">
	<div class="jumbotron">
		<h2>Selamat Datang {{ Auth::user()->name }}  !</h2>
		<p>Selamat menikmati layanan kami</p>
		<p>
		<a class="btn btn-lg btn-primary" href="{{ url('/parkir') }}" role="button">Home &raquo;</a>
   		</p>
	</div>
</div>

@stop