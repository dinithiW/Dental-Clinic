<!DOCTYPE html>
<html>
    <head>
        <title> Inventory Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
         <div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;border-bottom: 6px solid red;">
		<div class="content" style="background: #f0f0f0" id="reserve-service">
                    <div class="box">
                        <div class="box-header">
                            <center><h1>Enter Details</h1></center>
                        </div>
                        
                        <div class="box-body">
                            <center>
                             <form action="addInventory" method="post">
                                    <div class="container">

                                      <label for="id"><b>Id</b></label>
                                      <input type="text" placeholder="Enter Id" name="id" required>

                                      <label for="name"><b>Name</b></label>
                                      <input type="text" placeholder="Enter Name" name="name" required>

                                      <label for="quantity"><b>Quantity</b></label>
                                      <input type="text" placeholder="Enter Quantity" name="quantity" >
                                      <br><br>
                                      <input type="submit" class="btn btn-primary" value="ADD">
                                    </div>
                                  </form>
                                </center>
                            <br>
                        </div>
                    </div>
                </div>
         </div>
    </body>
</html>
