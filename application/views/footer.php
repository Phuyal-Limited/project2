<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> <!-- jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script> <!-- custom jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> <!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.core.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.widget.js'); ?>"></script> <!-- jquery ui datepicker -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.datepicker.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript" src="<?php echo base_url('assets/js/star-rating.js'); ?>"></script> <!-- star-rating-->
<script type="text/javascript">

	//tooltip

	$(function () {
	$("[rel='tooltip']").tooltip();
	});


	//date-picker

	$(function() {
			
			$( ".datepicker" ).datepicker();
			//$( ".datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );

		});
    
    </script>

    <div id="r1" class="rate_widget">
        <div class="star_1 ratings_stars"></div>
        <div class="star_2 ratings_stars"></div>
        <div class="star_3 ratings_stars"></div>
        <div class="star_4 ratings_stars"></div>
        <div class="star_5 ratings_stars"></div>
    </div>
</body>
</html>