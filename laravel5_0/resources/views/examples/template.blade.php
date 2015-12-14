@extends('examples.layout')

@section('title')
	App Laravel Luis 
@stop

@section('content')

	<h1>App de Lravel 5</h1>
	<p>

		@if(isset ($user))
			Bienvenido {{$user}}
		@else
			[Login]
		@endif
	</p>
@stop

