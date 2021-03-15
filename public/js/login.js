app.component('login', {
	data() {
		return {
			usuario: '',
			contra: '',
		};
	},
	methods: {
		iniciar() {
			if (this.usuario == '' && this.contra == '') {
				toastr.warning('Introduzca datos.');
			} else {
				$.ajax({
					url: '/api/login',
					type: 'POST',
					data: { usuario: this.usuario, contrasena: this.contra },
					success: (result) => {
						if(result.data.length == 0){
							toastr.error('El usuario o la contraseña son erroneos.');
							this.usuario = '';
							this.contra = '';
						}else{
							this.$parent.logueado = true;
							this.$parent.user = this.usuario;
							this.$parent.userid = result.data[0].id;
							this.$parent.toggleList();
						}
					},
				});
			}
		},
		register() {
			this.$parent.toggleRegister();
		},
	},
	template: `
<div class="container mt-5">
	<div class="row">
		<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					<div class="logo mb-3">
						<div class="col-md-12 text-center">
							<h1>Iniciar Sesión</h1>
						</div>
					</div>
					<form method="post" name="login">
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" v-model="usuario" name="usuario" class="form-control" id="usuario"  placeholder="Usuario">
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" v-model="contra" name="password" id="password"  class="form-control" placeholder="Contraseña">
						</div>
						<div class="col-md-12 text-center ">
							<button type="button" class=" btn btn-block mybtn btn-primary tx-tfm" @click="iniciar">Iniciar Sesión</button>
						</div>
						<div class="form-group">
							<p class="text-center">¿No tienes cuenta? <a v-on:click="register" id="signup">Registrate aquí</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
	`,
});