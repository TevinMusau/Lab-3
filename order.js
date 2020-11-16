$(document).ready(function(){
	$("#BTN").click(function(event){
		event.preventDefault(); //prevents default action of submission of the button

		var name_of_item = $('#FoodName').val(); // gets values inputted by the user for the name of the item
		var quantity_of_item = $('#Quantity').val(); // gets value of the quantity inputted by the user

		alert("This feature is coming soon"); //message
		return;

		$.ajax({ 
			url:"api.foodapi.com/order",
			type: "post",
			header:{
				"api-key":""
			},
			data: {
				"name_of_item":name_of_item,
				"quantity_of_item":quantity_of_item
			},
			success: function(data){
				//process data
			},
			error.function(error){
				alert("An error occurred");
			}
		});	
	});
});