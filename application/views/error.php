<div class="clear"></div>
<div class="content"> <!-- starts:content -->
	<div class="container"> <!-- starts:container -->
		<div class="col-md-12">
			<div class="alert alert-warning">
				<strong>Error in payment!!</strong> Your Reservation has not been confirmed.
				
			</div>

			<div class="error-desc">
				<div class="error-desc-head">
					<h1>Error Details</h1>
				</div>

				<div class="error-desc-content">
					<p>
						
					 We are not able to confirm your reservation of the rooms as the deposit payment you made was rejected by
						the payment gateway. The message from payment gateway: <?php echo $message; ?></p>
				</div>
				<div class="clear"></div>
				<a href=<?php echo base_url(); ?>><button class="btn btn-default inn-button">Back</button></a>
			</div>
		</div>
	</div> <!-- starts:container -->
</div> <!-- starts:content -->