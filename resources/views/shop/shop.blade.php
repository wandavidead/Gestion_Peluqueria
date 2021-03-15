<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
			integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
			integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
			integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf"
			crossorigin="anonymous"
		></script>
		<script src="https://unpkg.com/vue@next"></script>
		<link type="text/css" href="css/style.css" rel="stylesheet" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
		/>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
		></script>
	</head>
	<body>
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light sticky-top">
				<div class="container">
					<span class="navbar-brand" v-on:click="toggleCategory(0)">Peluqueria</span>
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
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right"></ul>
						<ul class="navbar-nav navbar-light">
							<li class="nav-item">
								<span class="nav-link" v-on:click="toggleCategory(0)">Inicio</span>
							</li>
							<li class="nav-item dmenu dropdown">
								<span
									class="nav-link dropdown-toggle"
									
									role="button"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									v-on:click="toggleCategory(0)"
								>
									Productos
								</span>
								<div class="dropdown-menu sm-menu" >
									<span class="dropdown-item" v-on:click="toggleCategory(1)"
										>Cosmeticos</span
									>
									<span class="dropdown-item" v-on:click="toggleCategory(2)"
										>Maquillaje</span
									>
									<span class="dropdown-item" v-on:click="toggleCategory(3)"
										>Cabellos</span
									>
									<span class="dropdown-item" v-on:click="toggleCategory(4)"
										>Accesorios</span
									>
								</div>
							</li>
							<li class="nav-item">
								<span class="nav-link" v-on:click="toggleAbout"
									>Sobre Nosotros</span
								>
							</li>
							
							<li class="nav-item dmenu dropdown" v-if="this.logueado">
								<span
									class="nav-link dropdown-toggle"
									
									role="button"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>@{{this.user}}</span>
								<div class="dropdown-menu sm-menu" >
									<span class="dropdown-item" v-on:click="cerrarSesion">Cerrar Sesion</span>
								</div>
							</li>

							<li class="nav-item" v-else>
								<span class="nav-link" v-on:click="toggleLogin">Cuenta</span>
							</li>
							<li class="nav-item">
								<span
									v-on:click="toggleCart"
									class="nav-link navbar-link-2 waves-effect"
								>
									<span class="badge badge-pill red"
										>@{{this.pedidos.length}}</span
									>
									<i class="fas fa-shopping-cart fa-2x"></i>
								</span>
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
									Idiomas
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
				<list v-if="list" :productos="this.products"></list>
				<register v-if="register"></register>
				<login v-if="login"></login>
				<about v-if="about"></about>
				<cart v-if="cart" :pedidos="this.pedidos" :total="this.total"></cart>
				<contact v-if="contact"></contact>
				<individual v-if="individual" :product="this.product"></individual>
			</div>
			<div class="ml-3 mr-3 pt-5 pb-2">
				<div class="card"></div>
				<div class="row">
					<div class="col-md-3 col-lg-4 col-xl-3">
						<h4>Peluqueria</h4>
						<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25" />
						<p>
							Empresa que ofrece servicios de tratamientos esteticos en el local y
							ofrese venta de productos tanto en tienda como online.
						</p>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
						<h4>Enlaces útiles</h4>
						<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25" />
						<p><span v-on:click="toggleList" class="text">Productos</span></p>
						<p><span v-on:click="toggleAbout" class="text">Sobre Nosotros</span></p>
					</div>
					<div class="col-md-4 col-lg-3 col-xl-3">
						<h4>Contacto</h4>
						<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25" />
						<p><i class="fas fa-building fa-2x mr-3"></i> C/ Mexico 119</p>
						<p v-on:click="toggleContact">
							<i class="fas fa-envelope fa-2x mr-3"></i> peluqueriafamily@gmail.com
						</p>
						<p><i class="fas fa-phone fa-2x mr-3"></i> +34 659 24 67 28</p>
					</div>
				</div>
			</div>
			<hr class="bg-white mx-4 mt-2 mb-1" />
			<div class="container-fluid">
				<p class="text-center m-0 py-1">
					© 2021 Copyright <a href="#" class="text-white">Bootstrap-4</a>
				</p>
			</div>
		</div>
		@guest @if (Route::has('login'))
		<script>
			var logueado = false;
		</script>
		@endif @if (Route::has('register'))
		<script>
			var logueado = false;
		</script>
		@endif @else
		<script>
			var logueado = true;
		</script>
		@endguest
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/vue.js"></script>
		<script type="text/javascript" src="js/listproduct.js"></script>
		<script type="text/javascript" src="js/cart.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
		<script type="text/javascript" src="js/register.js"></script>
		<script type="text/javascript" src="js/individual.js"></script>
		<script type="text/javascript" src="js/contact.js"></script>
		<script type="text/javascript" src="js/about.js"></script>
	</body>
</html>