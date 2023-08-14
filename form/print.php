<?php include ('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../form/print.css" media="print">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

    </script>
    
</head>
<body>
    <h2 style="text-align:center;color:gray"> CIPHAPORT CREATIVE CENTER</h2>

<table class="table">

  <thead>
    
    <tr>
      
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      
      

    </tr>
  </thead>
  <tbody>
    
  <?php

if($selet_result->num_rows>0){
    while($row=$selet_result->fetch_assoc()){

    ?>
    <tr>
      
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['name'];?></td>
      
    </tr>
    <?php
    }
}
    ?>
    <?php
  if(isset($_SESSION['message'])):?>
  <?php 
  echo $_SESSION['message'];
  unset($_SESSION['message']);
  ?>
  <?php endif;?>
  </tbody>
</table>
<button onclick="window.print();" id="print_btn">print</button>
</body>
</html>
