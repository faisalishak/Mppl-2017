	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Broto - Pelayan</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

	<!--Icons-->
	<script src="{{ asset('/js/lumino.glyphs.js') }}"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<input id="id-user" type="hidden" value="{{ Auth::user()->id }}"></input>

	</head>

	@if( Auth::user()->role == 'pelayan' )
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

                    <a class="navbar-brand" href="#"><span>Broto</span>Pelayan</a>

					<ul class="user-menu">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
							</ul>
						</li>
                    @endif
					</ul>
				</div>		
			</div><!-- /.container-fluid -->
		</nav>

        @if (!Auth::guest())	
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
				<div class="form-group">
					
				</div>
			</form>
			<ul class="nav menu">
				<li class="{{ Request::path() == 'pelayan' ? 'active':''}}"><a href="{{ Request::path() == url('/pelayan') ? '#' : url('/pelayan') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Ketersediaan Meja</a></li>   
                <!--<li class="{{ Request::path() == 'tambahpesanan' ? 'active':''}}"><a href="{{ Request::path() == 'tambahpesanan' ? '#':'tambahpesanan'}}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg></svg> Tambah Pesanan</a></li>-->
				<li class="{{ Request::path() == 'pesanansiap' ? 'active':''}}"><a href="{{ Request::path() == url('/pesanansiap') ? '#' : url('/pesanansiap') }}"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg> Pesanan Siap  <span class="notification badge panel-red">0<span></a></li>

			</ul>

		</div><!--/.sidebar-->
        @endif    

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
		<script>
			$(function(){
				realtimeMethodNotification();
			});

			function realtimeMethodNotification(){
				var id = $('#id-user').val();

				$.ajax({
					url:'{{ url("pelayannotification") }}',    
					data:{_token: '{{ csrf_token() }}',
							id:id},
					success:function(data){
						$('.notification').replaceWith('<span class="notification badge panel-red">'+ data +'<span>');
						setTimeout(realtimeMethodNotification, 1000);
					},
					error:function(){
						setTimeout(realtimeMethodNotification, 1000);
					}
				});
			}
		</script>
	</body>
	@endif

	</html>
