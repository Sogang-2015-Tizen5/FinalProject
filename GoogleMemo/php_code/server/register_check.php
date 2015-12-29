<?php
include("config.php");
if($user_pass == $user_pass2){
$encrypt_passwd = sha1($user_pass);

$q = "INSERT INTO Login( id, pw, email ) VALUES( '$user_id', '$encrypt_passwd', '$user_email' )";

$conn->query($q);
echo "success";
}
else{
echo "fail";
}
$conn->close();
exit();
?>


