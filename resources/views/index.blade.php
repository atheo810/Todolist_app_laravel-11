@extends('layouts.app')

@section('title')
	My todo App
@endsection
@section('content')
	<div class="row mt-3">
		<div class="col-12 align-self-center">
			<ul class="list-group">
				@if ($todos->count() === 0)
					<li class="list-group-item"><span>No Todo Available</span></li>
				@else
					@foreach ($todos as $todo)
						<li class="list-group-item"><a href="{{ route('details', $todo->id) }}">{{ $todo->name }}</a></li>
					@endforeach
				@endif
			</ul>
		</div>
	</div>
@endsection
