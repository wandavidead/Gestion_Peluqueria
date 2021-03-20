<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css"
        integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/estilo.css" />
    @yield('headlink')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @yield('headscript')
    <script src="/js/scriptmenu.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
        integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw=="
        crossorigin="anonymous"></script>
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a class="navbar-brand" href="{{ url('/menu') }}">@lang('Hairdressing')</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded"
                        src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                        alt="User picture">
                </div>
                <div class="user-info">
                    <span class="user-name">
                        <strong>{{ Auth::user()->name }}</strong>
                    </span>
                    <span class="user-role">Administrator</span>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li>
                        <a href="{{ url('/menu') }}">
                            <i class="fas fa-home"></i>
                            <span>@lang('Home')</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a>
                            <i class="fas fa-cut"></i>
                            <span>@lang('Services')</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('citas.index') }}">@lang('Appointments')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('empleados.index') }}">@lang('Employees')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('clientes.index') }}">@lang('Clients')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('productos.index') }}">@lang('Products')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('proveedores.index') }}">@lang('Providers')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('tratamientos.index') }}">@lang('Treatments')</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a>
                            <i class="fas fa-language"></i>
                            <span>@lang('Language')</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="{{ url('lang', ['en']) }}">
                                        <img src="https://internacionalaravaca.edu.es/wp-content/uploads/2019/02/icono-bandera-inglesa-png-2.png"
                                            width="40" height="40" />
									</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('lang', ['es']) }}">
										<img src="https://coolfootballag.files.wordpress.com/2014/12/spain_1.png"
                                            width="40" height="40" />
									</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a>
                <i class="fa fa-envelope"></i>
            </a>
            <a href="{{ route('profile.show') }}">
                <i class="fa fa-cog"></i>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>
            </a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
        </div>
    </nav>
    <main class="page-content">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
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
    $(document).ready(function() {
        $('.navbar-light .dmenu').hover(
            function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            },
            function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105);
            }
        );
    });
    $(document).ready(function() {
        $('.megamenu').on('click', function(e) {
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
    $(document).ready(function() {
        $('#table_id').DataTable();
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#fecha_cita').datetimepicker();
        });
        $('select').selectpicker();
    });

</script>

</body>

</html>
