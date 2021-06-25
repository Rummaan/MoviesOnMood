<?php
	$servername="localhost";
	$username="Rums";
	$password="poki10";
	$dbname="login";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}
	$id=1;
	$sql="SELECT img FROM try WHERE id=$id";
	$result=mysql_query("$sql");
	$row=mysql_fetch_assoc($result);
	header("Content-type:image/jpeg");
	echo $row['img'];
?>