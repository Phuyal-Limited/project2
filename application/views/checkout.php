<div class="clear"></div>
<div class="content"> <!-- starts:content -->
	<div class="container"><!-- starts:container -->
		<div class="row">
			<div class="col-md-12">
				<div class="checkout-content"><!-- starts:checkout content-->

					<div class="row">
						<div class='col-md-12'>
							<h1>Payment</h1>
						</div>
						<div class="clear"></div>
						<div class="col-md-12">
							<div class="checkout-room-details">
								<div class="hotel-name">
									<h1>Hotel Bidur Subedi</h1>
									lakeside, Pokhara
								</div>
								<div class='clear'></div>

								<div class="rounded table-wrap">
									<div class="row"> <!-- starts:room-head -->
										<div class="col-md-6 col-xs-4">
											<div class="room-display-head">
												Room Srandard
											</div>
										</div>
										<div class="col-md-2 col-xs-2">
											<div class="room-display-head">
												No.Of Rooms
											</div>
										</div>
										<div class="col-md-2 col-xs-3">
											<div class="room-display-head">
												Rate
											</div>
										</div>
										<div class="col-md-2 col-xs-3">
											<div class="room-display-head">
												Total
											</div>
										</div>
									</div> <!-- starts:room-head -->
									
									<div class="row room-table-content">  <!-- starts:room-row -->
										<?php 
											$size = sizeof($checkout_details);
											$sum = 0;
											for($i=0;$i<$size;$i++){
												$total = $checkout_details[$i]['no_of_rooms'] * $checkout_details[$i]['rate'];
												$sum += $total;
										?>
										<div class="col-md-12">
											<div class="room-row-wrap">
												<div class="col-md-6 col-xs-4">
													<div class="room-type">
														<?php echo $checkout_details[$i]['template_name'];?>
													</div>
												</div>
												<div class="col-md-2 col-xs-2">
													<p><?php echo $checkout_details[$i]['no_of_rooms'];?></p>
												</div>
												<div class="col-md-2 col-xs-3">
													NRs. <?php echo $checkout_details[$i]['rate']; ?>
												</div>
												<div class="col-md-2 col-xs-3">
													NRs. <?php echo $total;?>
												</div>
											</div>
										</div>
										<?php
											}
											$booking_deposite = $sum * 0.2;
										?>
										<div class="clear-big"></div>
										<div class="col-md-12">
											<div class="booking-totals">
												<p>No. Of Days: <span>5</span> </p>
												<p>Grand Total: <span>NRs <?php echo $sum;?></span> </p>
												<div class="booking-fee">
													<p>Booking Deposite (20% of Grand Total): <span>NRs <?php echo $booking_deposite;?></span></p>
												</div>
											</div>
										</div>
									</div> <!-- starts:room-row -->
								</div>
							</div>
							<div class="clear-big"></div>
						</div>

						<div class="col-md-12">
							<div class="cus-details rounded"> <!-- starts:cus details -->
								<div class="colored-head">
									<h1>Your Details</h1>
								</div>
								<div class='detail-content'>
									<div class="clear"></div>
									<div class="row"> <!-- starts:form-row -->
										<div class="col-md-3 col-sm-4 col-xs-4">
											<label>Name:</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-8">
											<input class='form-control' type="text" placeholder="Name Here">
										</div>
									</div> <!-- starts:form-row -->
									<div class="clear"></div> <!-- clears some field below form-row -->

									<div class="row">
										<div class="col-md-3 col-sm-4 col-xs-4">
											<label>Address:</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-8">
											<input class='form-control' type="text" placeholder="Address Here">
										</div>
									</div>
									<div class="clear"></div> <!-- clears some field below form-row -->

									<div class="row">
										<div class="col-md-3 col-sm-4 col-xs-4">
											<label>City:</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-8">
											<select class='form-control'>
												<option>Pokhara</option>
												<option>Kathmandu</option>
											</select>
										</div>
									</div>
									<div class="clear"></div> <!-- clears some field below form-row -->
									<div class="row">
										<div class="col-md-3 col-sm-4 col-xs-4">
											<label>DOB:</label>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-4">
											<select class='form-control'>
												<option>MM</option>
												<option>1</option>
												<option>2</option>
											</select>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-4">
											<select class='form-control'>
												<option>YYY</option>
												<option>2013</option>
												<option>2014</option>
											</select>
										</div>
									</div>
									<div class="clear"></div> <!-- clears some field below form-row -->
									<div class="col-md-12">
										<div class="form-footer">
											<label><input type="checkbox"><span>I agree the terms and condition.</span></label> <br />
											<label><input type="checkbox"><span>Anything!!</span></label>
											<div class="clear-small"></div>
											<div class="warning"><span>Total Payable Amount: NRs 1212.12</span></div>
											<div class="clear-small"></div>
											<input class="btn btn-detault inn-button" type="submit" value="Confirm Payment">
										</div>
									</div>
									<div class="clear"></div> <!-- clears some field below form-row -->
								</div>
							</div> <!-- ends:cus details -->
							<div class="clear-big"></div>

						</div>
					</div>

				</div><!-- ends:checkout content-->
			</div>
		</div>
	</div><!-- starts:container -->
</div><!-- ends:content -->
<div class="clear-big"></div>