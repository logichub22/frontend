<?php include ('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
  
<table class="table">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
     
      <th scope="col" colspan="4">ACTION</th>

    </tr>
  </thead>
  <tbody>
  <?php
  
if($selet_result->num_rows>0){
    while($row=$selet_result->fetch_assoc()){

    ?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['name'];?></td>
      
      <td><a class="edit_btn" href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a class="del_btn" href="delete.php?del=<?php echo $row['id']; ?>">Delet</a></td>
      
      
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
<a href="print.php">Print</a>
</body>
</html>