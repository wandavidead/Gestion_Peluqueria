<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<link
			href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
			rel="stylesheet"
			id="bootstrap-css"
		/>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
			integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
			crossorigin="anonymous"
		/>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<link
			rel="stylesheet"
			href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
		/>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light sticky-top">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/menu') }}">@lang('Hairdressing')</a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#mobile_nav"
					aria-controls="mobile_nav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mobile_nav">
					@if (Route::has('login'))
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right"></ul>
					<ul class="navbar-nav navbar-light">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/menu') }}">@lang('Home')</a>
						</li>
						<li class="nav-item dmenu dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								id="navbarDropdown"
								role="button"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								@lang('Services')
							</a>
							<div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('citas.index') }}"
									>@lang('Appointments')</a
								>
								<a class="dropdown-item" href="{{ route('empleados.index') }}"
									>@lang('Employees')</a
								>
								<a class="dropdown-item" href="{{ route('clientes.index') }}"
									>@lang('Clients')</a
								>
								<a class="dropdown-item" href="{{ route('productos.index') }}"
									>@lang('Products')</a
								>
								<a class="dropdown-item" href="{{ route('proveedores.index') }}"
									>@lang('Providers')</a
								>
								<a class="dropdown-item" href="{{ route('tratamientos.index') }}"
									>@lang('Treatments')</a
								>
							</div>
						</li>
						<li class="nav-item dmenu dropdown">
							<a
								class="nav-link dropdown-toggle"
								id="navbarDropdown"
								role="button"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								{{ Auth::user()->name }}
							</a>
							<div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
								<a
									class="dropdown-item"
									href="{{ route('logout') }}"
									onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
								>
									{{ __('Logout') }}
								</a>

								<form
									id="logout-form"
									action="{{ route('logout') }}"
									method="POST"
									class="d-none"
								>
									@csrf
								</form>
							</div>
						</li>
						@endguest
						<li class="nav-item dmenu dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								id="navbarDropdown"
								role="button"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								@lang('Language')
							</a>
							<div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('lang', ['en']) }}"
									><img
										src="https://internacionalaravaca.edu.es/wp-content/uploads/2019/02/icono-bandera-inglesa-png-2.png"
										width="40"
										height="40"
								/></a>
								<a class="dropdown-item" href="{{ url('lang', ['es']) }}"
									><img
										src="https://coolfootballag.files.wordpress.com/2014/12/spain_1.png"
										width="40"
										height="40"
								/></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div>
			@yield('content')
		</div>
		<style>
			.navbar {
				background: #fff;
				padding-top: 0;
				padding-bottom: 0;
				box-shadow: 1px 3px 4px 0 #adadad33;
			}
			.navbar-light .navbar-brand {
				color: #2196f3;
			}
			.navbar-light .navbar-nav .nav-link {
				color: #1ebdc2;
			}
			.navbar-light .navbar-brand:focus,
			.navbar-light .navbar-brand:hover {
				color: #1ebdc2;
			}
			.navbar-light .navbar-nav .nav-link:focus,
			.navbar-light .navbar-nav .nav-link:hover {
				color: #fff;
			}
			.navbar-light .navbar-nav .nav-link {
				padding-top: 22px;
				padding-bottom: 22px;
				transition: 0.3s;
				padding-left: 24px;
				padding-right: 24px;
				font-size: 14px;
			}
			.navbar-light .navbar-nav .nav-link:focus,
			.navbar-light .navbar-nav .nav-link:hover {
				background: #1ebdc2;
				transition: 0.3s;
			}
			.dropdown-item:focus,
			.dropdown-item:hover {
				color: #fff;
				text-decoration: none;
				background-color: #1ebdc2 !important;
			}
			.sm-menu {
				border-radius: 0px;
				border: 0px;
				top: 97%;
				box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
			}
			.dropdown-item {
				color: #3c3c3c;
				font-size: 14px;
			}
			.dropdown-item.active,
			.dropdown-item:active {
				color: #fff;
				text-decoration: none;
				background-color: #2196f3;
			}
			.navbar-toggler {
				outline: none !important;
			}
			.navbar-tog {
				color: #1ebdc2;
			}
			.megamenu-li {
				position: static;
			}

			.megamenu {
				position: absolute;
				width: 100%;
				left: 0;
				right: 0;
				padding: 15px;
			}
			.megamenu h6 {
				margin-left: 21px;
			}
			.megamenu i {
				width: 20px;
			}
		</style>
		<script>
			$(document).ready(function () {
				$('.navbar-light .dmenu').hover(
					function () {
						$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
					},
					function () {
						$(this).find('.sm-menu').first().stop(true, true).slideUp(105);
					}
				);
			});

			$(document).ready(function () {
				$('.megamenu').on('click', function (e) {
					e.stopPropagation();
				});
			});
		</script>
		<style type="text/css">
			.table {
				border-top: 2px solid #ccc;
			}
		</style>
		<script>
			$(document).ready(function () {
				$('#table_id').DataTable();
			});
		</script>
	</body>
</html>