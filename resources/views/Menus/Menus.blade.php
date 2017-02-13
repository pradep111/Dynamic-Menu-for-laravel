
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic-Menu with laravel</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	@include('Menus.partial.menuscript')
	<script type="text/javascript" src="{{URL::asset('js/Menu/menuItemsort.js')}}"></script>

</body>
</html>


