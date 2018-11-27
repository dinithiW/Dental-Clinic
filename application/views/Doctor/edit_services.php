<!DOCTYPE html>
<html>
<head>
<title>Customer dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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
	.calendar .days td:hover{
		background-color: #FFF;
	}
	.calendar .highlight{
		font-weight:bold; color:#00F;
	}
	.nCont{
		width:80px;height:80px;padding:4px;
	}



</style>


</head> 
<body>
	<div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
		<div class="content" style="background: #f0f0f0" id="reserve-service">

			<form class="form-horizontal" 
			<?php if($update == true): ?>
				action="<?php echo base_url().'Doctor/updateService/'.$service_id;?>" method = "POST">

			<?php else: ?>
				action="<?php echo base_url().'Doctor/updateService/'.$records->service_id;?>" method = "POST">
			<?php endif?>
				  <div class="form-group">
				  	<br/>
				    <label class="control-label col-sm-2" for="email">Service Name</label>
				    <div class="col-sm-8">
				    	<?php if($update != true): ?>
				      <input required type="text" class="form-control" id="email" placeholder="Enter service name" name = "service_name"value = <?php if(!empty($records))echo $records->service_name ?>
				      <?php else:?>
				      	<input required type="text" class="form-control" id="email" placeholder="Enter service name" name = "service_name"/> 
				  <?php endif?>

				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Price</label>
				    <div class="col-sm-8"> 
				    	<?php if($update != true): ?>
				      <input required type="number" class="form-control" id="pwd" placeholder="Enter price" oninput="this.value = Math.abs(this.value)" name = "price" min="0" value = <?php if(!empty($records)) echo $records->price ?>
				      <?php else:?>
				      	<input required type="number" class="form-control" id="pwd" placeholder="Enter price" oninput="this.value = Math.abs(this.value)" name = "price" min="0">
				  <?php endif?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Instalments</label>
				    <div class="col-sm-8"> 
				    	<?php if($update != true): ?>
				    	<select required class="form-control" id="sel1" name = "instalments">

				    		<option<?php if(!empty($records))if(($records->instalments)=="yes")?> seleted = "selected">yes</option>
				    		<option <?php if(!empty($records))if(($records->instalments)=="no")?> seleted = "selected">no</option>
				    	</select>
				    	<?php else:?>
				    		<select required class="form-control" id="sel1" name = "instalments">

				    		<option>yes</option>
				    		<option >no</option>
				    	</select>
				    <?php endif?>
				      
				    </div>
				  </div>

				  
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div>

				  <?php
				  $this->load->model('Doctor_model');
				  $vari = $this->Doctor_model->success;
				  
				  	if($vari==1){?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
				  <?php	}else if($vari==0){?>

				  	<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
				<?php  }

				  ?>
</form>
			
		</div>
	</div>
                
</body>
</html>