<nav class="navbar bg-body-tertiary">
	<div class="container-fluid">
		<div class="navbar-brand mb-0 h1">
			<a href="/" class="link-underline link-underline-opacity-0"><span class="navbar-brand mb-0 h1">Todo App</span></a>
		</div>
		<div class="d-flex">
			<a href="/create"><span class="btn btn-primary me-3">Create Todo</span></a>
			<form action="{{ route('logout') }}" method="post">
				@csrf
				<button type="submit" name="submit" id="submit" class="btn btn-primary">Logout</button>
			</form>
		</div>

	</div>
</nav>
