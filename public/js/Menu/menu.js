
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  /**
   * [launch_Edit_Modal description]
   * @param  {[type]} id [description]
   * @return {[type]}    [description]
   */
  function launch_Edit_Modal(id){
     $.ajax({
      type: "POST",
      url: "/menuData",
      data: { id:id,
      	

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

 /**
  * [launch_Delete_Modal description]
  * @param  {[type]} id [description]
  * @return {[type]}    [description]
  */
 function launch_Delete_Modal(id){
     $.ajax({
      type: "POST",
      url: "/menuData",
      data: { id:id,
      	

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

 /**
  * [Add_menu description]
  */
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

/**
 * [Update_menu description]
 */
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


/**
 * [Delete_menu description]
 */
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



  /**
   * editBtn click event
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.editBtn').click(function(){

       id=$(this).data("value");
       launch_Edit_Modal(id); 
  });

  /**
   * deleteBtn click event
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.deleteBtn').click(function(){

      id=$(this).data("value");
      launch_Delete_Modal(id);

  });

  /**
   * editBtnchild click event.
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.editBtnchild').click(function(){

      id=$(this).data("value");
      launch_Edit_Modal(id);

  });

  /**
   * deleteBtnchild click event.
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.deleteBtnchild').click(function(){

      id=$(this).data("value");
      launch_Delete_Modal(id);

  });


/**
   * addmenuBtn click event.
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.addmenuBtn').click(function(){

      Add_menu();

  });

/**
   * addmenuBtn click event.
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.updatemodalBtn').click(function(){

      Update_menu();

  });

  /**
   * addmenuBtn click event.
   * @param  {[type]} ){               } [description]
   * @return {[type]}     [description]
   */
  $('.deletemodalBtn').click(function(){

     Delete_menu();

  });





/**
 * [description]
 * @param  {[type]} ) {               $( "#sortable" ).sortable();    $( "#sortable" ).disableSelection();  } [description]
 * @return {[type]}   [description]
 */
 $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

  } );


/**
 * [description]
 * @param  {[type]} ) {               $( ".sortable2" ).sortable();    $( ".sortable2" ).disableSelection();  } [description]
 * @return {[type]}   [description]
 */
  $( function() {
    $( ".sortable2" ).sortable();
    $( ".sortable2" ).disableSelection();

  } );