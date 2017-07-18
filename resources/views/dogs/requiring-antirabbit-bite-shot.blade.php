@extends('layouts.app')

@section('title', 'Trashed Dogs')

@section('content')
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Dogs Requiring AntiRabbit Bite Shot</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				@include('partials.sidebar')
			</div>
			<div class="col-sm-10">
				@if($dogs->count())
					@include('dogs.dogs')
				@endif
			</div>
		</div>
	</div>
@endsection
