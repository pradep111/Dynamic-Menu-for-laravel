
<!DOCTYPE html>
<html>
<head>

	   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Dynamic-Menu with laravel</title>
	<!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

	<link rel="stylesheet" href="{{URL::asset('js/jquery-ui-1.12.1.custom/jquery-ui.css')}}">

</head>
<body>
	<div class="container-fluid">

		<div class="container">

			@include('Menus.partial.MenuModalAdd')
			@include('Menus.partial.MenuModalEdit')
			@include('Menus.partial.MenuModalDelete')

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Manage the Navigation</h1>
					<hr>
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4 class="pull-left">Hold and move Items to change order</h4>
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#MenuModal">Add Menu Item</button>
				</div>		
			</div>
			<div class="row">
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					<div class="box">
						<div class="box-header"></div>
						<div class="box-body">
							<br>
								
								@include('Menus.partial.MenuItem')

						</div>
					</div>	
				</div>	
			</div>	
						
		</div>
	</div>		

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="{{URL::asset('js/Menu/menu.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/Menu/menuItemsort.js')}}"></script>

</body>
</html>


