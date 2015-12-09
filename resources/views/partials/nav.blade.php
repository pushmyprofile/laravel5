<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"> My Blog site</a>
			</div>
			<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			<li class="active">
			<a href="{{ route('blogs.index') }}">Blogs</a></li>
			<li><a href="{{ route('blogs.create') }}">Create</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ route('register') }}">Sign Up</a></li>
			<li><a href="{{ route('login') }}">Login</a></li>
			</ul>
			</div>
			</div>
			</nav>