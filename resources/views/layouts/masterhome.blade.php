	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resto - Broto</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

	<!--Icons-->
	

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body style="margin-right:-20px;" id="home">
		<div id="home">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					@if(Request::path() == 'login')
						<a class="navbar-brand" href="#"><span>Resto Broto</span> Embeded Technology</a>
					@else
						<a class="navbar-brand" href="#"><span>Broto</span>Pelayan</a>
					@endif
                    
				</div>		
			</div><!-- /.container-fluid -->
		</nav>


		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            @yield('content')
		</div>	<!--/.main-->

		<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/chart.min.js') }}"></script>
		<script src="{{ asset('/js/chart-data.js') }}"></script>
		<script src="{{ asset('/js/easypiechart.js') }}"></script>
		<script src="{{ asset('/js/easypiechart-data.js') }}"></script>
		<script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
		<script>
			$('#calendar').datepicker({
			});

			!function ($) {
				$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
					$(this).find('em:first').toggleClass("glyphicon-minus");      
				}); 
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>	
		</div>
	</body>

	</html>
