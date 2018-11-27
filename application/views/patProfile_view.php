<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include 'cus_navbar.php';?>

<body>
<div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
<div class="container">
    <h1>My Profile</h1>
  	<hr>
	<!-- <div class="row"> -->
      <!-- left column -->
      <!-- <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div> -->
      
      <!-- edit form column -->
      <!-- <div class="col-md-9 personal-info"> -->
        <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> -->
        <h3>Personal info</h3>
        <?php foreach($det as $d):?>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $d->first_name;?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $d->last_name;?>" readonly>
            </div>
          <!-- </div> -->

          </div>

           <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" value="<?php echo $d->age;?>" readonly>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $d->email;?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contact No:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" value="<?php echo $d->contact_no;?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address</label>
            <div class="col-lg-8">
            <input class="form-control" type="text" value="<?php echo $d->address;?>" readonly>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $d->username;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value="<?php echo $d->password;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value="<?php echo $d->password;?>">
            </div>
          </div> -->
          <!-- <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div> -->
        </form>
<?php endforeach;?>
      </div>
  </div>
</div>
<hr>



</div>

</body>
</html>