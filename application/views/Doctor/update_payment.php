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
			<form class="form-horizontal" action="">

				  <div class="form-group">
				  	<br/>
				    <label class="control-label col-sm-2" for="email">Patient ID</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="email" placeholder="Enter the patient ID" name = "patient_id" required>
				    </div>

				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Date</label>
				    <div class="col-sm-8"> 
				      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name = "apt_date">
				    </div>
				  </div>

				  <!-- make this a select option -->
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Service</label>
				    <div class="col-sm-8"> 
				      <select class="form-control" id="sel1" name = "instalments" onchange="test()">

				      	<?php
                    if(!empty($records))
                    {
                        foreach ($records as $rec){
                    ?> 
                    <tr>
                      <option value="<?php echo $rec->price?>"><?php echo $rec->service_name?></option>
                      
                      <!-- 
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>"><i class="fa fa-trash"></i></a> -->
                      
                    </tr>
                    <?php
                        }
                    }
                    ?> 
        
      </select>
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Amount Paid</label>
				    <div class="col-sm-8"> 
				      <input type="number" class="form-control" id="pwd" placeholder="Enter the amount" name = "amount" oninput="this.value = Math.abs(this.value)">
				    </div>
				  </div>

				  
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div>

<br>
<br>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd" id = "total">Total</label>
				    <script>
     
     function test() {
    d = document.getElementById("sel1").value;
    //alert(d);
    document.getElementById('total').innerHTML = "Amount to be paid is "+d;
}
    </script>
				  </div>
</form>
			
		</div>
	</div>
                
</body>
</html>