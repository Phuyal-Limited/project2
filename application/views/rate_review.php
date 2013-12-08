<!-- Rate Modal -->
<div class="modal fade" id="rate-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title" id="myModalLabel">Rate this Inn</h1>
      </div>
      <div class="modal-body">
        <!--starts content -->
        	<div id="ratings" class='row'>
        		<?php 
              for($i=0;$i<sizeof($rating_names);$i++){
            ?>

            <div class="col-md-6">
        			<div class="rate-stars">
        				<div id="<?php echo $rating_names[$i]; ?>" style="width:10px;"></div>
        			</div>
        			<p><?php echo $rating_names[$i]; ?></p>
        		</div>
            
            <?php 
              }
            ?>
        		
        	</div>
        <!--ends content -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default inn-button" id="submit-rating" data-dismiss="modal">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.Rate modal -->

<!-- Review Modal -->
<div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title" id="myModalLabel">Write a Review</h1>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="row"> <!-- Starts:form-row -->	
      				<div class="col-md-3">
      					<label>Name:</label>
      				</div>
      				<div class="col-md-9">
      					<input type="text" class="form-control" placeholder="Name">
      					<!-- <p class="form-info">Name is optional.</p> -->
      				</div>
      			</div>
      			<div class="clear"></div><!-- Ends:form-row -->	

      			<div class="row"> <!-- Starts:form-row -->	
      				<div class="col-md-3">
      					<label>Email:<em>*</em></label>
      				</div>
      				<div class="col-md-9">
      					<input type="text" class="form-control" required placeholder="Email Address">
      					<p class="form-info">Email Address will not be published.</p>
      				</div>
      			</div>
      			<div class="clear"></div><!-- Ends:form-row -->

      			<div class="row"> <!-- Starts:form-row -->	
      				<div class="col-md-3">
      					<label>Title:<em>*</em></label>
      				</div>
      				<div class="col-md-9">
      					<input type="text" class="form-control" required placeholder="Email Address" required>
      					<!-- <p class="form-info">Title is required.</p> -->
      				</div>
      			</div>
      			<div class="clear"></div><!-- Ends:form-row -->

      			<div class="row"> <!-- Starts:form-row -->	
      				<div class="col-md-3">
      					<label>Comment:<em>*</em></label>
      				</div>
      				<div class="col-md-9">
      					<textarea class="form-control" ></textarea>
      				</div>
      			</div>
      			<div class="clear"></div><!-- Ends:form-row -->
      		</div>
      	</div>


      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default inn-button">Post</button>
        <button type="button" class="btn btn-default inn-button" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.Review modal -->