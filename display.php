<?php
$conn = new mysqli('localhost','root','','dbms');
if($conn->connect_error){
	die('Connection Failed  :  '.$conn->connect_error);

}else{
	 
	$query="SELECT * FROM question";
	$data= mysqli_query($conn,$query);
	$total= mysqli_num_rows($data);

	if($total != 0)
	{
		?>
		<table>
		<tr>
			<th>S.no</th>
			<th>Email</th>
			<th>Question</th>
		</tr>
		
		<?php
		while($result= mysqli_fetch_assoc($data))
		{
			echo "<tr>

			 <td>".$result['sno']."</td>
			 <td>".$result['email']."</td>
			 <td>".$result['question']."</td>




			</tr>";
		}
	}
	else{
		echo "No record found";
	}

}








 

?>
</table>