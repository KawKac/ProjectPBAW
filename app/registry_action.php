<?php
	include 'database.php';
	session_start();
	if($_POST['type']==1){
		$name=$_POST['name'];
    $vorname=$_POST['vorname'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $ppassword=$_POST['ppassword'];
		$email=$_POST['email'];
		$pemil=$_POST['pemail'];


		$duplicate=mysqli_query($conn,"select * from crud where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`, `password`)
			VALUES ('$name','$email','$phone','$city', '$password')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
        $message=file_get_contents("message.php",TRUE);
        mail($email,"Rejestracja",)
			}
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from crud where email='$email' and password='$password'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>
