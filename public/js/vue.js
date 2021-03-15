const app = Vue.createApp({
	data() {
		return {
			list: true,
			about: false,
			login: false,
			register: false,
			individual: false,
			cart: false,
			contact: false,
			categpar: 0,
			pedidos: [],
			allProduct: [],
			products: [],
			product: {},
			banner: [],
			categoriaId: 0,
			total: 0,
			page: 1,
			paginate: {},
			logueado: false,
			user: '',
			userid:0,
		};
	},
	mounted() {
		if (localStorage.getItem('pedidos')) {
			try {
				this.pedidos = JSON.parse(localStorage.getItem('pedidos'));
			} catch (e) {
				localStorage.removePedido('pedidos');
			}
		}
		let totalUnd = this.pedidos.map((i) => {
			return i.totalUnd;
		});
	},
	methods: {
		fetchBanner() {
			$.ajax({
				url: '/api/banner',
				type: 'GET',
				success: (result) => {
					this.banner = result.data;
				},
			});
		},
		fetchProducts() {
			$.ajax({
				url: '/api/listproduct?page=' + this.page,
				type: 'POST',
				data: { categoria_id: this.categpar },
				success: (result) => {
					this.products = result.data;
					this.paginate = result.pagination;
					this.allProduct = result.data;
				},
			});
		},
		next() {
			if (this.page < this.paginate.last_page) {
				this.page += 1;
				this.fetchProducts();
			}
		},
		previous() {
			if (this.page > 1) {
				this.page -= 1;
				this.fetchProducts();
			}
		},
		first() {
			this.page = 1;
			this.fetchProducts();
		},
		last() {
			this.page = this.paginate.last_page;
			this.fetchProducts();
		},
		number(index) {
			this.page = index;
			this.fetchProducts();
		},
		toggleAbout() {
			this.about = true;
			this.list = false;
			this.individual = false;
			this.cart = false;
			this.contact = false;
			this.login = false;
			this.register = false;
		},
		toggleList() {
			this.about = false;
			this.list = true;
			this.individual = false;
			this.cart = false;
			this.contact = false;
			this.login = false;
			this.register = false;
		},
		toggleIndividual(prod) {
			this.product = prod;
			this.about = false;
			this.list = false;
			this.individual = true;
			this.cart = false;
			this.contact = false;
			this.login = false;
			this.register = false;
		},
		toggleContact() {
			this.about = false;
			this.list = false;
			this.individual = false;
			this.cart = false;
			this.contact = true;
			this.login = false;
			this.register = false;
		},
		toggleCart() {
			if (this.logueado) {
				this.about = false;
				this.list = false;
				this.individual = false;
				this.cart = true;
				this.contact = false;
				this.login = false;
				this.register = false;
			} else {
				this.toggleLogin();
			}
		},
		toggleLogin() {
			this.about = false;
			this.list = false;
			this.individual = false;
			this.cart = false;
			this.contact = false;
			this.login = true;
			this.register = false;
		},
		toggleRegister() {
			this.about = false;
			this.list = false;
			this.individual = false;
			this.cart = false;
			this.contact = false;
			this.login = false;
			this.register = true;
		},
		toggleCategory(id) {
			this.categpar = id;
			this.fetchProducts();
			this.toggleList();
		},
		removePedido(id) {
			this.pedidos = this.pedidos.filter((i) => i.id != id);
			this.savePedido();
		},
		savePedido() {
			let parsed = JSON.stringify(this.pedidos);
			localStorage.setItem('pedidos', parsed);
		},
		addPedido(id, cantidad = 1) {
			let product = this.banner.filter((i) => i.id == id);
			let cart = this.pedidos.filter((i) => i.id == id);
			if (cart.length == 0) {
				product[0].cantidad = cantidad;
				product[0].totalUnd = parseFloat(product[0].precio) * cantidad;
				this.pedidos.push(product[0]);
			} else {
				this.pedidos.map((i) => {
					if (i.id == id && (i.cantidad > 1 || cantidad > 0)) {
						i.cantidad += cantidad;
						i.totalUnd += parseFloat(i.precio) * cantidad;
						return i;
					}
					return i;
				});
			}
			this.savePedido();
		},
		cerrarSesion() {
			this.logueado = false;
			this.user = '';
		},
		
	},
});