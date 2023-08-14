<?php include ('server.php');?>

<?php
if(isset($_POST['update'])){
    $id=$_GET['edit'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    
    $sql="UPDATE parents SET email='$email',name='$name' WHERE id='$id'";
    $result=$db->query($sql);
    if($result){
        $_SESSION['message']="information updated successfully";
        header('location:view.php');
       
    }

}
?>