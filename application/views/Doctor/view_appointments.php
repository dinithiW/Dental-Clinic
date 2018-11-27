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


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}



.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }


  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>

</head> 
<body>
	<div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
		

    <div class="w3-container">
    <form class="form-inline" action="/action_page.php">
  <label for="email">Date:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="email">Tme Slot:</label>
  <select class="w3-input w3-col m3" placeholder="" name="time_slot" required>

    	<option value="">Select</option>
    	<option value="08.00-11.00(A.M)">08.00-11.00(A.M)</option>
    	<option value="01.00-03.00(P.M)">01.00-03.00(P.M)</option>
    	<option value="05.00-07.00(P.M)">05.00-07.00(P.M)</option>
    			</select>
  <!-- <div class="w3-col m3"> -->
  <label for="email">         </label>
  <button class="w3-col m2 w3-right" type="submit">Search</button>
  <!-- </div> -->
</form>
  <br><br>
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Appt No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
      </tr>
    </thead>
    <?php if (isset($services)){ ?> 
     <?php foreach($services as $ser){ ?>
    <tr class="w3-hover-green">
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <?php } ?>
	 <?php } ?> 
    <tr class="w3-hover-blue">
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr class="w3-hover-black">
      <td>Adam</td>
      <td>Johnson</td>
      <td>67</td>
    </tr>
    <tr class="w3-hover-text-green">
      <td>Bo</td>
      <td>Nilson</td>
      <td>35</td>
    </tr>
  </table>
</div>
	</div>
                
</body>
</html>