<!DOCTYPE html>
<html>
<head>
<title>Customer dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3.css">

<?php include 'cus_navbar.php';?>

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
	.cont{
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
			<h2 class="mont" style="padding: 10px 20px 0;">Schedule your Appointments here!!!</h2>
			<hr style="border-color: rgba(0,0,0,0.2);">
			<div class="w3-row-padding">
		    <div class="w3-col m10" style="border: 1px solid lightgrey;border-radius: 3px;margin-right: 16px">
			<?php echo $calendar;?>	
            <script type="text/javascript">
				$(document).ready(function(){
					$('.calendar .day .nCont').click(function(){
						day_num=$(this).html();
						comDate="<?php echo $year.'/'.$month.'/';?>"+day_num;
						today="<?php echo date("Y/m/d");?>";
						if(comDate>today){
							document.getElementById('id02').style.display='block';
							document.getElementById("date").value = "<?php echo $year.'/'.$month.'/';?>"+day_num;
						}
						
					});
					$('.cont').click(function(){
						document.getElementById('id03').style.display='block';
					});
					$('#reserve').click(function(){
						document.getElementById('id03').style.display='none';
						document.getElementById('id02').style.display='block';
					});
					$('#reschedule').click(function(){
						document.getElementById('id03').style.display='none';
						document.getElementById('id01').style.display='block';
					});
				});
				
				
				</script>
                </div>
                </div></div></div>
                <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>
			<div class="w3-container">
			<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>Vehicle No</th>
        <th>Reservation Date</th>
        <th>Title</th>
      </tr>
    </thead>
	
		<?php foreach( $detRes as $row){ ?>
	
		<tr>
      <td><?php echo $row->veh_no;?></td>
      <td><?php echo $row->reservation_date;?></td>
      <td><?php echo $row->title;?></td>
    </tr>
	
		<?php } ?>
		
		</table>
		</div>

      <form class="w3-container" action="../customer/Reschedule" method="post">
        <div class="w3-section">
		<label><b>Reservation id</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="id"  required>
          <label><b>Title</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="title" required>
          <label><b>Reschedule To</b></label>
          <input class="w3-input w3-border" type="text" placeholder="" name="re_date" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Reschedule</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>

<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="../../Reservation" method="post">
        <div class="w3-section">
		<label><b>Vehicle No</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="veh_no"  required>
          <label><b>Title</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="title" required>
          <label><b>Reserved Date</b></label>
          <input id="date" class="w3-input w3-border" type="text" placeholder="" name="res_date" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Reserve</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>

	<div id="id03" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h2></h2>
      </header>
			<br>
			<br>
			<br>
      <div class="w3-container">
			<p class="w3-right">
			<button class="w3-button w3-ripple w3-red" id="reserve">Reserve</button>
  		<button class="w3-button w3-ripple w3-yellow" id="reschedule">Reschedule</button>
      </p>
			</div>
			<footer class="w3-container w3-teal">
        <p></p>
      </footer>
    </div>
  </div>

                </body>
</html>