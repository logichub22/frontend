<?php include('server.php'); ?>
<?php
if(isset($_GET['del'])){
$id=$_GET['del'];
$sql="delete from  parents WHERE id='$id'";
$out=$db->query($sql);
if($out){
    echo "data deleted successfully";
}else{
    echo "please check your information";
}
}

?>