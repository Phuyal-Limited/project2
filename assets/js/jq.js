$(document).ready(function(){

	
});


//change color of selected room
function select_room(i, j){
	var clr = $("#change-color"+i+"-"+j).css("background-color");
	var template_array = new Array();
	var rooms_array = new Array();
	var template_id = $("#template_id").val();
	var room_id = $("#room_id").val();
	alert(template_id+'---'+room_id);
	var eachTemplate = $("#template_id"+i+'-'+j).val();
	var eachRoom = $("#room_id"+i+'-'+j).val();
	if(clr!='rgb(237, 111, 88)'){
		$("#change-color"+i+"-"+j).css( {"background-color": "#ed6f58" , "padding": "11px"} );
		$('#selected'+i+"-"+j).css({"display": "none"});
		
		alert(template_id+'---'+room_id);
		template_array.push(template_id);
		rooms_array.push(room_id);
		
		var templateIndex = template_array.indexOf(eachTemplate);
		var roomIndex = rooms_array.indexOf(eachRoom);
		alert(templateIndex+'//// '+roomIndex);
		template_array.splice(templateIndex, 1);
		
		rooms_array.splice(roomIndex, 1);
		
		
		$("#template_id").val(template_array);
		$("#room_id").val(rooms_array);
	}else{
		$("#change-color"+i+"-"+j).css( {"background-color": "#1A71AC" , "padding": "3px"} );
		$('#selected'+i+"-"+j).css({"display": "block"});
		
		if(template_id=="" && room_id==""){

		}else{
			template_array.push(template_id);
			rooms_array.push(room_id);
		}
		template_array.push(eachTemplate);
		rooms_array.push(eachRoom);
		alert(template_array+'/ '+rooms_array);
		$("#template_id").val(template_array);
		$("#room_id").val(rooms_array);
		
	}
	return false;
}