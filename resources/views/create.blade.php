@extends('layouts.app')

@section('title')
	Create Todo
@endsection

@section('content')
	<x-navbar />
	<div class="container">
		<form action="/store" method="post" class="mt-4 p-4">
			@csrf
			<div class="form-group m-3">
				<label for="name">Todo Name</label>
				<input type="text" class="form-control" name="name" required autocomplete="off">
			</div>
			<div class="form-group m-3">
				<label for="description">Description</label>
				<input type="text" class="form-control" name="description" required autocomplete="off">
			</div>
			<div class="form-group m-3">
				<button type="submit" class="btn btn-primary float-end">Submit</button>
			</div>
		</form>
	</div>
@endsection
