<?php include ('server.php');?>

<?php if(count($errors)>0):?>
  <div class="alert alert-danger">
  <?php foreach($errors as $error):?>
    
    <li><?php echo $error;?></li>
  
    <?php endforeach;?>
  </div>
  <?php endif;?>
  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <div class="container border">
<form method="POST" action="register.php">
    <div class="col-4">
  <div class="mb-3">
    <label for="Email1" class="form-label">Email address</label>
    <input type="email" name="email" value="<?php echo $email;?>" class="form-control">
    </div>
  </div>
  <div class="col-4">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="name" value="<?php echo $name;?>" class="form-control">
</div>
  </div>
  <div class="col-4">
  <div class="mb-3">
  <label for="password" class="form-label">Password</label>
    <input type="password" name="password"  class="form-control">
</div>
<label for="password" class="form-label">password_verified</label>
    <input type="password" name="password_verified"  class="form-control">
</div>
  <div class=" link"> yet a member<a href="signin.php">login</a></div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>
</body>
</html>