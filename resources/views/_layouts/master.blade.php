
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>My Blog</title>

	
	<!-- Load complied SASS files -->
	<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

	</head>

	<body>

		@include('_partials.nav')

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					@include('_partials/messages')

					@yield('content')
				</div>
				<div class="col-md-4">
					@include('_partials/sidebar')

					@include('_partials/tag_sidebar')

					@include('_partials/date_sidebar')
				</div>
			</div><!--end row -->

		</div><!-- /.container -->


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	

</body>
</html>
