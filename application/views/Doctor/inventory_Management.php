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
        <div class="w3-content" style="max-width:2000px;margin-top:49px;margin-left:300px;">
		<div class="content" style="background: #f0f0f0" id="reserve-service">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Inventory Records</h3>
                            <a href="<?php echo base_url() . "index.php/Doctor/viewAddInventory"?>" class="btn btn-info btn-lg" style="font-size: 10px">
                                <font size="2">Add new</font>
                            </a>
                        </div>
                        <div class="box-body">
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Update/Delete<th>
                                </tr>
                                <?php
                                if(!empty($records)){
                                        foreach($records as $rec){
                                ?>
                                <tr>
                                    <td><?php echo $rec->id ?></td>
                                    <td><?php echo $rec->name ?></td>
                                    <td><?php echo $rec->quantity ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . "index.php/Doctor/viewUpdateInventory/"?>" class="btn btn-info btn-lg" style="font-size: 10px">
                                           <font size="2">Update</font>
                                        </a>
                                        <a href="<?php echo base_url() . "index.php/Doctor/deleteInventory/".$rec->id?>" class="btn btn-info btn-lg" style="font-size: 10px;">
                                           <font size="2">Delete</font>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
    </body>
</html>