<?php
session_start();
$db=mysqli_connect('localhost','root','','form');

$email="";
$name="";
$password="";
$token="";
$id="";
$errors=array();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $password_verified=$_POST['password_verified'];
   
    if(empty($email)){
        $errors['email']="email field is required";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email_validate']="invalid email";
    }
    if(empty($name)){
        $errors['name']="name field is required";
    }
    if(empty($password)){
        $errors['password']="password field is repuired";
    }
    if($password!==$password_verified){
        $errors['password_verified']="two password not coresponding";
    }
    $val_email="SELECT * FROM parents WHERE email=? LIMIT 1";
    $val_email=$db->prepare($val_email);
    $val_email->bind_param('s',$email);
    $val_email->execute();
    $results=$val_email->get_result();
    $output=$results->num_rows;
    if($output>0){
        $errors['message']="email already exist";
    }
    
    if(count($errors)===0){
        $password=password_hash($password,PASSWORD_DEFAULT);
        $token=bin2hex(random_bytes(50));
        $verified=false;
        $sql="INSERT INTO parents(email,name,password,token,verified)VALUES(?,?,?,?,?)";
        $results=$db->prepare($sql);
        $results->bind_param('ssssb',$email,$name,$password,$token,$verified);
        if($results->execute()){
            //register_user
            $user_id=$db->insert_id;
            $_SESSION['user_id']=$user_id;
            $_SESSION['email']=$email;
            $_SESSION['name']=$name;
            $_SESSION['verified']=$verified;
            $_SESSION['message']="you have successfully registered";
            $_SESSION['alert-class']="alert-success";
            header('location:index.php');
            exit();
        }else{
            $errors['fale']="there is an error in regi";
        }
           
        }
}
//login users

if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email)){
        $errors['email']="email field is required";
    }
    if(empty($password)){
        $errors['password']="password field is required";
    }
    if(count($errors)==0){
        $sql_login="SELECT * FROM parents WHERE email=? OR name=? LIMIT 1";
        $sql_result=$db->prepare($sql_login);
        $sql_result->bind_param('ss', $email,$email);
        $sql_result->execute();
        $output= $sql_result->get_result();
        $output = $output->fetch_assoc();
        if(password_verify($password,$output['password'])){
            $_SESSION['id']= $output['id'];
            $_SESSION['email']= $output['email'];
            $_SESSION['password']= $output['password'];
            $_SESSION['verified']= $output['verified'];
            $_SESSION['message']= "you have successfully login";
            $_SESSION['alert-class']="alert-success";
            header('location:index.php');
            exit();
        }else{
            $errors['login-fail']="wrong credential";
        }

        
    }
}


//logout user

if(isset($_GET['logout'])){
    session_destroy();
    $_SESSION['id']= $output['id'];
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['verified']);
    header('location:signin.php');
    exit();
            
}
 
    $selet="SELECT * FROM parents";
$selet_result=$db->query($selet);   

?>