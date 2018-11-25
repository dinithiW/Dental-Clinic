<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include 'cus_navbar.php';?>

<body>
    <div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
    <div class="w3-container">
  <h2></h2>
  <p></p>

  <table class="w3-table w3-striped">
    <tr>
      <th>Date</th>
      <th>Time Slot</th>
      <th>Apoint No</th>
      <th>Action</th>
    </tr>
    <?php foreach($resData as $d): ?>
    <tr>
      <td><?php echo $d->appointment_date;?></td>
      <td><?php echo $d->time;?></td>
      <td><?php echo $d->appt_no;?></td>
      <form action="<?php echo base_url();?>Patient/deleteAppoint/<?php echo $d->id;?>" method="get">
      <td><button class="w3-button w3-round w3-teal"  type="submit">Delete</button></td>
    </form> 
    </tr>
<?php endforeach;?>
  </table>
</div>

</div>

</body>
</html>