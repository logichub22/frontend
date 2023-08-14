<?php 
$db=mysqli_connect('localhost','root','','images');
if(isset($_POST['upload'])){
$images=$_FILES['imageDisplay']['name'];
$target="images/".$images;
if(move_uploaded_file($_FILES['imageDisplay']['tmp_name'],$target)){
    $sql="INSERT INTO images(images)VALUES('$images')";
    if($query=$db->query($sql)){
    $_SESSION['message']="file uploaded successfully";
}else{
    $_SESSION['message']="please check you file";
}
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="form-group text-center">
        <img src="images/holder.jpg" onclick="triggerClick()" id="profileDisplay"/>
        <label for="upload">upload</label>
        <input type="file" name="imageDisplay" onchange="displayImage(this)" id="imageDisplay" style="display:none;">
</div>
<div class="form-group">
    <button type="submit" name="upload">Upload</button>
</div>
<script src="scripts.js"></script>
</body>
</html>