<?php
include("customers.php");
?>
<!DOCTYPE html>
<html>
<head lang="en-USA">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Banking System</title>
<link rel="stylesheet" href="alll-customers-page.css">
</head>
<body>
<header>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
          <tr>
         <th style="border-top-left-radius: 10px;">Name</th>
         <th>Email</th>
         <th>Current Balance</th>
         <th>Phone Number</th>
         <th style="border-top-right-radius: 10px;"></th>
        </tr>
       </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <input type="hidden" value="<?php echo $data['id']??''; ?>">
      <td style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['currentBalance']??''; ?></td>
      <td><?php echo $data['phoneNumber']??''; ?></td> 
      <td style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><a class="button" href="customer-page.php?id=<?php echo $data['id']??'' ?>&name=<?php echo $data['name']??''; ?>&currentBalance=<?php echo $data['currentBalance']??''; ?>" > View </a></td>
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