<?php


 
$con = mysqli_connect('localhost','remoteR1','','remote1');

// get the post records
	$stop = $_POST['stop'];
	$left1 = $_POST['left1'];
	$right1 = $_POST['right1'];
	$backward = $_POST['backward'];
	$forward = $_POST['forward'];
	

$sql = "INSERT INTO `remote r1` (stop, left1, right1, backward, forward, ) VALUES ('$stop', '$left1', '$right1', '$backward', '$forward')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
mysql_close($con)
?>
