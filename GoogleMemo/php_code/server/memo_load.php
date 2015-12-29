<?php
include("config.php");
$q = "SELECT * FROM Memo Where id = '$user_id'";
$result = $conn->query($q);

if($result->num_rows > 0){
	$o = array();
	while($row = $result->fetch_assoc()){
		$t = new stdClass();
		$t->lat = $row['lat'];
		$t->lon = $row['lon'];
		$t->pic = $row['pic'];
		$t->mtitle = $row['memo_title'];
		$t->mcontext = $row['memo_context'];
		$o[] = $t;
		unset($t);
	}
}
else{
	$o = array(0 => 'empty');
}
echo json_encode($o);
?>
