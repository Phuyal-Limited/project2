<div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="result-content"> <!-- starts:detail content -->
					<ol class="breadcrumb"> <!-- starts:breadcrumbs -->
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol> <!-- ends:breadcrumbs -->
					<div class='row'>
						<div class="col-md-12">
							<div class="hotel-title">
								<h1>Hotel Bidur Subedi</h1>
								<p>lakeside, Pokhara</p>
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
													<img src="<?php echo base_url('assets/images/owner.jpg'); ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3 col-padding col-padding-first">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding col-padding-last">
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
															<p><span>Rating:73%</span> 13 Total Reviews</p>
														</div>
													</div>
													<div class="rating-cat">
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="latest-review-head">
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
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo</p>
												</div>
											</div>
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
						<div class="col-md-2 col-xs-6 col-sm-3">
							<label>Check In:</label>
							<input type="text" class="form-control datepicker" value="<?php echo $checkInDate;?>">
						</div>
						<div class="col-md-2 col-xs-6 col-sm-3">
							<label>Check Out:</label>
							<input type="text" class="form-control datepicker" value="<?php echo $checkOutDate;?>">
						</div>
						<button class="btn btn-default inn-button hor-form-btn">Check</button>

						<div class='col-md-12'>
							<div class="clear"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
								Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo Lorem ipsum dolor sit amet,</p>
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
										<div class="room-display-head">
											Guests
										</div>
									</div>
								</div>  <!-- ends:head row -->

<<<<<<< HEAD

								<?php
								$size = sizeof($available_rooms);
								if($size == 0){
									//no rooms available
								}else{
									for($i=0;$i<$size;$i++){
=======
								<div class="row"> <!-- starts:room-row -->
									<div class="col-md-12">
										<div class="room-row-wrap">
											<div class="col-md-4 col-xs-4 col-sm-4">
												<div class="room-type">
													Delux Room
												</div>
												<div class="room-type-desc">
													<p>lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.</p>
												</div>
											</div>
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display" id="change-color">501 <p id="selected" style="display:none;">selected</p></div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- ends:room-row -->

								<div class="row"> <!-- starts:room-row -->
									<div class="col-md-12">
										<div class="room-row-wrap">
											<div class="col-md-4 col-xs-4 col-sm-4">
												<div class="room-type">
													Delux Room
												</div>
												<div class="room-type-desc">
													<p>lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.</p>
												</div>
											</div>
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- ends:room-row -->
>>>>>>> 44fe89e920cbf9bca3a344397e1732c313994d2a

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
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<?php 
															for($j=0;$j<sizeof($available_rooms[$i]['rooms']);$j++){
														?>
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
               												<div class="room-display" id="<?php echo 'change-color'.$i.'-'.$j;?>" onclick="return select_room(<?php echo $i;?>, <?php echo $j;?>);">
               													<input type="hidden" id="<?php echo 'template_id'.$i.'-'.$j;?>" value="<?php echo $available_rooms[$i]['template_id']; ?>">
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
										</div>
									</div>
								</div><!-- ends:room-row -->
								<?php 
									}
								}
								?>

							</div><!-- ends:table-wrap -->
						</div>

						<div class="col-md-12">
							<div class="availability-btn">
								<input type="hidden" name="template_id" id="template_id" />
								<input type="hidden" name="room_id" id="room_id" />
								<input type="submit" class="btn btn-default inn-button hor-form-btn">
							</div>
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
						<div class="col-md-3 facility"><i class="fa fa-caret-right"></i> <?php echo strtoupper($hotel_facilities[$i][1]);?></div>
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
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>	

					
				</div> <!-- ends:detail content -->
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents --><div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="result-content"> <!-- starts:detail content -->
					<ol class="breadcrumb"> <!-- starts:breadcrumbs -->
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol> <!-- ends:breadcrumbs -->
					<div class='row'>
						<div class="col-md-12">
							<div class="hotel-title">
								<h1>Hotel Bidur Subedi</h1>
								<p>lakeside, Pokhara</p>
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
													<img src="<?php echo base_url('assets/images/owner.jpg'); ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3 col-padding col-padding-first">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding">
														<img src="<?php echo base_url("assets/images/owner.jpg"); ?>">
													</div>
													<div class="col-md-3 col-padding col-padding-last">
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
															<p><span>Rating:73%</span> 13 Total Reviews</p>
														</div>
													</div>
													<div class="rating-cat">
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
														<div class='col-md-6'>Atmosphere <p>23%</p></div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="latest-review-head">
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
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
														Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo</p>
												</div>
											</div>
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
						<div class="col-md-2 col-xs-6 col-sm-3">
							<label>Check In:</label>
							<input type="text" class="form-control datepicker" value="<?php echo $checkInDate;?>">
						</div>
						<div class="col-md-2 col-xs-6 col-sm-3">
							<label>Check Out:</label>
							<input type="text" class="form-control datepicker" value="<?php echo $checkOutDate;?>">
						</div>
						<button class="btn btn-default inn-button hor-form-btn">Check</button>

						<div class='col-md-12'>
							<div class="clear"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante.
								Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo Lorem ipsum dolor sit amet,</p>
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
										<div class="room-display-head">
											Guests
										</div>
									</div>
								</div>  <!-- ends:head row -->

<<<<<<< HEAD

								<?php
								$size = sizeof($available_rooms);
								if($size == 0){
									//no rooms available
								}else{
									for($i=0;$i<$size;$i++){
=======
								<div class="row"> <!-- starts:room-row -->
									<div class="col-md-12">
										<div class="room-row-wrap">
											<div class="col-md-4 col-xs-4 col-sm-4">
												<div class="room-type">
													Delux Room
												</div>
												<div class="room-type-desc">
													<p>lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.</p>
												</div>
											</div>
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display" id="change-color">501 <p id="selected" style="display:none;">selected</p></div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- ends:room-row -->

								<div class="row"> <!-- starts:room-row -->
									<div class="col-md-12">
										<div class="room-row-wrap">
											<div class="col-md-4 col-xs-4 col-sm-4">
												<div class="room-type">
													Delux Room
												</div>
												<div class="room-type-desc">
													<p>lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.lorem Ipsum Dolor Sit Amet.</p>
												</div>
											</div>
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
															<div class="room-display">201</div>
														</div><!-- ends:a room -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- ends:room-row -->
>>>>>>> 44fe89e920cbf9bca3a344397e1732c313994d2a

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
											<div class="col-md-8 col-xs-5 col-sm-6">
												<div class="room-select">
													<div class="row">
														<?php 
															for($j=0;$j<sizeof($available_rooms[$i]['rooms']);$j++){
														?>
														<div class="col-md-2 col-xs-6 col-sm-3"> <!-- starts:a room -->
               												<div class="room-display" id="<?php echo 'change-color'.$i.'-'.$j;?>" onclick="return select_room(<?php echo $i;?>, <?php echo $j;?>);">
               													<input type="hidden" id="<?php echo 'template_id'.$i.'-'.$j;?>" value="<?php echo $available_rooms[$i]['template_id']; ?>">
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
										</div>
									</div>
								</div><!-- ends:room-row -->
								<?php 
									}
								}
								?>

							</div><!-- ends:table-wrap -->
						</div>

						<div class="col-md-12">
							<div class="availability-btn">
								<input type="hidden" name="template_id" id="template_id" />
								<input type="hidden" name="room_id" id="room_id" />
								<input type="submit" class="btn btn-default inn-button hor-form-btn">
							</div>
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
						<div class="col-md-3 facility"><i class="fa fa-caret-right"></i> <?php echo strtoupper($hotel_facilities[$i][1]);?></div>
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
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
								<div class="col-md-6 col-sm-6 col-xs-6 rate-review">Atmosphere</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>	

					
				</div> <!-- ends:detail content -->
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->