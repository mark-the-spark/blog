<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('home') }}">Blog</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				
				@if (Auth::check())					
					<li><a href="{{ url('/create') }}">Create Article</a></li>
				@endif
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
					@if (Auth::check()) 
						<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						<li><a href="#">Current User: {{ Auth::user()->name }}</a></li>
					@else
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="#">Welcome Guest!</a></li>
					@endif
				</a></li>
			</ul>

		</div><!--/.nav-collapse -->
	</div>
</nav>