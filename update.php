<?php
include "server.php";

if(isset($_POST['update'])){
$id=$_GET['edit'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$sql="update info set name='$name',address='$address',email='$email' WHERE id='$id'";
$results=$db->query($sql);
if($results){
	$_SESSION['message']="profile updated";
	header("location:view.php");
}else{
	echo "please check your query";
}
}



?>