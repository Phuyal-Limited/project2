<div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->

		<div class="row"> <!-- Starts: Search div -->
			<div class="col-md-12">
				<form name='search' method='POST' action='result'>
					<div class="main-search-wrap">
						<div class="row">
							<div class="col-md-12">
								<div class="search-head">
									<h1>Hotel Search</h1>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col-md-3 col-xs-12 col-sm-6">
								<label>Country:</label>
								<select class="form-control" name='country'>
									<option value='Nepal'>Nepal</option>
								</select>
							</div>
							<div class="col-md-3 col-xs-12 col-sm-6">
								<label>City:</label>
								<select class="form-control" name="city">
									<option value="Pokhara">Pokhara</option>
									<option value="Kathmandu">Kathmandu</option>
									<option value="Dharan">Dharan</option>
									<option value="Butwal">Butwal</option>
									<option value="Biratnagar">Biratnagar</option>
								</select>
							</div>
							<div class="col-md-2 col-xs-12 col-sm-6">
								<label>Check In:</label>
								<input type="text" placeholder="From" id="pick1" class="form-control datepicker" name="checkInDate" value='<?php echo $today; ?>' required></div>
							<div class="col-md-2 col-xs-12 col-sm-6">
								<label>Check Out:</label>
								<input type="text" placeholder="To" id="pick2" class="form-control datepicker" name="checkOutDate" value='<?php echo $tomorrow; ?>' required></div>
							<div class="col-md-2 col-xs-12 col-sm-12">
								<input type="submit" value="Search" class="btn btn-default search-btn inn-button"></div>
						</div>
							<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>  <!-- Ends: Search div -->
		<div class="clear-big"></div>

		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="home-info-containers">
					<h1>Go?</h1>
					<div class="thumbnail">
						<img src="<?php echo base_url('assets/images/sample-image-1.jpg'); ?>">
					</div>
					<div class="home-info-content">
						In publishing and graphic design, lorem ipsum is a placeholder text (filler text) commonly used to demonstrate the graphic elements of a document or visual ...
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="home-info-containers">
					<h1>Stay?</h1>
					<div class="thumbnail">
						<img src="<?php echo base_url('assets/images/sample-image-2.jpg'); ?>">
					</div>
					<div class="home-info-content">
						In publishing and graphic design, lorem ipsum is a placeholder text (filler text) commonly used to demonstrate the graphic elements of a document or visual ...
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="home-info-containers">
					<h1>Explore?</h1>
					<div class="thumbnail">
						<img src="<?php echo base_url('assets/images/sample-image-3.jpg'); ?>">
					</div>
					<div class="home-info-content">
						In publishing and graphic design, lorem ipsum is a placeholder text (filler text) commonly used to demonstrate the graphic elements of a document or visual ...
					</div>
				</div>
			</div>
		</div>

	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->