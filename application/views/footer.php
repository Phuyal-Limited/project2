<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script> <!-- custom jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> <!-- jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> <!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.core.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.widget.js'); ?>"></script> <!-- jquery ui datepicker -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.datepicker.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript">

	//tooltip

	$(function () {
	$("[rel='tooltip']").tooltip();
	});


	//date-picker

	$(function() {
			$( ".datepicker" ).datepicker();
		});

	//change color of selected room
	$( "#change-color" ).click(function() {
		var clr = $(this).css("background-color");
		if(clr!='rgb(237, 111, 88)'){
			$( this ).css( {"background-color": "#ed6f58" , "padding": "11px"} );
			$('#selected').css({"display": "none"});
		}else{
			$( this ).css( {"background-color": "#1A71AC" , "padding": "3px"} );
			$('#selected').css({"display": "block"});

		}
	  	
	});


</script>
</body>
</html>