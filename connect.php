<?php
$vno=$_POST['vno'];
$fname=$_POST['fname'];

//database connection

$conn = new mysqli('localhost','root','','dbms');
if($conn->connect_error){
	die('Connection Failed  :  '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into faculty(vno,fname) values(?,?)");
		$stmt->bind_param("ss",$vno,$fname);
		$stmt->execute();
		echo"registeration Successfully......";
		$stmt->close();
		$conn->close();
}


?>