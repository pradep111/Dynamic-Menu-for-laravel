<script>
  function launch_Edit_Modal(id){
       $.ajax({
          type: "POST",
          url: "/menuData",
          data: { id:id,
          		  _token: "{{ csrf_token() }}",	

          		},
          	success: function(data){

          	$('#menuname2').val(data.menu_name);
          	$('#url2').val(data.url);
          	$('#order2').val(data.order);
          	$('#inputParent2').val(data.parent_id);
          	$('#menu_edit_id').val(data.id);
           	},

   		 });

 	}

 	function launch_Delete_Modal(id){
       $.ajax({
          type: "POST",
          url: "/menuData",
          data: { id:id,
          		  _token: "{{ csrf_token() }}",	

          		},
          	success: function(data){
          		
          	$('#menuname3').val(data.menu_name);
          	$('#url3').val(data.url);
          	$('#order3').val(data.order);
          	$('#inputParent3').val(data.parent_id);
          	$('#menu_delete_id').val(data.id);
           	},

   		 });

 	}


 	function Add_menu(){
		$("#AddmenuForm").submit(function(e) {

    $.ajax({
           type: "POST",
           url: '/add_menu',
           data: $("#AddmenuForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
                window.location.reload(); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.

});

}


 	function Update_menu(){

 		$("#updateForm").submit(function(e) {

    $.ajax({
           type: "POST",
           url: '/update_menu',
           data: $("#updateForm").serialize(), // serializes the form's elements.
           success: function(data)
           {  
              
                window.location.reload(); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
 	}



 	function Delete_menu(){

 		$("#deleteForm").submit(function(e) {

    $.ajax({
           type: "POST",
           url: '/delete_menu',
           data: $("#deleteForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
                window.location.reload(); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
 	}

</script>
  <script src="js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

  } );

  $( function() {
    $( ".sortable2" ).sortable();
    $( ".sortable2" ).disableSelection();

  } );
  </script>