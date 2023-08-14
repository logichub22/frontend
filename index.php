<?php include ('server.php');?>

<?php
if(count($errors)>0):?>
<?php foreach($errors as $error): ?>

	<li style="text-align:center;color:green;font-size:20px;font-weight:bold;list-style:none"> <?php echo $error; ?></li>


	<?php endforeach; ?>
<?php endif; ?>
<style>
select{
	width:95%;
	border-radius:5px;
	padding:10px 15px;
}



</style>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h2 style="text-align:center;color:gray">CIPHAPORT REGISTRATION PORTAL</h2>

<form method="post" action="index.php" style="box-shadow:1px 1px 1px 1px gray" >
		<div class="input-group" >
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address ?>">
		</div>
				<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email ?>">
		</div>
		
		<label>Gender:</label>
		<select name="gender">
			<option value="">--select--</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
</select>
		
		<div class="input-group">
			<button class="btn btn-submit" type="submit" name="save">Save</button>
		</div>
	</form>
		

	</script>
</body>
</html>