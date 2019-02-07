<!DOCTYPE html>
<html>
<head>
  <title>User Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>css/jquery-ui.css"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  

</head>
<body>

	<div class="container">
	 <br>

	<a class="btn btn-primary" href="<?php echo base_url('/index.php/Welcome/logout');?>">Log Out</a>

	<center><h4>User Details</h4></center>

 <?php //print_r($getAlluser);?>
   <table class="table table-bordered table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">User Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
  	 $sl = '1';
  	 foreach($getAlluser as $row):?>
    <tr>
      <th scope="row"><?php echo $sl;?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['phone_no'];?></td>
      <td>@<?php echo $row['address'];?></td>
    </tr>

  <?php $sl ++;
  endforeach;
   ?>

   </tbody>
</table>

 </div>


   <script type="text/javascript">
   	$(document).ready( function () {

      $('#myTable').DataTable();
  });
 </script>

</body>
</html>