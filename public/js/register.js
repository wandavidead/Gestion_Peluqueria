app.component('register', {
	data() {
		return {
			errors: [],
			nombre: '',
			apellidos: '',
			usuario: '',
			email: '',
			contra: '',
			retryPassword: '',
		};
	},
	methods: {
		validEmail: function (email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		},
		validContra: function (contra) {
			var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{9,}$/;
			return re.test(contra);
		},
		validContras: function (contra,retryPassword) {
			if ( contra == retryPassword){
				return true;
			}
			return false;
			
		},
		crear() {
			this.errors = [];
			if (!this.nombre) {
				this.errors.push('El nombre es requerido.');
			}
			if (!this.apellidos) {
				this.errors.push('Los apellidos es requerido.');
			}
			if (!this.usuario) {
				this.errors.push('El usuario es requerido.');
			}
			if (!this.email) {
				this.errors.push('Email required.');
			} else if (!this.validEmail(this.email)) {
				this.errors.push('El email tiene que ser valido.');
			}
			if (!this.contra) {
				this.errors.push('La contraseña es requerida.');
			} else if (!this.validContra(this.contra)) {
				this.errors.push('La contraseña no es segura, debe tener un mínimo de 12, tener una letra mayúscula, un número y un carácter mínimo.');
			}
			if (!this.retryPassword) {
				this.errors.push('Repita la contraseña.');
			} else if (!this.validContras(this.contra,this.retryPassword)) {
				this.errors.push('Las contraseñas no son iguales.');
			}

			if (!this.errors.length) {
				let datos = {
					nombre: this.nombre,
					apellidos: this.apellidos,
					usuario: this.usuario,
					email: this.email,
					contraseña: this.contra,
				};
				$.ajax({
					url: '/api/register',
					type: 'POST',
					data: datos,
					success: (result) => {
						console.log(result);
						if (result.error) {
							toastr.error('El usuario ya existe.');
							return;
						}
						this.$parent.user = this.usuario;
						this.$parent.logueado = true;
						this.$parent.userid = result.id;
						this.$parent.toggleList();
					},
				});
			}
		},
		login() {
			this.$parent.toggleLogin();
		},
	},
	template: `
<div class="container mt-5">
	<div class=" row">
		<div class="col-md-5 mx-auto">
			<div id="second">
				<div class="myform form ">
					<div class="logo mb-3">
						<div class="col-md-12 text-center">
							<h1>Crear Cuenta</h1>
						</div>
					</div>
					<form action="#" name="registration">
						<p v-if="errors.length">
							<b>Corrija el/los siguiente/s error(es):</b>
							<ul>
							  <li v-for="error in errors">{{ error }}</li>
							</ul>
						 </p>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" v-model="nombre" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" v-model="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" v-model="usuario" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
						</div>
						<div class="form-group">
							<label>Correo Electrónico</label>
							<input type="email" v-model="email" name="email" class="form-control" id="email" placeholder="Correo Electrónico">
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" v-model="contra" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<label>Repetir Contraseña</label>
							<input type="password" v-model="retryPassword" name="retryPassword" id="retryPassword" class="form-control" placeholder="Repita Contraseña">
						</div>
						<div class="col-md-12 text-center mb-3">
							<button type="button" class=" btn btn-block mybtn btn-primary tx-tfm" @click="crear" >Crear Cuenta</button>
						</div>
						<div class="col-md-12 ">
							<div class="form-group">
								<p class="text-center"><a v-on:click="login" id="signin">¿Ya tienes una cuenta?</a></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	`,
});