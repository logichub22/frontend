<?php include ('server.php');?>

<?php
$id=$_GET['edit'];
$edit="SELECT * FROM parents WHERE id='$id'";
$result=$db->query($edit);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $email=$row['email'];
        $name=$row['name'];
        
    }
}

?>


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
    <div class="container border">
<form method="POST" action="update.php?edit=<?php echo $id ?>">
    <div class="col-4">
  <div class="mb-3">
    <label for="Email1" class="form-label">Email address</label>
    <input type="email" name="email"  class="form-control" value="<?php echo $email;?>">
    </div>
  </div>
  <div class="col-4">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" value="<?php echo $name;?>">
</div>
  </div>
  <div class="col-4">
  <div class="mb-3">
  
  </div>
  <button type="update" name="update" class="btn btn-primary">Update</button>
</form>
</div>
</body>
</html>