@extends('layouts.app')
@section('title')
	Edit todo
@endsection
@section('content')
	<x-navbar />
	<div class="container">
		<form action="{{ route('update', $todo[0]->id) }}" method="post" class="mt-4 p-4">
			@csrf
			@method('PUT')
			<div class="form-group m-3">
				<label for="name">Todo name here</label>
				<input type="text" name="name" class="form-control" value="{{ $todo[0]->name }}" autocomplete="off">
			</div>
			<div class="form-group m-3">
				<label for="description">Todo description here</label>
				<textarea type="text" name="description" class="form-control">{{ $todo[0]->description }}</textarea>
			</div>
			<div class="form-group m-3">
				<input type="submit" value="update", class="btn btn-primary float-end">
			</div>
		</form>
	</div>
@endsection
