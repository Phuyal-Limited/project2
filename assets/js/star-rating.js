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
                hospitality = 0;
            }
            if(value==''){
                value = 0;
            }
            if(services==''){
                services = 0;
            }
            if(dining==''){
                dining = 0;
            }
            if(cleanliness==''){
                cleanliness = 0;
            }
            hospitality = hospitality*20;
            value = value*20;
            services = services*20;
            dining = dining*20;
            cleanliness = cleanliness*20;

            $.ajax({
                url: 'http://localhost/project2/rating_add',
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
                    $("#rating-button").hide();
                    rating();

                }
            });
        });
        
        
        
    });

    // END FIRST THING