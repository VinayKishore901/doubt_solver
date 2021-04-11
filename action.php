 <?php
     $email=$_POST['em'];
	 $question=$_POST['et'];

//database connection

$conn = new mysqli('localhost','root','','dbms');
if($conn->connect_error){
	die('Connection Failed  :  '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into question(email,question) values(?,?)");
		$stmt->bind_param("ss",$email,$question);
		$stmt->execute();
		echo"registeration Successfully......";
		$stmt->close();
		$conn->close();
}


?> 