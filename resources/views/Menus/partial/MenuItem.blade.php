<div >
	<ul class="list-group" id="sortable" >

		@foreach($menuItems as $menuItem)

				@if( $menuItem->parent_id == null )

					<div id="ui-state-default">
						<li class="list-group-item">
									<input type="hidden" value="{{csrf_token()}}" class="token">
									<input type="hidden" value="{{$menuItem->id}}" class="menuItemid">
									<input type="hidden" value="{{$parent_num}}"  class="parent_num"> 
									<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

									<a 	data-toggle="{{ $menuItem->url ? '' : 'collapse' }}" 
										href="#{{ $menuItem->children->isEmpty() ? $menuItem->url : $menuItem->menu_name }}" aria-expanded="true" 
										aria-controls="{{$menuItem->menu_name}}" >

										<strong>{{ $menuItem->menu_name }}</strong>

									</a>
									<span class="pull-right">
										<a 	style="cursor: pointer;" 
										type="button" 
										data-toggle="modal" 
										data-target="#MenuModalEdit" 
										onclick="launch_Edit_Modal({{$menuItem->id}})" >

										Edit
									</a>
									|
									<a 	style="cursor: pointer;" 
									type="button" 
									data-toggle="modal" 
									data-target="#MenuModalDelete" 
									onclick="launch_Delete_Modal({{$menuItem->id}})" >

									Delete
								</a>
							</span>




							@if( ! $menuItem->children->isEmpty() )

								<div id="{{$menuItem->menu_name}}" class="panel-collapse collapse in" >
									<ul class="list-group sortable2" style="margin-left:20px " >		
										
										@foreach($menuItem->children->sortBy('order') as $subMenuItem)
											
										<li class="list-group-item ui-state-default" >
										<input type="hidden" value="{{csrf_token()}}" class="token">
										<input type="hidden" value="{{$subMenuItem->id}}" class="menuItemid">
										<input type="hidden" value="{{$subMenuItem->parent_id}}"  class="parent_id">
										
										<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
											{{ $subMenuItem->menu_name }}
											<span class="pull-right">
												<a style="cursor: pointer;"
												type="button" 
												data-toggle="modal" 
												data-target="#MenuModalEdit" 
												onclick="launch_Edit_Modal({{$subMenuItem->id}})" >
												Edit
											</a>
											|
											<a style="cursor: pointer;"
											type="button" 
											data-toggle="modal" 
											data-target="#MenuModalDelete" 
											onclick="launch_Delete_Modal({{$subMenuItem->id}})" >
											Delete
											</a>
											</span>
										</li>	

								@endforeach

									</ul>
								</div>
							@endif

						</li>
					</div>	

				@endif


		@endforeach

	</ul>
</div>	
