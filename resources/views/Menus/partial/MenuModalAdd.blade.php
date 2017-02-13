<!-- Add Menu Modal block -->
<div class="modal fade" id="MenuModal" tabindex="-1" role="dialog" aria-labelledby="MenuModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3>Add Menu</h3>

			</div>
			<form id="AddmenuForm" method="POST">
				{{csrf_field()}}
				<div class="modal-body">

					<div class="form-group">
						<label for="menu_name" class="form-control-label">Menu Name:</label>
						<input type="text" class="form-control" id="menuname1" name="menu_name" required="required">
					</div>
					<div class="form-group">
						<label for="url" class="form-control-label">URL:</label>
						<input type="text" class="form-control" id="url" name="url">
					</div>
					
					<div class="form-group">
						<label for="parent" class="form-control-label">Parent:</label>
						<select name="parent_id" id="inputParent" class="form-control" >
							<option value="">-No parent-</option>
							@foreach($menu_items as $menu)
							<option value="{{$menu->id}}">{{$menu->menu_name}}</option>
							@endforeach
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success addmenuBtn" >Add Menu</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal block -->