<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tooth Clinic</title>
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
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Tooth Clinic</a>
              <div class="bottom-border pb-3">
                <img src="" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Doctor</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">

                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>

                <!-- <li class="nav-item"><a href=<?= base_url("Doctor/createAppointment")?> class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-calendar-check text-light fa-lg mr-3"></i>Create Appointments</a></li> -->

                <li class="nav-item"><a href="<?= base_url("Doctor/viewAppointments")?>" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>View Appointments</a></li>

                <!-- <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/Customer/reserveService" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Edit Event Calendar</a></li> -->

                <li class="nav-item"><a href=<?= base_url("Doctor/viewPayments")?> class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Payments</a></li>

                <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>View payment records</a></li> -->

                <li class="nav-item"><a href=<?= base_url("Doctor/patientRecords")?> class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>View Patient History</a></li>

                <li class="nav-item"><a href=<?= base_url("Doctor/services")?> class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>Manage services</a></li>

                <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Manage inventory</a></li> -->

                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>View reports</a></li>

              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-8 w3-right">
                <a href="<?php echo base_url(); ?>index.php/Doctor/logout" class="w3-bar-item w3-button w3-round w3-hover-light-gray w3-gray-small w3-right w3-text-gray" style="width: auto; right:0">LOGOUT</a>
                </div>
                <!-- <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div> -->
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>



   

 


  </body>
</html>






