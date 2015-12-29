<?php
$servername = "localhost";
$username = "cs20121562";
$password = "qwer1234";
$dbname = "db_20121562";

$conn = new mysqli($servername,$username,$password,$dbname) or die("Connection failed!");

extract($_POST);
extract($_GET);

?>
