app.component('list', {
	data() {
		return {
			interval: 0,
		};
	},
	props: ['productos'],
	mounted() {
		this.$parent.fetchProducts();
		this.$parent.fetchBanner();
		setTimeout(() => {
				this.loadSlider();
			}, 1000);
	},
	methods: {
		loadSlider() {
			//mover ultima imagen al primer lugar
			$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
			//mostrar la primera imagen con un margen de -100%
			$('#slider').css('margin-left', '-' + 100 + '%');
			this.autoplay();
		},
		moverD() {
			$('#slider').animate(
				{
					marginLeft: '-' + 200 + '%',
				},
				700,
				function () {
					$('#slider .slider__section:first').insertAfter(
						'#slider .slider__section:last'
					);
					$('#slider').css('margin-left', '-' + 100 + '%');
				}
			);
			this.autoplay();
		},
		moverI() {
			$('#slider').animate(
				{
					marginLeft: 0,
				},
				700,
				function () {
					$('#slider .slider__section:last').insertBefore(
						'#slider .slider__section:first'
					);
					$('#slider').css('margin-left', '-' + 100 + '%');
				}
			);
			this.autoplay();
		},
		autoplay() {
			if (window.interval != undefined && window.interval != 'undefined') {
				window.clearInterval(window.interval);
			}
			window.interval = setInterval(() => {
				this.moverD();
			}, 4000);
		},
		
		individual(prod) {
			this.$parent.toggleIndividual(prod);
		},
		
		add(id) {
			this.$parent.addPedido(id);
			toastr.success('El producto se ha añadido correctamente.');
		},
		
		categor(id) {
			this.$parent.toggleCategory(id);
		},
		
		next() {
			this.$parent.next();
		},
		
		previous() {
			this.$parent.previous();
		},
		
		first() {
			this.$parent.first();
		},
		last() {
			this.$parent.last();
		},
		number(index) {
			this.$parent.number(index);
		},
	},
	computed: {
		slider: function () {
			return this.$parent.banner.filter((i) => i.mostrar);
		},
	},
	template: `
		<div id="contenedor-slider" class="contenedor-slider mt-3">
			<div id="slider" class="slider">
				<section v-for="prod in slider" class="slider__section">
					<img v-on:click="individual(prod)" v-bind:src="'data:image/jpeg;base64,'+prod.foto" class="slider__img" />
				</section>
			</div>
			<div id="prev" v-on:click="moverI" class="btn-prev">&#60;</div>
			<div id="next" v-on:click="moverD" class="btn-next">&#62;</div>
		</div>
		<div class="container">
			<div id="product" class=" row mt-5">
				<div class="col-12 col-sm-3">
					<div class="card bg-light mb-3">
						<div class="card-header bg-primary text-white text-uppercase">
							<i class="fa fa-list"></i>
							Categories
						</div>
						<ul class="list-group category_block">
							<li v-on:click="categor(1)" class="list-group-item"><span>Cosmeticos</span></li>
							<li v-on:click="categor(2)" class="list-group-item"><span>Maquillaje</span></li>
							<li v-on:click="categor(3)" class="list-group-item"><span>Cabellos</span></li>
							<li v-on:click="categor(4)" class="list-group-item"><span>Accesorios</span></li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div v-for="prod in productos" class="col-12 col-md-6 col-lg-4 mb-3">
							<div class="card" style="height:425px;">
								<img class="card-img-top" v-bind:src="'data:image/jpeg;base64,'+prod.foto" v-bind:width="100"
									v-bind:height="200" alt="Card image cap" />
								<div class="card-body">
									<h4 class="card-title">
										<span title="View Product" style="font-size:20px;">{{prod.denominacion_producto}}</span>
									</h4>
									<span class="card-text" style="height:100px;">
										{{prod.descripcion}}
									</span>
									<div class="row">
										<div class="col">
											<span class="btn btn-danger btn-block">{{prod.precio}}€</span>
										</div>
										<div class="col">
											<span v-on:click="add(prod.id)"
												class="btn btn-success btn-block"><i
													class="fas fa-shopping-cart fa-1x"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-3">
							<nav aria-label="...">
								<ul class="pagination">
									<li class="page-item">
										<span v-on:click="first" class="page-link" >First</span>
									</li>
									<li class="page-item">
										<span v-on:click="previous" class="page-link" >Previous</span>
									</li>
									<li v-for="index in this.$parent.paginate.last_page" v-bind:class="{'page-item':true, 'active':(index == this.$parent.page)}">
										<span v-on:click="number(index)" class="page-link" >{{index}}</span>
									</li>
									<li class="page-item">
										<span v-on:click="next" class="page-link" >Next</span>
									</li>
									<li class="page-item">
										<span v-on:click="last" class="page-link" >Last</span>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	`,
});