@extends('layouts.app')
@section('title')
	Edit todo
@endsection
@section('content`')
	<form action="" method="post" class="mt-4 p-4">
		<div class="form-group m-3">
			<label for="name">Todo name here</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group m-3">
			<label for="description">Todo description here</label>
			<textarea type="text" name="description" class="form-control">Description here</textarea>
		</div>
		<div class="form-group m-3">
			<input type="submit" value="update", class="btn btn-primary float-end">
		</div>
	</form>
@endsection
