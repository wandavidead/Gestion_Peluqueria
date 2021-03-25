<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    {{-- CDN css --}}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/css/estilo.css" />
    {{-- CDN scrips --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    @yield('headlink')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @yield('headscript')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
        integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw=="
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"
        integrity="sha512-Yk47FuYNtuINE1w+t/KT4BQ7JaycTCcrvlSvdK/jry6Kcxqg5vN7/svVWCxZykVzzJHaxXk5T9jnFemZHSYgnw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3><a class="navbar-brand" href="{{ url('/menu') }}">@lang('Hairdressing')</a></h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="{{ url('/menu') }}">
                        <i class="fas fa-home"></i>
                        <span>@lang('Home')</span>
                    </a>
                    <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-cut"></i>
                        <span>@lang('Services')</span>
                    </a>
                    <ul class="collapse list-unstyled" id="services">
                        <li>
                            <a href="{{ route('citas.index') }}">@lang('Appointments')</a>
                        </li>
                        <li>
                            <a href="{{ route('empleados.index') }}">@lang('Employees')</a>
                        </li>
                        <li>
                            <a href="{{ route('clientes.index') }}">@lang('Clients')</a>
                        </li>
                        <li>
                            <a href="{{ route('productos.index') }}">@lang('Products')</a>
                        </li>
                        <li>
                            <a href="{{ route('proveedores.index') }}">@lang('Providers')</a>
                        </li>
                        <li>
                            <a href="{{ route('tratamientos.index') }}">@lang('Treatments')</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#language" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-language"></i>
                        <span>@lang('Language')</span>
                    </a>
                    <ul class="collapse list-unstyled" id="language">
                        <li>
                            <a href="{{ url('lang', ['en']) }}">
                                <img src="https://internacionalaravaca.edu.es/wp-content/uploads/2019/02/icono-bandera-inglesa-png-2.png"
                                    width="40" height="40" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('lang', ['es']) }}">
                                <img src="https://coolfootballag.files.wordpress.com/2014/12/spain_1.png" width="40"
                                    height="40" />
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('profile.show') }}">
                        <i class="fa fa-cog"></i>
                        <span>@lang('Profile')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                        <span>@lang('Logout')</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <span class="user-name">
                                    <strong>@yield('title')</strong>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <span class="user-name">
                                    <strong>{{ Auth::user()->name }}</strong>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                @yield('content')
            </div>
        </div>

        <div class="overlay"></div>
        
        <script src="/js/scriptmenu.js"></script>

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

        @if(Session::has('borrar_cita'))
            <script>
                Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
            </script>
        @endif
        <script>
            $('.formeliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.isConfirmed){
                    this.submit();
                }
            }) 
            })
        </script>
</body>

</html>
