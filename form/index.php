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
   <?php if(isset($_SESSION['message'])):?>
   <strong> <?php echo $_SESSION['message'];
   unset($_SESSION['message']);
   unset($_SESSION['alert-class']);
   ?></strong>
   <?php endif;?>
    <div class="container border">
    
<form method="POST" action="index.php">
    <div class="col-4">
        <h2> welcome <?php echo $_SESSION['email'];?></h2>
        <a href="index.php?logout=1">logout</a>
  <div class="mb-3">
    <?php if(!$_SESSION['verified']):?>
    <p> please verified your email before loggin <strong><?php echo $_SESSION['email'];?></strong></p>
    <?php endif; ?>
    <?php if($_SESSION['verified']):?>
    <button class=" btn btn-block color-gray">i am verified</button>
    <?php endif; ?>
</div>
</form>
</div>
</body>
</html>