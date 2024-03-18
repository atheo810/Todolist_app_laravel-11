@extends('layouts.app')
@section('title')
	Details
@endsection
@section('content')
	<x-navbar />
	<div class="container">
		<div class="card text-center mt-5">
			<div class="card-header">
				<b>Todo Details</b>
			</div>
		</div>
		<div class="card-body">
			<h5 class="card-title">{{ $todo[0]->name }}</h5>
			<p class="card-text">{{ $todo[0]->description }}</p>
			<div class="d-flex flex-row">
				<a href="{{ route('edit', $todo[0]->id) }}"><span class="btn btn-primary me-2">Edit</span></a>
				<form action="{{ route('delete', $todo[0]->id) }}" method="post">
					@csrf
					@method('DELETE')
					<button type="submit" name="submit" id="submit" class="btn btn-danger">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection
