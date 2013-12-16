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
            var base_url = $("#base_url").val();
            
            $.ajax({
                url: base_url+'rating_add',
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
                    var currentPageUrl = document.location.toString().toLowerCase();
                    if(currentPageUrl == base_url+'details/'+hotel_id){
                        rating();    
                        $("#rating_button").hide();
                    }else{
                        window.location.replace(base_url+"reviews/"+hotel_id);
                    }
                    
                    

                }
            });
        });
        
        //review for the hotel posting
        $("#post_review").click(function(){

            var name = $("#rev_name").val();
            var title = $("#title").val();
            var desc = $("#desc").val();
            var hotel_id = $("#hotel_id").val();
            var base_url = $("#base_url").val();
            
            $.ajax({
                url: base_url+'review_add',
                type: 'post',
                data: {
                    name : name,
                    title : title,
                    desc : desc,
                    hotel_id : hotel_id
                },
                success: function(response){
                    $("#close").click();
                    alert(response);
                    var currentPageUrl = document.location.toString().toLowerCase();
                    if(currentPageUrl == base_url+'details/'+hotel_id){
                        rating();    
                        $("#review_button").hide();
                    }else{
                        window.location.replace(base_url+"reviews/"+hotel_id);
                    }
                   
                }
            });
        
        });
        
    });

    // END FIRST THING