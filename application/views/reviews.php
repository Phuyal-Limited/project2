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
							<div class="hotel-name">
								<h1><a href=""><?php echo $hotelInfo->name; ?></a></h1>
								<p><?php echo $hotelInfo->address; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="details-head">
								<h1>Reviews And Ratings</h1>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="rate-and-review">
								<div class="row">
									<div class="col-md-3">
										<div class="rating-percentage">
											<h2>Ratings</h2>
											<span><?php echo $ratings['average'].'%'; ?></span>
											<p><?php echo $reviews_no; ?> Total reviews</p>
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-4">
												<div class="rate-list">
													<span><?php echo $ratings['friendliness'].'%'; ?></span>
													Hospitality
												</div>
											</div>
											<div class="col-md-4">
												<div class="rate-list">
													<span><?php echo $ratings['services'].'%'; ?></span>
													Services
												</div>
											</div>
											<div class="col-md-4">
												<div class="rate-list">
													<span><?php echo $ratings['values'].'%'; ?></span>
													Value
												</div>
											</div>
											<div class="col-md-4">
												<div class="rate-list">
													<span><?php echo $ratings['cleanliness'].'%'; ?></span>
													Cleanliness
												</div>
											</div>
											<div class="col-md-4">
												<div class="rate-list">
													<span><?php echo $ratings['dining'].'%'; ?></span>
													Dining
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" >
											<input type="hidden" id="hotel_id" value="<?php echo $hotelInfo->hotel_id; ?>" />
											<button class="btn btn-default" data-toggle="modal" data-target="#rate-modal" id="rating-button" style=" margin-left:40px; padding: 2px 12px; <?php echo $rate_style; ?>">Rate this Inn</button>
											<button class="btn btn-default" data-toggle="modal" data-target="#review-modal" style="padding: 2px 12px; <?php echo $review_style; ?>">Write a review</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-md-12">
							<div class='sort-reviews'>
								<div class="row">
									<div class="col-md-12">
										<div class="reviews-head">
											<h2>Reviews</h2>
										</div>	
									</div>		
								</div>
								<div class="row">
									<div class='col-md-1'>
										<label>Sort By:</label>
									</div>
									<div class='col-md-2'>
											<select class="form-control">
												<option>Newest</option>
												<option>Newest</option>
												<option>Newest</option>
											</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<?php
						if(sizeof($reviews)==0){
							echo "No reviews yet.";
						}else{
							for($i=0;$i<sizeof($reviews);$i++){

					?>
					<div class="row"><!-- starts:review-row -->
						<div class="col-md-8">
							<div class="review-row">
								<div class="row">
									<div class='col-md-3'>
										<div class="user-desc">
											<h3><?php echo $reviews[$i]['name']; ?></h3>
											<!-- lakeside, Pokhara <br /> -->
											<!-- <em><?php echo $reviews[$i]['name']; ?> Rated </em><span>80%</span> -->
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12">
												<div class="review-date">
													<span><?php echo $reviews[$i]['date']; ?></span>
												</div>
											</div>
											<div class="col-md-12">
												<div class='review-text'>
													<?php echo $reviews[$i]['description']; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ends:review-row -->
					<?php 
						}
					}
					?>
					
				</div> <!-- ends:detail content -->
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->
<div class='clear-big'></div>