<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include 'cus_navbar.php';?>

<body>
<div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
<div class="w3-container w3-col m6">
<div class="w3-container w3-teal w3-round">
  <h2>Edit Profile Details</h2>
</div>

<div class="w3-col w3-right" style="width: 40%;">
    <div class="w3-light-green" style="border-radius: 3px;margin-top: 20px;">
        <?php if($this->session->flashdata('patientUpdate_success')):?>
        <?php echo $this->session->flashdata('patientUpdate_success');?>
        <?php endif;?>
        </div>
	</div>

<form class="w3-container" action="../Patient/editProfileDetails" method="post">
<?php foreach($pData as $p):?>
  <p>
  <label>First Name</label>
  <input class="w3-input" type="text" name="fname" value="<?php echo $p->first_name;?>"></p>
  <p>
  <label>Last Name</label>
  <input class="w3-input" type="text" name="lname"  value="<?php echo $p->last_name;?>"></p>
  <p>
  <p>
  <label>Email</label>
  <input class="w3-input" type="text" name="email"  value="<?php echo $p->email;?>"></p>
  <p>
  <label>Address</label>
  <input class="w3-input" type="text" name="address"  value="<?php echo $p->address;?>"></p>
  <p>
  <label>Contact No</label>
  <input class="w3-input" type="text" name="cno"  value="<?php echo $p->contact_no;?>"></p>
  <p>
  <label>Age</label>
  <input class="w3-input" type="number" name="age"  value="<?php echo $p->age;?>"></p>

  <button class="w3-button w3-red">Edit Profile</button>
<?php endforeach;?> 
</form>

    </div>

<div class="w3-container w3-col m4">
<div class="w3-container w3-teal w3-round">
  <h2>Change Password</h2>
</div>

<form class="w3-container" action="../Patient/changePassword" method="post">
  

  <p>
  <label>Current Password</label>
  <input class="w3-input" type="password" name="old"></p>
  <label>New Password</label>
  <input class="w3-input" type="password" name="new"></p>
  <p>
  <label>Repeat New Password</label>
  <input class="w3-input" type="password" name="repNew"></p>

  <button class="w3-button w3-red" type="submit">Change Password</button>
</form>

    </div>


</div>

</body>
</html>