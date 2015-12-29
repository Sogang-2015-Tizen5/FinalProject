<?php
include("config.php");

$q = "INSERT INTO Memo( id,lat,lon,pic, memo_title,memo_context ) VALUES( '$user_id','$lat','$lon','http://cspro.sogang.ac.kr/~cse20121562/uploads/$myfile', '$memo_title','$memo_context' )";
$conn->query($q);
$conn->close();
echo "success";
exit();
?>

