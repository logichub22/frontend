<?php include ('server.php');?>

<?php if(count($errors)>0):?>
  <?php foreach($errors as $error):?>
    <li><?php echo $error;?></li>
    <?php endforeach;?>
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
    <h2 class="login">LOGIN PAGE</h2>
   
    <div class="container border">
    
<form method="POST" action="signin.php">
    <div class="col-4">
  <div class="mb-3">
    
    <label for="email1" class="form-label">Email address</label>
    <input type="email" name="email"  class="form-control">
    </div>
  </div>
  <div class="col-4">
  <div class="mb-3">
    
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
    
</div>
  <div class=" link">Not yet a member<a href="register.php">register</a></div>
  <button type="signin" name="signin" class="btn btn-primary">Login</button>
</form>
</div>
</body>
</html>