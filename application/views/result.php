<div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class='filter-head'> <!-- starts:filter -->
				</div><!-- ends:filter -->
				<div class="filter-content rounded">
					<div class="row"> <!-- starts:filter-search -->
						<div class='col-md-12'>
							<form name='search' method='POST' action='result'>
							<div class="filter-search">
								<div class="filter-result-head details-head">
									<h1>Search Again</h1>
								</div>
								<div class="filter-form-row"> <!-- Starts:filter form row -->
									<div class="row">
										<div class="col-md-12">
											<label>City</label>
											<select class="form-control" name="city">
												<option value="Pokhara" <?php echo ($searchInfo['city'] == "Pokhara")?'Selected':''; ?>>Pokhara</option>
												<option value="Kathmandu" <?php echo ($searchInfo['city'] == "Kathmandu")?'Selected':''; ?>>Kathmandu</option>
												<option value="Dharan" <?php echo ($searchInfo['city'] == "Dharan")?'Selected':''; ?>>Dharan</option>
												<option value="Butwal" <?php echo ($searchInfo['city'] == "Butwal")?'Selected':''; ?>>Butwal</option>
												<option value="Biratnagar" <?php echo ($searchInfo['city'] == "Biratnagar")?'Selected':''; ?>>Biratnagar</option>
											</select>
										</div>
									</div>
								</div>	<!-- Ends:filter form row -->

								<div class="filter-form-row"> <!-- Starts:filter form row -->
									<div class="row">
										<div class="col-md-6">
											<label>Check In</label>
											<input type="text" name="checkInDate" placeholder="From" class="form-control datepicker" value="<?php echo $searchInfo['checkInDate']; ?>"/>
										</div>

										<div class="col-md-6">
											<label>Check Out</label>
											<input type="text" name="checkOutDate" class="form-control datepicker" placeholder="To" value="<?php echo $searchInfo['checkOutDate']; ?>"/>	
										</div>
									</div>
								</div>	<!-- Ends:filter form row -->
								<input type="submit" class="btn btn-default inn-button" value="Search">
							</div>
							</form>
						</div>
					</div> <!-- Ends:filter-search -->
					<div class="clear"></div>

					<div class='row'> <!-- starts:filter-result -->
						<div class="col-md-12">
							<div class="filter-result">
								<div class="filter-result-head details-head">
									<h1>Filter Result</h1>
								</div>
								 <div class="filter-option"> <!-- starts:filter option -->
			                        <div class="title">
			                        Room Type
			                        </div>
			                          <div class="values">
			                            <a href=""></a>
			                              <div class="values-list toggle">
			                               
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
			                              </div>
			                          </div>
			                      </div> <!-- ends:filter option -->

			                      <div class="filter-option"> <!-- starts:filter option -->
			                        <div class="title">
			                        Facilities
			                        </div>
			                          <div class="values">
			                            <a href=""></a>
			                              <div class="values-list toggle">
			                               
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
			                              </div>
			                          </div>
			                      </div> <!-- ends:filter option -->

			                      <div class="filter-option"> <!-- starts:filter option -->
			                        <div class="title">
			                        Rating
			                        </div>
			                          <div class="values">
			                            <a href=""></a>
			                              <div class="values-list toggle">
			                               
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
		                                	<div class="value">
		                                    	<label>
		                                      		<input type="checkbox"><span>Option</span>
		                                    	</label>
		                                	</div>
			                              </div>
			                          </div>
			                      </div> <!-- ends:filter option -->

			                      <div class="filter-option"> <!-- starts:filter option -->
			                        <div class="title">
			                        Price Range
			                        </div>
			                          <div class="values">
			                            <a href=""></a>
			                              <div class="values-list toggle">
			                              <div class="range">
			                              	<b>From NRs400</b>
				                              <input type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" >
				                              <b>To NRs5000</b>
			                              </div>
			                              </div>
			                          </div>
			                      </div> <!-- ends:filter option -->
							</div>
						</div>
					</div><!-- Ends:filter-result -->
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="result-content"> <!-- starts:result content -->
					<ol class="breadcrumb"> <!-- starts:breadcrumbs -->
					  <li><a href="<?php echo base_url(); ?>home">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol> <!-- ends:breadcrumbs -->


					<div class="row">
						<div class="main-sarch-content">
							<div class="col-md-12">
								<div class="hotel-place">
									<h1>Hotels In <?php echo $searchInfo['city']; ?></h1>
								</div>
							</div>
							<div class="col-md-12">
								<div class="result-details">
									<p><span><?php echo count($result); ?> Results </span>for <?php echo $searchInfo['checkInDate']; ?> to <?php echo $searchInfo['checkOutDate']; ?> at <?php echo $searchInfo['city']; ?> </p>
								</div>
							</div>
							<div class="col-md-12"> <!-- starts:sort and per page -->
								<div class="row"> 
									<div class="col-xs-6 col-sm-4 col-md-2">
										<div class="sort-result">
											<label>Sort By:</label>
											<select class="form-control">
												<option>Availability</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										<div class="result-per-page">
											<label>Per Page:</label>
											<select class="form-control">
												<option>10</option>
												<option>20</option>
												<option>30</option>
											</select>
										</div>
									</div>
								</div>
							</div> <!-- ends:sort and per page -->
							<div class="clear"></div>
							<div class="col-md-12">
								<div class="results-wrap">
									<?php foreach ($result as $aResult) { $url=base_url('details')."/".$aResult['hotel_id']; ?>
										<div class="row result"> <!-- starts:hotel search row -->
												<div class="col-md-2">
													<a href="<?php echo $url;?>"><img src="<?php echo $aResult['image']['path']; ?>" alt="<?php echo $aResult['image']['alt']; ?>"></a>
												</div>
												<div class="col-md-10">
													<div class="hotel-desc">
														<div class="row">
															<div class="col-md-12">
																<div class="hotel-search-title">
																	<h1><a href="<?php echo $url; ?>"><?php echo $aResult['name'] ?></a></h1>
																	<p><?php echo $aResult['address'] ?></p>
																</div>
															</div>
															<div class="col-md-9">
																<div class="short-desc">
																	<p><?php echo $aResult['description'] ?><a href="<?php echo $url; ?>">more</a> </p>
																</div>
																<div class="search-review">
																	<p><span><?php echo $aResult['rating']; ?>%</span> <?php echo $aResult['reviews']; ?> Total reviews </p>
																</div>
															</div>
															<div class="col-md-3">
																<div class="price-range">
																	<p><span>Price From: </span> <br /> Nrs <?php echo $aResult['rate']; ?></p>
																</div>
																<a href="<?php echo $url;?>"><button class="btn btn-default inn-button">Book</button></a>
															</div>
														</div>
													</div>
												</div>
										</div>  <!-- ends:hotel search row -->
										<div class="clear"></div>
									<?php } ?>
								</div>
							</div>


						</div>
					</div>
				</div> <!-- ends:result content -->
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->