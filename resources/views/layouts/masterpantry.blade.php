	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @if (Auth::guest())
        <title>RestoBroto</title>
    @else
         @if (Auth::user()->role == 'koki')
            <title>Broto - Koki</title>
        @elseif (Auth::user()->role == 'pantry')
            <title>Broto - Pantry</title>
        @endif 
    @endif

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap-table.css') }}" rel="stylesheet"> 
	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

	<!--Icons-->
	<script src="{{ asset('/js/lumino.glyphs.js') }}"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	@if( Auth::user()->role == 'pantry' )
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

                   @if (Auth::guest())
                     <a class="navbar-brand" href="#"><span>Resto</span>Broto</a>
                   @else
                        @if (Auth::user()->role == 'koki')
                            <a class="navbar-brand" href="#"><span>Broto</span>Koki</a>
                        @elseif (Auth::user()->role == 'pantry')
                            <a class="navbar-brand" href="#"><span>Broto</span>Pantry</a>
                        @endif  
                   @endif     

					<ul class="user-menu">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
								<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
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
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
			<ul class="nav menu">
				<li class="{{ Request::path() == 'tambahbahanbaku' ? 'active':''}}"><a href="{{ Request::path() == 'tambahbahanbaku' ? '#':'tambahbahanbaku'}}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Bahan Baku <span class="badge panel-red"></span></a></li>
				<hr>
				<li class="{{ Request::path() == 'pantry' ? 'active':''}}"><a href="{{ Request::path() == 'pantry' ? '#':'pantry'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Rempah <span class="notification1 badge panel-red"></span></a></li>
				<li class="{{ Request::path() == 'sayuran' ? 'active':''}}"><a href="{{ Request::path() == 'sayuran' ? '#':'sayuran'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Sayuran <span class="notification2 badge panel-red"></span></a></li>
				<li class="{{ Request::path() == 'buah' ? 'active':''}}"><a href="{{ Request::path() == 'buah' ? '#':'buah'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Buah <span class="notification3 badge panel-red"></span></a></li>
				<li class="{{ Request::path() == 'daging' ? 'active':''}}"><a href="{{ Request::path() == 'daging' ? '#':'daging'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Daging <span class="notification4 badge panel-red"></span></a></li>
				<li class="{{ Request::path() == 'bumbu' ? 'active':''}}"><a href="{{ Request::path() == 'bumbu' ? '#':'bumbu'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Bumbu <span class="notification5 badge panel-red"></span></a></li>
				<li class="{{ Request::path() == 'bahanpokok' ? 'active':''}}"><a href="{{ Request::path() == 'bahanpokok' ? '#':'bahanpokok'}}"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Bahan Pokok <span class="notification6 badge panel-red"></span></a></li>
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
		<script src="{{ asset('/js/bootstrap-table.js') }}"></script>
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
				$.ajax({
					url:'{{ url("notifpantrys") }}',    
					data:{_token: '{{ csrf_token() }}'},
					success:function(data){
						$('.notification1').replaceWith('<span class="notification1 badge panel-red">'+ data.notif1 +'<span>');
						$('.notification2').replaceWith('<span class="notification2 badge panel-red">'+ data.notif2 +'<span>');
						$('.notification3').replaceWith('<span class="notification3 badge panel-red">'+ data.notif3 +'<span>');
						$('.notification4').replaceWith('<span class="notification4 badge panel-red">'+ data.notif4 +'<span>');
						$('.notification5').replaceWith('<span class="notification5 badge panel-red">'+ data.notif5 +'<span>');
						$('.notification6').replaceWith('<span class="notification6 badge panel-red">'+ data.notif6 +'<span>');
						setTimeout(realtimeMethodNotification, 1000);
					},
					error:function(){
						setTimeout(realtimeMethodNotification, 1000);
					}
				}); 
			}
		</script>
	<script>
		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
		$("#addItemPantry").click(function() {
	$.ajax({
		type: 'post',
		url: '/registerPantry',
			
		data: {
		'_token': $('input[name=_token]').val(),
		'nama_bahan_baku': $('input[name=nama_bahan_baku]').val(),
		'stok': $('input[name=stok]').val(),
		'harga': $('input[name=harga]').val(),
		'jenis': $('input[name=jenis]').val(),
		'satuan': $('input[name=satuan]').val()
		},
		success: function(data) {
		if ((data.errors)) {
			$('.error').removeClass('hidden');
			$('.error').text(data.errors.title);
			$('.error').text(data.errors.description);
		} else {
			$('.error').remove();
			
		}
		},
	});
	$('#nama_bahan_baku').val('');
	$('#stok').val('');
	$('#harga').val('');
	$('#jenis').val('');
	$('#satuan').val('');
	});

	
	</script>
		
	</body>
	@endif

	</html>
