$(document).ready(function(){
  
	//autoload rating
	load_rating(1);

  	// slider
	$(function() {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				alert('hey');
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
	});


	//display to choose pickup time and place when pickup request clicked
  	$("#pickup_req").click(function(){
		$("#pickup-place-details").toggle(1000);
		$("#pickup-time-details").toggle(1000);
		return false;
	});
		
  	//to check if the user tries to click the checkout date before checkin date
	$("#pick2").change(function(){
		var from = $("#pick1").val();
		var to = $("#pick2").val();
		if(to==''){
	   		$("#pick2").val('');
		}else if(to<from ){
			var date2 = $('#pick1').datepicker('getDate');
            date2.setDate(date2.getDate()+1);
            $('#pick2').datepicker('setDate', date2);
 		}else if(to==from){
  			var date2 = $('#pick1').datepicker('getDate');
            date2.setDate(date2.getDate()+1);
            $('#pick2').datepicker('setDate', date2);
 		}else{
 			//nothing
 		}
 		return false;
	});


	$("#pick1").change(function(){
		var from = $("#pick1").val();
 		var to = $("#pick2").val();
 		if(to!=''){
  			if(to<from){
  				var date2 = $('#pick1').datepicker('getDate');
            	date2.setDate(date2.getDate()+1);
            	$('#pick2').datepicker('setDate', date2);
            	// $('#pick1').datepicker({ 
            	// 	dateFormat: "yy-mm-dd",
            	// 	minDate: date2 
            	// });
  			}
  			if(to==from){
  				var date2 = $('#pick1').datepicker('getDate');
            	date2.setDate(date2.getDate()+1);
            	$('#pick2').datepicker('setDate', date2);
  			}
		}
		return false
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

		var check_room = $("#room_id").val();

		if(check_room==""){
			$("#submit-form").hide();
		}else{
			$("#submit-form").show();
		}
	}else{
		$("#change-color"+i+"-"+j).css( {"background-color": "#1A71AC" , "padding": "3px"} );
		$('#selected'+i+"-"+j).css({"display": "block"});
		
		if(room_id==""){

		}else{
			
			rooms_array.push(room_id);
			
		}
		
		rooms_array.push(eachRoom);
		
		
		$("#room_id").val(rooms_array);
		$("#submit-form").show();
		
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


//autoload the rating div
//function to maintain autoload
function load_rating(x){
	if(x){
		rating();
	}
	setInterval(function(){
		rating();
	},60000);
}

function rating(){
	var hotel_id = $("#hotel_id").val();
	$.ajax({
		url: 'http://localhost/project2/rating_reviews',
		type: 'post',
		dataType: 'json',
		data:{
			hotel_id: hotel_id
		},
		success: function(response){
			alert(response[3]);
			var display = '';

			display = '<div class="col-md-6">'+
						'<div class="row">'+
							'<div class="col-md-12">'+
								'<div class="total-review">'+
									'<button class="btn btn-default" id="rating-button" data-toggle="modal" data-target="#rate-modal" style="float:right; padding: 2px 12px;">Rate this Inn</button>'+
									'<p><span>Rating:'+response[0].average+'%</span> '+response[1].reviews_no+' Total Reviews</p>'+
								'</div>'+
							'</div>'+
							'<div class="rating-cat">'+
								'<div class="col-md-6">Hospitality: <p>'+response[0].friendliness+'%</p></div>'+
								'<div class="col-md-6">Services: <p>'+response[0].services+'%</p></div>'+
								'<div class="col-md-6">Value: <p>'+response[0].values+'%</p></div>'+
								'<div class="col-md-6">Cleanliness: <p>'+response[0].cleanliness+'%</p></div>'+
								'<div class="col-md-6">Dining: <p>'+response[0].dining+'%</p></div>'+
							'</div>'+
						'</div>'+
					'</div>'+
					'<div class="col-md-6">'+
						'<div class="latest-review-head">'+
							'<button class="btn btn-default" data-toggle="modal" data-target="#review-modal" style="float:right; padding: 2px 12px;">Write a review</button>'+
							'<p>Latest Review</p>'+
							'<div class="one-review">'+
								'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.'+
								'Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo <a href="">more</a></p>'+
								'<p><a href="">Read all reviews</a> </p>'+
							'</div>'+
						'</div>'+
					'</div>';
					
				$("#rating-reviews-show").html(display);
		}
	});
}