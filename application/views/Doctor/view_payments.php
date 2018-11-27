<!DOCTYPE html>
<html>
<head>
<title>Tooth Clinic</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<style type="text/css">
	body {font-family: "Lato", sans-serif}
	.mont{
  		font-family: "Montserrat", sans-serif;
	}
	.calib{
  		font-family: "Calibri", sans-serif;
	}
	label {font-family: "Lato", sans-serif;margin-top: 15px;margin-bottom: 7px;display: block;color: rgba(0,0,0,0.8);}
	input {margin-bottom: 15px;}
	.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}
	.calendar{
		font-family:Arial;font-size:12px;
	}
	table.calendar{
		margin:Auto;border-collapse:collapse;
	}
	.calendar .days td{
		width:80px;height:80px;padding:4px;
		border:1px solid #999;
		vertical-align:top;
		background-color:#DEF;
	}
	.apt{
		width:80px;height:20px;padding:4px;
		border:1px solid #999;
		vertical-align:top; 
		background-color:#F9B4DB
 ;
	}
	
	.nCont{
		width:80px;height:80px;padding:4px;
	}



</style>


</head> 
<body>
	<div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
		<div class="content" style="background: #f0f0f0" id="reserve-service">
		
				  	<!-- <div class="form-group ">
				  	<br/>
				    <label class="control-label col-sm-2" for="email">Patient ID</label>
				    	 <div class="row"> -->
				    		<!-- <div class="col-sm-4">
				      			<input type="email" class="form-control" id="email" placeholder="Enter Patient ID">
				      			
				    		</div>
				    		<div class="col-sm-4">
				    			<button type="button" class="btn btn-info" onclick="">
      								<span class="glyphicon glyphicon-search"></span> Search
    							</button>
				    		</div> -->
				    	<!-- </div> -->
				    
				    
				 <!--  </div> -->
		<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Payments</h3>
                    <div class="box-tools">
                        <form method = "POST" action= "<?=base_url('Doctor/view')?>"  >
                            <div class="input-group">
                              <!-- <input type="text" name="patient_id"  id="patient_id"class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/> -->
                              <div class="col-sm-8"> 
                    <input type="text" class="form-control" name="patient_id" placeholder="Enter User ID">
                  </div>
                              <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Search</button>
                      
                  </div>
                </div>
                <br>
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <a href="<?=base_url("Doctor/updatePayment")?>">
                      <button type="button" class="btn btn-primary" >Update</button>
                    </a>
                  </div>
                </div>
                
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <br/>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" style="width:800px;">
                    <tr>
                      <th>Treatment</th>
                      <th>Amount Paid</th>
                      <th>Pending Amount</th>
                      
                      <!-- <th class="text-center">Actions</th> -->
                    </tr>

                    
                    <?php
                    if(!empty($records))
                    {
                        foreach ($records as $rec){
                    ?> 
                    <tr>
                      <td><?php echo $rec->treatment?></td>
                      <td><?php echo $rec->date ?></td>
                      <td><?php echo $rec->remarks ?></td>
                      <!-- 
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>"><i class="fa fa-trash"></i></a> -->
                      
                    </tr>
                    <?php
                        }
                    }
                    ?> 
                  </table>
                  
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div>
        </div>
				  <!-- <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				       <div class="checkbox">
				        <label><input type="checkbox"> Remember me</label>
				      </div> 
				    </div>				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div> -->
</form>
			
		</div>
	</div>
                
</body>
</html>