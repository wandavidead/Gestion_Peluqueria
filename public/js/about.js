// Define a new global component called button-counter
app.component('about', {
	template: `
		<div class="image-aboutus-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="lg-text">Sobre Nosotros</h1>
						<p class="image-aboutus-para">
							Conoce Mejor la tienda de Peluqueria de mi familia.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="aboutus-secktion paddingTB60">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="strong">Quiénes somos y <br />que hacemos</h1>
						<p class="lead">Somos una tienda humilde de barrio<br />que ha crecido bastante por su buen servicio.
						</p>
					</div>
					<div class="col-md-6">
						<p>
							Todo empezo en un garaje de una humilde morada con un sueño de una mujer de tener su peluqueria y
							trabajo muchos años en su casa haciendo tratamientos a familiares como amigos. Cada dia fue
							creciendo un poco mas hasta que gracias a una compañera le ofrecio un alquiler de un local grande
							para que pudiera seguir creciendo.
						</p>
						<p>
							Una vez en su nuevo local, pudo contactar con su primer gran proveedor que es la empresa Tahe de
							productos esteticos y demas. Gracias ha esa gran ayuda crecio mucho mas y hasta el dia de hoy
							ofrecioendo productos y servicios de todo tipo de estetica.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container team-sektion paddingTB60">
			<div class="row ml-5">
				<div class="site-heading text-center">
					<h3>Nuestro equipo</h3>
					<p>
						De momento formado por los empleados que trabajan en la peluqueria y<br />
						como un programador de los sitios web.
					</p>
					<div class="border"></div>
				</div>
			</div>
			<div class="col-md-4 team-box">
				<div class="team-img thumbnail">
					<img
						src="https://images.pexels.com/photos/567459/pexels-photo-567459.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" />
					<div class="team-content">
						<h3>David Traura Elvira</h3>
						<div class="border-team"></div>
						<p>
							Programador Novel, con 4 años de estudios en modulos,dos años especializado en administracion de
							sistemas y otros dos años de desarrollo de aplicaciones web. Con muchas ideas en la cabeza por
							realizar y ayudando a la empresa familiar desde siempre.
						</p>
						<div class="social-icons">
							<a href="https://es-es.facebook.com/"><i id="social-fb"
									class="fab fa-facebook fa-4x social"></i></a>
							<a href="https://twitter.com/?lang=es"><i id="social-tw"
									class="fab fa-twitter fa-4x social"></i></a>
							<a href="https://es.linkedin.com/"><i id="social-tw"
									class="fab fa-linkedin-in fa-4x social"></i></a>
							<a href="https://www.instagram.com/"><i id="social-ig"
									class="fab fa-instagram fa-4x social"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	`,
});
app.mount('#content');