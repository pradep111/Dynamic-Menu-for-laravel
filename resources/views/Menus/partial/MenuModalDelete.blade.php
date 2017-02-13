<!-- Delete Menu Modal block -->
<div class="modal fade" id="MenuModalDelete" tabindex="-1" role="dialog" aria-labelledby="MenuModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3>Delete Menu Item</h3>
				<hr>
				<p>Are you sure you want to delete this Menu ?</p>
			</div>
			<form  method="POST" id="deleteForm" method="POST">
				{{csrf_field()}}
				<div class="modal-body">

					<div class="form-group">
						<label for="menu_name" class="form-control-label">Menu Name:</label>
						<input type="text" class="form-control" id="menuname3" name="menu_name">
					</div>
					<div class="form-group">
						<label for="url" class="form-control-label">URL:</label>
						<input type="text" class="form-control" id="url3" name="url">
					</div>
					
					<div class="form-group">
						<label for="parent" class="form-control-label">Parent:</label>
						<select name="parent_id" id="inputParent3" class="form-control" >
							<option value="">-No parent-</option>
							@foreach($menu_items as $menu)
							<option value="{{$menu->id}}">{{$menu->menu_name}}</option>
							@endforeach
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<input type="hidden" name="menu_id" id="menu_delete_id" value="" />
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger" onclick="Delete_menu()">Delete this Item</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal block -->