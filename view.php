<?php 
include "server.php";

$sql="SELECT * FROM info";
$results=$db->query($sql);
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}

?>
	<h2 style="text-align:center">Admin panel</h2>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if($results->num_rows>0){
		while ($row = $results->fetch_assoc()) { 
			?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
		
			<td><a class="edit_btn" href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a class="del_btn" href="delete.php?del=<?php echo $row['id']; ?>">Delet</a></td>
			
		</tr>
		<?php 
		} 
	}
		?>
	</tbody>
</table>
<a href="print.php">print</a>