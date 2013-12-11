// This is the first thing we add ------------------------------------------
    $(document).ready(function() {

        $("#submit-rating").click(function(){

            var hospitality = $("#hospitality_val").val();
            var value = $("#value_val").val();
            var services = $("#service_val").val();
            var dining = $("#dining_val").val();
            var cleanliness = $("#cleanliness_val").val();
            var hotel_id = $("#hotel_id").val();
            if(hospitality==''){
                hospitality = 2.5;
            }
            if(value==''){
                value = 2.5;
            }
            if(services==''){
                services = 2.5;
            }
            if(dining==''){
                dining = 2.5;
            }
            if(cleanliness==''){
                cleanliness = 2.5;
            }
            hospitality = hospitality*20;
            value = value*20;
            services = services*20;
            dining = dining*20;
            cleanliness = cleanliness*20;

            $.ajax({
                url: 'http://nepalinn.com/rating_add',
                type: 'post',
                data: {
                    hospitality: hospitality,
                    value: value,
                    services: services,
                    dining: dining,
                    cleanliness: cleanliness,
                    hotel_id: hotel_id
                },
                success: function(response){
                    alert(response);
                    rating();
                    $("#rating_button").hide();

                }
            });
        });
        
        
        
    });

    // END FIRST THING