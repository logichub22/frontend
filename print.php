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
	<link rel="stylesheet" herf="print.css" media="print">
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
			
		</tr>
		<?php 
		} 
	}
		?>
	</tbody>
</table>
<button onclick="window.print();" id="print_id">print</button>