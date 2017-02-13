
$(document).ready(function(){
/**
 * [Sorting Parent item]
 * @param  {[type]} event [description]
 * @param  {[type]} ui    )             {  			var current [description]
 * @return {[type]}       [description]
 */
	$( "#sortable" ).sortable({
  		
  		update: function( event, ui ) {

  			var current = ui.item;
			
  			var token =$(current).find('.token').val(); 
  			var itemid = $(current).find('.menuItemid').val();

			var parent_num=$('.parent_num').val();
			var order=[];
			
			var count=0;
				
			
			//To find the first item in order and pushing to array.
			var newitem=$(current).prev();
				console.log("parent-section:"+newitem);
			
			while(count<parent_num){

				
				if($(newitem).find('.menuItemid').val() == undefined){
					 
					  var itemid = $(current).find('.menuItemid').val();
					  console.log("first item is :"+ itemid);
					  order.push(itemid);
					
					 break;

				}else{
					current=newitem;
					newitem=$(current).prev();
				
					 count++;
				}
				
			}

			console.log("after loop1-parent section ");
			newitem =$(current).next();
			count=1;

			//while loop after first item in order is found from above loop.
			while(count<parent_num){
				
				if( $(newitem).find('.menuItemid').val() != undefined){
					  
					  itemid = $(newitem).find('.menuItemid').val();
					  order.push(itemid);
					  
					  current =newitem;
					  newitem=$(current).next();  
		
				count++;	  		  
				}else{

					 itemid = $(current).find('.menuItemid').val();
					 order.push(itemid);
					 break;
				
				}
			}
			//order arrray is ready now. 
			console.log("after loop2 parent-section");
  		 	order.forEach(function(item, index, array) {
  		 			console.log(item, index);
				 });
  			

  			
  			//Ajax call
  			$.ajax({
  				type:"POST",
  				url:"/sortmenuitem",
  				data:{
  						order_array:order,
  						_token:token,

  					},
  				success:function(data){
  					//alert("ok"+data);
  				},
  				error:function(data){
  					alert("error!");
  				},	
  			});  		
  		}
});

/**
 * Sorting childrens.
 * @param  {[type]} event [description]
 * @param  {[type]} ui    )             {  			var current [description]
 * @return {[type]}       [description]
 */
	$( ".sortable2" ).sortable({
  		
  		update: function( event, ui ) {

  			var current = ui.item;
			
  			var token =$(current).find('.token').val(); 
  			var itemid = $(current).find('.menuItemid').val();
  			var parent_id=$(current).find('.parent_id').val();
  			
  			var order=[];
			
			//To find the first item in order and pushing to array.
			var newitem=$(current).prev();
				console.log(newitem);
			
			while(true){

				
				if($(newitem).find('.menuItemid').val() == undefined){
					 
					  var itemid = $(current).find('.menuItemid').val();
					  console.log("first item is :"+ itemid);
					  order.push(itemid);
					
					 break;

				}else{
					current=newitem;
					newitem=$(current).prev();
				
				}
				
			}

			console.log("after loop1-children section");
			newitem =$(current).next();
			

			//while loop after first item in order is found from above loop.
			while(true){
				
				if( $(newitem).find('.menuItemid').val() != undefined){
					  
					  itemid = $(newitem).find('.menuItemid').val();
					  order.push(itemid);
					  
					  current =newitem;
					  newitem=$(current).next();  
		
					  		  
				}else{

					 break;
				
				}
			}
			//order arrray is ready now. 
			console.log("after loop2 childrens-section");
  		 	order.forEach(function(item, index, array) {
  		 			console.log(item, index);
				 });
  			

  			
  			// Ajax call
  			$.ajax({
  				type:"POST",
  				url:"/sortchildmenuitem",
  				data:{
  						order_array:order,
  						parent_id:parent_id,
  						_token:token,

  					},
  				success:function(data){
  					//alert("ok"+data);
  				},
  				error:function(data){
  					alert("error!");
  				},	
  			});  		
  		}
});




 });