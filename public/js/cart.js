// Define a new global component called button-counter
app.component('cart', {
	props: ['pedidos', 'total'],
	computed: {
		totalCalculate: function () {
			if (this.$parent.pedidos.length) {
				var reduced = this.$parent.pedidos
					.map(function (obj) {
						return obj.totalUnd;
					})
					.reduce(function (a, b) {
						return a + b;
					});
				this.$parent.total = reduced;
				return this.$parent.total;
			}
			return 0;
		},
	},
	methods: {
		makeOrder() {
			console.log(this.$parent.userid)
			$.ajax({
				url: '/api/pedidos',
				type: 'POST',
				data: { datos: this.pedidos, usuario_id: this.$parent.userid, total: this.total },
				success: (result) => {
					this.clean();
				},
			});
		},
		clean() {
			localStorage.clear();
			this.$parent.total = 0;
			this.$parent.pedidos = [];
			this.goback();
		},
		remove(x) {
			this.$parent.removePedido(x);
			toastr.success('El producto ha sido eliminado correctamente');
		},
		goback() {
			this.$parent.toggleList();
		},
		changeCantidad(id, cantidad) {
			this.$parent.addPedido(id, cantidad);
		},
	},
	template: `
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-md-9">
					<div class="ibox">
						<div class="ibox-title">
							<h5>Items in your cart</h5>
						</div>
						<div v-for="pedido in pedidos" class="ibox-content">
							<div class="table-responsive">
								<table class="table shoping-cart-table">
									<tbody>
										<tr>
											<td style="padding:0px; width:160px; heigth:160px;">
												<img width="150" heigth="150"
													v-bind:src="'data:image/jpeg;base64,'+pedido.foto" />
											</td>
											<td class="desc">
												<h3>
													<span class="text-navy">
														{{pedido.denominacion_producto}}
													</span>
												</h3>
												<p class="small">
													{{pedido.descripcion}}
												</p>
												<span @click="remove(pedido.id)" class="text-muted"><i
														class="fa fa-trash"></i> Remove
													item</span>
											</td>
											<td>
												{{pedido.precio.toFixed(2)}} €
											</td>
											<td style="padding:0px; width:200px; heigth:38px;">
												<div class="input-group">
													<div>
														<button @click="changeCantidad(pedido.id,-1)" type="button" class="btn btn-danger">
															<i class="fa fa-minus fa-2x"></i>
														</button>
													</div>
													<input type="number" readonly class="form-control" v-bind:value="pedido.cantidad">
													<div>
														<button @click="changeCantidad(pedido.id,1)" type="button" class="btn btn-success">
															<i class="fa fa-plus fa-2x"></i>
														</button>
													</div>
												</div>
											</td>
											<td width="100">
												<h4>
													<span>{{pedido.totalUnd.toFixed(2)}}</span> €
												</h4>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="ibox-content">
							<button v-on:click="makeOrder" class="btn btn-primary pull-right"><i
									class="fa fa fa-shopping-cart"></i>
								Checkout</button>
							<button v-on:click="goback" class="btn btn-white"><i class="fa fa-arrow-left"></i> Continue
								shopping</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ibox">
						<div class="ibox-title">
							<h5>Cart Summary</h5>
						</div>
						<div class="ibox-content">
							<span>
								Total
							</span>
							<h2 class="font-bold">
								
								<span>{{this.totalCalculate.toFixed(2)}}</span>€
							</h2>
							<hr>
							<div class="m-t-sm">
								<div class="btn-group">
									<button v-on:click="makeOrder" class="btn btn-primary btn-sm"><i
											class="fa fa-shopping-cart"></i>
										Checkout</button>
									<button v-on:click="clean" class="btn btn-danger btn-sm"> Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="ibox">
						<div class="ibox-title">
							<h5>Support</h5>
						</div>
						<div class="ibox-content text-center">
							<h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
							<span class="small">
								Please contact with us if you have any questions. We are avalible 24h.
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	`,
});