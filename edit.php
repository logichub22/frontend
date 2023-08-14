<?php include ('server.php');?>
<?php
$id=$_GET['edit'];
$sql="SELECT * FROM info WHERE id='$id'";
$results=$db->query($sql);
if ($results->num_rows>0) {
	while ($row=$results->fetch_assoc()) {
		$name= $row['name'];
		$address= $row['address'];
		$email=$row['email'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h2 style="text-align:center">EDIT PROFILE</h2>

<form method="post" action="update.php?edit=<?php echo $id ?>" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email;?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="update" >Update</button>
		</div>
	</form>
</body>
</html>