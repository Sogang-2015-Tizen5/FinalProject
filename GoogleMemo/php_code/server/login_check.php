<?php
include('config.php');
session_start();
$sql="SELECT * FROM Login WHERE id='$user_id'";
$result= $conn->query($sql);

if($result->num_rows==1){
	$encrypted_passwd = sha1($user_pw);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	if( $row['pw'] == $encrypted_passwd){
		$_SESSION['is_logged'] = 'YES';
		$_SESSION['user_id']=$user_id;
		
		echo "success";
		exit();
	}
	else{
		echo $encrypted_passwd." ". $row['pw'];
		exit();
	}
}
else{
	$_SESSION['is_logged'] = 'NO';
	$_SESSION['user_id'] = '';
	$error="Your Login Name or Password is invalid";
	echo $error;
	exit();
}

	$conn->close();
?>



