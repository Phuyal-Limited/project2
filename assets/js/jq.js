$(document).ready(function(){
  
	//display to choose pickup time and place when pickup request clicked
  $("#pickup_req").click(function(){
		$("#pickup-place-details").toggle(1000);
		$("#pickup-time-details").toggle(1000);
		return false;
	});

  //to disable date pick before today
  $('#pick1').datepicker({ minDate: 0 });
  //check out date must be atleast a day after the checkin date
  $('#pick2').datepicker({ minDate: 1 });
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
	var hotel_id = $("#hotel_id").val();
	var amount = $("#amount").val();
	var orderDesc = $("#orderdescription").val();
	var customerName = $("#CustomerName").val();
	var email = $("#email").val();
	var country = $("#country").val();
	var address = $("#address").val();
	var phone = $("#phone").val();
	var passport = $("#passport").val();
	var remarks = $("#remarks").val();
	var pickup_place = $("#pickup_place").val();
	var pickup_time = $("#pickup_time").val();
	var pickup_req = 0;
	if($('#pickup_req').is(':checked')){
		pickup_req = 1;

	}

	$.ajax({
		url: 'calculate_hash',
		type: 'post',
		data: {
			amount: amount,
			orderDesc: orderDesc,
			customerName: customerName,
			email: email,
			country: country,
			address: address,
			phone: phone,
			passport: passport,
			remarks: remarks,
			pickup_place: pickup_place,
			pickup_time: pickup_time,
			hotel_id: hotel_id,
			pickup_req: pickup_req
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

//validate if the user selected any room
function validate_submit(){
	var room_id = $("#room_id").val();
	if(room_id==''){
		$("#room_msg").html('No rooms selected.');
		return false;
	}else{
		$("#book_now").click();
		return true;
	}

}