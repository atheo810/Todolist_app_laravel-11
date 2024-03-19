@extends('layouts.app')
@section('content')
	{{-- container --}}
	<div class="container d-flex justify-content-center align-items-center min-vh-100 ">
		{{-- Login container --}}
		<div class="row rounded border rounder-5 p-3 bg-white shadow box-area bg-info-subtle">
			{{-- Left Box --}}
			<div class="col-md-6 d-flex justify-content-center">
				<img src="{{ asset('assets/img/eris-boreas.webp') }}" alt="" class="img-fluid rounded" style="height: 400px">
			</div>
			{{-- Right Box --}}
			<div class="col-md-6 right-box d-flex justify-content-center align-items-center">
				<div>
					<div class="mb-4 text-align-center">
						<h1>Atheo Todo List App</h1>
					</div>
					<form action="{{ route('register.post') }}" method="post">
						@csrf
						<div class="input-group mb-4">
							<input type="text" name="name" id="name" class="form-control form-control-lg bg-light fs-6"
								placeholder="Name" autocomplete="off">
						</div>
						<div class="input-group mb-4">
							<input type="text" name="email" id="email" class="form-control form-control-lg bg-light fs-6"
								placeholder="Email Address" autocomplete="off">
						</div>
						<div class="input-group mb-4">
							<input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6"
								placeholder="Password" autocomplete="off">
						</div>
						<div class="input-group mb-4">
							<input type="password" name="password_confirmation" id="password_confirmation"
								class="form-control form-control-lg bg-light fs-6" placeholder="Re-type Password" autocomplete="off">
						</div>
						<button type="submit" name="submit" id="submit" class="btn btn-primary w-100">Register</button>
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
