<div style="height: 100px; width: 100%">

</div>
<div class="container ml-5">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Add Medicine <small></small></h3>
			 			</div>
			 			<div class="panel-body">


			    		<form action ="<?php echo base_url()?>save-medicine" method="post">
			    			
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                            <input type="text"  name="medicine_name" id="first_name" class="form-control " placeholder="Medicine Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                            <input type="text"  name="medicine_generic_name" id="first_name" class="form-control " placeholder="Medicine Generic Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                            <input type="text"  name="medicine_strength" id="first_name" class="form-control " placeholder="Medicine Strength">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                            <input type="number" min='1'  name="price" id="first_name" class="form-control " placeholder="Per Packet">
			    					</div>
								</div>
										    		
			    			
			    			<input type="submit" value="Add Medicine" class="btn btn-info btn-block">
			    		
                        </form>
                        

			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>