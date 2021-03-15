<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
			crossorigin="anonymous"
		/>
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
		<style>
			html,
			body {
				margin: 0;
				padding: 0;
			}
			.text {
				opacity: 0.5;
				background-color: rgb(0, 0, 0);
				color:white;
				text-align: center;
			}
			.main {
				background-image: url('https://marsoni.es/wp-content/uploads/2020/09/soporte-y-mantenimiento-informatico.jpg');
				background-size: contain;
				overflow: hidden;
				height: 100vh;
			}
			.error-template {
				padding: 40px 15px;
				text-align: center;
			}
			.error-actions {
				margin-top: 15px;
				margin-bottom: 15px;
			}
			.error-actions .btn {
				margin-right: 10px;
			}
		</style>
		<title>@lang('Server Error')</title>
	</head>
	<body>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="error-template">
							<h1 class="text">
								500 @lang('Server Error')
							</h1>
							<div class="error-details text">
								@lang('Sorry, the server is not responding.')
							</div>
							<div class="error-actions">
								<a
									href="{{ app('router')->has('menu') ? route('menu') : url('/') }}"
									class="btn btn-primary btn-lg"
									><span class="glyphicon glyphicon-home"></span> @lang('Go Home')
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
