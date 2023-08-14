
<?php 
session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');
	
	// initialize variables
	$name = "";
	$address = "";
	$email="";
	$gender="";
	$errors=array();

	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];

		if(empty($name)){
			$errors['name']="name is required";
		}
		if(empty($address)){
			$errors['address']="address is required";
		}
		if(empty($gender)){
			$errors['gender']="gender is required";
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors['email']="not email format";
		}

		if(empty($email)){
			$errors['email']="email is required";
		}
	$emailquery="SELECT * FROM info WHERE email=? LIMIT 1";
	$query=$db->prepare($emailquery);
	$query->bind_param('s',$email);
	$query->execute();
	$results=$query->get_result();
	$users=$results->num_rows;
	if($users > 0){
		$errors['email'] = "email already exist";
	}elseif(count($errors)===0){
		$password=md5($password);
		$token=bin2hex(random_bytes(10));
		$verified=false;
		$query=("INSERT INTO info(name, address,email,gender) VALUES ('$name','$address','$email','$gender')");
		$results=$db->query($query);
		if($results){
			// $user_id=$db->insert_id;
			// $_SESSION['id']=$user_id;
			$_SESSION['name']=$name;
			$_SESSION['address']=$address;
			$_SESSION['email']=$email;
			$_SESSION['gender']=$gender;
			$_SESSION['message']="you have successfully register";
		header('location:view.php');
		exist();
	}
	}

}
	
















?>