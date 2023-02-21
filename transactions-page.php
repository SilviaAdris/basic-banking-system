<?php
include("transactions.php");
?>
<!DOCTYPE html>
<html>
<head lang="en-USA">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Banking System</title>
<link rel="stylesheet" href="transaction-page.css">
</head>
<body>
<header>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th style="border-top-left-radius: 10px;">ID</th>
         <th>To</th>
         <th>Amount</th>
         <th>Date</th>
         <th style="border-top-right-radius: 10px;">Time</th>
       </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['toCustomer']??''; ?></td>
      <td><?php echo $data['amount']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td> 
      <td style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><?php 
      $phpdate = strtotime( $data['time']??'' );
      $mysqldate = date( 'H:i:s', $phpdate );
      echo $mysqldate; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</header>
</body>
</html>