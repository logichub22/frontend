<?php include ('server.php');?>

<?php
if(isset($_GET['del'])){
	$id=$_GET['del'];
	$sql="delete from info WHERE id='$id'";
	$results=$db->query($sql);
	if($results){
		$_SESSION['message']=" profile deleted";
		header("location:view.php");
	}else{
		echo "please cheack your query";
	}
}

?>