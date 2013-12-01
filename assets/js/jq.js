	$(document).ready(function(){

	
});


//change color of selected room
function select_room(i, j){
	var clr = $("#change-color"+i+"-"+j).css("background-color");
	
	var rooms_array = new Array();
	
	var room_id = $("#room_id").val();
	
	
	var eachRoom = $("#room_id"+i+'-'+j).val();
	if(clr!='rgb(237, 111, 88)'){
		$("#change-color"+i+"-"+j).css( {"background-color": "#ed6f58" , "padding": "11px"} );
		$('#selected'+i+"-"+j).css({"display": "none"});
				
		rooms_array.push(room_id);
				
		var rooms = new Array();
		rooms = rooms_array.toString().split(",");
		
		for(var i=0; i<rooms.length;i++){
			
			if(rooms[i]==eachRoom){
				roomIndex = Number(i);
			}
		}
				
		rooms.splice(roomIndex, 1);
		
		$("#room_id").val(rooms);
	}else{
		$("#change-color"+i+"-"+j).css( {"background-color": "#1A71AC" , "padding": "3px"} );
		$('#selected'+i+"-"+j).css({"display": "block"});
		
		if(room_id==""){

		}else{
			
			rooms_array.push(room_id);
			
		}
		
		rooms_array.push(eachRoom);
		
		
		$("#room_id").val(rooms_array);
		
	}
	return false;
}


function get_hash(){

	var amount = $("#amount").val();
	var orderDesc = $("#orderdescription").val();
	var customerName = $("#CustomerName").val();
	
	$.ajax({
		url: 'calculate_hash',
		type: 'post',
		data: {
			amount: amount,
			orderDesc: orderDesc,
			customerName: customerName
		},
		success: function(response){
			
			var result = response.split('/');
			$("#hash_digest").val(result[0]);
			$("#dateTime").val(result[1]);
			$("#pay").click();
		}
	});
	return false;
}