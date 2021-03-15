app.component('contact', {
	data() {
		return {
			nombre: '',
			email: '',
			mensaje: '',
			errors: [],
		};
	},
	created() {},

	methods: {
		validEmail: function (email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		},
		cargarDatos() {
			if (this.nombre && this.email && this.mensaje) {
				this.errors = [];
				if (!this.email) {
					this.errors.push('Email required.');
				} else if (!this.validEmail(this.email)) {
					this.errors.push('El email tiene que ser valido.');
				}
				if (!this.errors.length) {
					let datos = { nombre: this.nombre, email: this.email, mensaje: this.mensaje };
					$.ajax({
						url: '/api/contact',
						type: 'POST',
						data: datos,
						success: (result) => {
							toastr.success('El mensaje ha sido enviado correctamente.');
							this.nombre = '';
							this.email = '';
							this.mensaje = '';
						},
					});
				}
			} else {
				toastr.warning('Por favor rellena los campos.');
			}
		},
	},
	template: `
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
		integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
		<div class="container">
			<div class="row justify-content-center mt-3">
				<div class="col-12 col-md-8 col-lg-6 pb-5">
					<form action="mail.php" method="post">
						<div class="card border-primary rounded-0">
							<div class="card-header p-0">
								<div class="bg-info text-white text-center py-2">
									<h3><i class="fa fa-envelope"></i> Contactanos</h3>
									<p class="m-0">Con gusto te ayudaremos</p>
								</div>
							</div>
							<div class="card-body p-3">
								<p v-if="errors.length">
									<b>Corrija el/los siguiente/s error(es):</b>
									<ul>
										<li v-for="error in errors">{{ error }}</li>
									</ul>
								</p>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fa fa-user text-info"></i>
											</div>
										</div>
										<input type="text" class="form-control" id="nombre" name="nombre" v-model="nombre"
											placeholder="Nombre y Apellido" required />
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fa fa-envelope text-info"></i>
											</div>
										</div>
										<input type="email" class="form-control" id="nombre" name="email" v-model="email"
											placeholder="ejemplo@gmail.com" required />
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fa fa-comment text-info"></i>
											</div>
										</div>
										<textarea class="form-control" v-model="mensaje" placeholder="Envianos tu Mensaje"
											required></textarea>
									</div>
								</div>
								<div class="text-center">
									<span v-on:click="cargarDatos" class="btn btn-info btn-block rounded-0 py-2">
										Enviar
									</span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	`,
});