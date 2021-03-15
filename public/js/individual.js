app.component('individual', {
	data() {
		return {
			input: 1,
		};
	},
	methods: {
		cantidad(valor) {
			if (this.input > 1 || valor > 0) {
				this.input += valor;
			}
		},
		add(id, cant) {
			if (cant !== 0) {
				this.$parent.addPedido(id, this.input);
				this.$parent.toggleList();
			} else {
				toastr.warning('Introduzca una cantidad');
			}
		},
	},
	props: ['product'],
	template: `
		<div class="container">
			<div class=" container row mt-3">
				<div class="col-12 col-lg-4">
					<div class="card bg-light">
						<div class="card-body">
							<span data-toggle="modal" data-target="#productModal">
								<img class="img-fluid" v-bind:src="'data:image/jpeg;base64,'+product.foto" />
							</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 add_to_cart_block">
					<div class="card bg-light mb-3">
						<div class="card-body">
							<p class="price">{{product.denominacion_producto}} - {{product.precio}} €</p>
							<form method="get" action="cart.html">
								<div class="form-group">
									<label>Quantity :</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<button type="button" @click="cantidad(-1)" class="quantity-left-minus btn btn-danger btn-number"
												data-type="minus">
												<i class="fa fa-minus fa-2x"></i>
											</button>
										</div>
										<input type="number" readonly class="form-control" v-bind:value="this.input" />
										<div class="input-group-append">
											<button type="button" @click="cantidad(1)" class="quantity-right-plus btn btn-success btn-number"
												data-type="plus" data-field="">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
								<span v-on:click="add(product.id)"
									class="btn btn-success btn-lg btn-block text-uppercase">
									<i class="fa fa-shopping-cart"></i> Add To Cart
								</span>
							</form>
							<div class="product_rassurance">
								<ul class="list-inline">
									<li class="list-inline-item">
										<i class="fa fa-truck fa-2x"></i><br />Fast delivery
									</li>
									<li class="list-inline-item">
										<i class="fa fa-credit-card fa-2x"></i><br />Secure payment
									</li>
									<li class="list-inline-item">
										<i class="fa fa-phone fa-2x"></i><br />+33 1 22 54 65 60
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card border-light mb-3 mt-3">
						<div class="card-header bg-primary text-white text-uppercase">
							<i class="fa fa-align-justify"></i> Description
						</div>
						<div class="card-body">
							<p class="card-text">
								{{product.descripcion}}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	`,
});