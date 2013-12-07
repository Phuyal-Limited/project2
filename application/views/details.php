<div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="result-content"> <!-- starts:detail content -->
					<ol class="breadcrumb"> <!-- starts:breadcrumbs -->
					  <li><a href="<?php echo base_url(); ?>home">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol> <!-- ends:breadcrumbs -->
					<div class='row'>
						<div class="col-md-12">
							<div class="hotel-name">
								<h1><?php echo $hotelInfo['name']; ?></h1>
								<p><?php echo $hotelInfo['address']; ?></p>
							</div>
						</div>
					</div>
					<div class="row"> <!-- starts:overview -->
						<div class="overview-wrap rounded">
							<div class="col-md-12">
								<div class="details-head">
									<h1>Overview</h1>
								</div>
							</div>	
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3"> <!-- starts:image-section -->
										<div class="row">
											<div class="col-md-12">
												<div class="thumbnail">
													<img src="<?php echo $hotelInfo['image']['path']; ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-3 col-padding col-padding-first">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 col-padding col-padding-last">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
												</div>
											</div>
										</div>
									</div> <!-- ends:image-section -->
									<div class="col-md-9"><!-- starts:main-section -->
										<div class='row'>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-12">
														<div class="total-review">
															<button class="btn btn-default" data-toggle="modal" data-target="#rate-modal" style="float:right; padding: 2px 12px;">Rate this Inn</button>
															<p><span>Rating:<?php echo $ratings['average']; ?>%</span> <?php echo $reviews; ?> Total Reviews</p>
														</div>
													</div>
													<div class="rating-cat">
														<div class='col-md-6'>Hospitality: <p><?php echo $ratings['friendliness']; ?>%</p></div>
														<div class='col-md-6'>Services: <p><?php echo $ratings['services']; ?>%</p></div>
														<div class='col-md-6'>Value: <p><?php echo $ratings['value']; ?>%</p></div>
														<div class='col-md-6'>Cleanliness: <p><?php echo $ratings['cleanliness']; ?>%</p></div>
														<div class='col-md-6'>Dining: <p><?php echo $ratings['dining']; ?>%</p></div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="latest-review-head">
													<button class="btn btn-default" data-toggle="modal" data-target="#review-modal" style="float:right; padding: 2px 12px;">Write a review</button>
													<p>Latest Review</p>
													<div class="one-review">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo <a href="">more</a></p>
														<p><a href="">Read all reviews</a> </p>
														
														


    
													</div>
												</div>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">
												<div class="col-md-12">
													<p><?php echo $hotelInfo['description']; ?></p>
												</div>
											</div>
											<!-- <div class="clear"></div>
											<div class="row">
												<div class="col-md-12">
													<button class="btn btn-default">Rate</button>
													<button class="btn btn-default">Write a review</button>
												</div>
											</div> -->
									</div> <!-- ends:main-section -->
								</div>
							</div>
						</div>
					</div> <!-- ends:overview -->
					<div class="clear"></div>	

					<div class='row'><!-- starts:Aviability and rates -->
						<div class="col-md-12">
							<div class="details-head">
								<h1>Aviability and Rates</h1>
							</div>
						</div>
						<form name='change_date' action='' method='POST'>
							<div class="col-md-2 col-xs-6 col-sm-3">
								<label>Check In:</label>
								<input type="text" id="pick1" class="form-control datepicker" value="<?php echo $checkInDate;?>" name="checkInDate">
							</div>
							<div class="col-md-2 col-xs-6 col-sm-3">
								<label>Check Out:</label>
								<input type="text" id="pick2" class="form-control datepicker" value="<?php echo $checkOutDate;?>" name="checkOutDate">
							</div>
							<input type='submit' class="btn btn-default inn-button hor-form-btn" value='Change' name='changeDate' style="margin-top: 35px;" />
						</form>
						<div class='col-md-12'>
							<div class="clear"></div>
							<p>Please click on the rooms you wish to select.</p>
						</div>
					</div> <!--ends:Aviability and rates -->
					<div class="clear"></div>

					<div class="row"><!--starts:Aviability table -->
						<div class="col-md-12">
							<div class="rounded table-wrap"><!-- starts:table-wrap -->
								<div class="row">  <!-- starts:head row -->
									<div class='col-md-4 col-xs-4 col-sm-4'>
										<div class="room-display-head">
											Room Type
											<p>Click on a room type to view more information.</p>
										</div>
									</div>
									<div class='col-md-7 col-xs-5 col-sm-6'>
										<div class=" room-display-head">
											Rooms
											<p>Click on a room to select it.</p>
										</div>
									</div>
									<div class='col-md-1 col-xs-3 col-sm-2'>
										<div class=" room-display-head">
											Price
											<p>Per Room</p>
										</div>
									</div>
								</div>  <!-- ends:head row -->

								<?php
								$size = sizeof($available_rooms);
								if($size == 0){
									//no rooms available
								}else{
									for($i=0;$i<$size;$i++){
								?>

								<div class="row"> <!-- starts:room-row -->
									<div class="col-md-12">
										<div class="room-row-wrap">
											<div class="col-md-4 col-xs-4 col-sm-4">
												<div class="room-type">
													<?php echo $available_rooms[$i]['name'];?>
												</div>
												<div class="room-type-desc">
													<p><?php echo $available_rooms[$i]['description']; ?></p>
												</div>
											</div>
											<div class="col-md-7 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<?php 
															for($j=0;$j<sizeof($available_rooms[$i]['rooms']);$j++){
														?>
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
               												<div class="room-display" id="<?php echo 'change-color'.$i.'-'.$j;?>" onclick="return select_room(<?php echo $i;?>, <?php echo $j;?>);">
               													<input type="hidden" id="<?php echo 'room_id'.$i.'-'.$j;?>" value="<?php echo $available_rooms[$i]['rooms'][$j]['room_id']; ?>">
               													<?php echo $available_rooms[$i]['rooms'][$j]['room_no']; ?> <p id="selected<?php echo $i.'-'.$j;?>" style="display:none;">selected</p>
               												</div>
              											</div><!-- ends:a room -->
              											<?php 
              												}
              											?>
													</div>
												</div>
											</div>
											<div class='col-md-1 col-xs-3 col-sm-2'>
												<div class="room-display-price">
													<span>NRs.</span> 2132.13
												</div>
											</div>
										</div>
									</div>
								</div><!-- ends:room-row -->
								<?php 
									}
								}
								?>

							</div><!-- ends:table-wrap -->
						</div>
						<div style="display:none;" id="submit-form">
						<form method="post" action="<?php echo base_url();?>checkout">
							<div class="col-md-12">
								<div class="availability-btn">
									<span id="room_msg"></span><br/>
									<input type="hidden" name="room_id" id="room_id" />
									<input type="hidden" name="hotel_id" id="hotel_id" value="<?php echo $hotel_id;?>"/>
									<input type="button" name="submit" value="Book Now" onclick="return validate_submit();" class="btn btn-default inn-button hor-form-btn">
									<input type="submit" name="submit" value="Book Now" id="book_now" style="display:none;" class="btn btn-default inn-button hor-form-btn">
								</div>
							</div>
						</form>
						</div>
					</div><!--ends:Aviability table -->
					<div class="clear"></div>

					<div class="row"> <!-- Starts:facilities -->
						<div class='col-md-12'>
							<div class="details-head">
								<h1>Facilitiess</h1>
							</div>
						</div>
						<?php 
							$row = sizeof($hotel_facilities);
							for($i=0;$i<$row;$i++){
								if($hotel_facilities[$i][2]==1){								
						?>
						<div class="col-md-3 col-sm-6 col-xs-12 facility"><i class="fa fa-caret-right"></i> <?php echo strtoupper($hotel_facilities[$i][1]);?></div>
						<?php
								}
							}
						?>
						
					</div> <!-- ends:facilities -->
					<div class="clear"></div>

					<div class="row">
						<div class="col-md-12">
							<div class="details-head">
								<h1>Map And Direction</h1>
							</div>
							<div class="col-md-6 kale">
								google map here!!
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<div class="row">
						<div class="col-md-12">
							<div class="details-head">
								<h1>Reviews</h1>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-12 rate-review">Atmosphere</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>	

					<div class="row">
						<div class="col-md-12">
							<div class="details-head">
								<h1>Comments</h1>
							</div>
						</div>
						<div class='col-md-12'>
							<div class=""></div>
						</div>
					</div>

					
				</div> <!-- ends:detail content -->
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->


