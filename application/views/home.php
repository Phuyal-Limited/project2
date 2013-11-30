<div class="clear"></div>
<div class="content"> <!-- starts:contents -->
	<div class="container"  <!-- starts:container -->
		<div class="row">
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
								<input type="text" placeholder="From" class="form-control datepicker" name="checkInDate" value='<?php echo $today; ?>'></div>
							<div class="col-md-2 col-xs-12 col-sm-6">
								<label>Check Out:</label>
								<input type="text" placeholder="To" class="form-control datepicker" name="checkOutDate" value='<?php echo $tomorrow; ?>'></div>
							<div class="col-md-2 col-xs-12 col-sm-12">
								<input type="submit" value="Search" class="btn btn-default search-btn inn-btn"></div>
						</div>
							<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- ends:container -->
</div>  <!-- ends:contents -->