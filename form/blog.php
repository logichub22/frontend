<?php include('server.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form/style.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
            <div class="header">
                <h1>MY BLOG POST</h1>
                <div class="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
</div>
<div class="content">
<?php
if($selet_result->num_rows>0){
    while($row=$selet_result->fetch_assoc()){

?>
    <p><?php echo $row['department'];?></p>
    <p><?php echo $row['name'];?></p>
</div>
    <?php 
    }
}
    ?>    
</body>
</html>