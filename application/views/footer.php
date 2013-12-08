<div class="clear-big"></div>
<div class="footer-main">
	
</div>
<div class="footer-sec center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-sec-navs">
					<ul>
						<li>
							<a href="">Home</a>
						</li>
						<li>
							<a href="">About</a>
						</li>
						<li>
							<a href="">Contact</a>
						</li>
						<li>
							<a href="">FAQ</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				&copy Nepal Inn 2013
			</div>
		</div>
	</div>
</div>





<!-- <p>Range selector, options specified via data attribute.</p>
          <div class="well">
            Filter by price interval: <b>€ 10</b> <input type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" > <b>€ 1000</b>
          </div> -->






<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> <!-- jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.raty.min.js'); ?>"></script> <!-- custom jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.core.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script> <!-- custom jquery -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> <!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.widget.js'); ?>"></script> <!-- jquery ui datepicker -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.datepicker.js'); ?>"></script> <!-- jquery ui -->
<script type="text/javascript" src="<?php echo base_url('assets/js/star-rating.js'); ?>"></script> <!-- star-rating-->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-slider.js'); ?>"></script>  <!-- bootstrap slider -->
<script type="text/javascript" src="<?php echo base_url('assets/js/hideshow.js'); ?>"></script>  <!-- hide show-->
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

	//Show hide in filter 
	$('#myTab a').click(function (e) {
                    
            e.preventDefault();
            $(this).tab('show');
          });

	

if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
        	$('#sl2').slider();
    });



		$(function(){
			$("div#Hospitality").raty({
				hintList: ['bad', 'poor', 'regular', 'good', 'brilliant'],
				path: 'http://localhost/project2/assets/img/'
			});

			$("div#Value").raty({
				hintList: ['bad', 'poor', 'regular', 'good', 'brilliant'],
				path: 'http://localhost/project2/assets/img/'
			});

			$("div#Services").raty({
				hintList: ['bad', 'poor', 'regular', 'good', 'brilliant'],
				path: 'http://localhost/project2/assets/img/'
			});

			$("div#Dining").raty({
				hintList: ['bad', 'poor', 'regular', 'good', 'brilliant'],
				path: 'http://localhost/project2/assets/img/'
			});

			$("div#Cleanliness").raty({
				hintList: ['bad', 'poor', 'regular', 'good', 'brilliant'],
				path: 'http://localhost/project2/assets/img/'
			});

			$("#Hospitality :input").attr('id', 'hospitality_val');
			$("#Value :input").attr('id', 'value_val');
			$("#Services :input").attr('id', 'service_val');
			$("#Dining :input").attr('id', 'dining_val');
			$("#Cleanliness :input").attr('id', 'cleanliness_val');
		});

    </script>
</body>
</html>