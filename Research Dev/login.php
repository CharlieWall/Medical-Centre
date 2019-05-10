<?php

session_start();

if (isset($_POST['submit'])){
include 'settings.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Error handlers
//Checks inputs are not empty
if (empty($username) || empty($password)){
	header("Location: index.php?login=empty");
	exit();
}
else {
	$sql = "SELECT * FROM login WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck < 1){
		header("Location: index.php?login=error");
		exit();
	}
	else{
		if ($row = mysqli_fetch_assoc($result)){
			//$passwordCheck = password_verify($password, $row['password']);
			$passwordCheck = $password == $row['password'];
			if ($passwordCheck == false){
				header("Location: index.php?login=error");
				exit();
			}
			elseif ($passwordCheck == true){
			//Log user in
			$_SESSION['loginUsername'] = $row['username'];
			$_SESSION['loginPassword'] = $row['password'];
			$_SESSION['loginFirstname'] = $row['firstname'];
			$_SESSION['loginLastname'] = $row['lastname'];
			header("Location: index.php?login=successful");
			exit();
			}
		}
	}
}
}
else{
header("Location: index.php?login=error");
exit();
}
?>