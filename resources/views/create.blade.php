@extends('layouts.app')

@section('title')
	Create Todo
@endsection

@section('content')
	<form action="" method="post" class="mt-4 p-4">
		<div class="form-group m-3">
			<label for="name">Todo Name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group m-3">
			<label for="description">Description</label>
			<input type="text" class="form-control" name="description">
		</div>
		<div class="form-group m-3">
			<input type="submit" value="submit" class="btn btn-primary float-end">
		</div>
	</form>
@endsection
