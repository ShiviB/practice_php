<?php

$connection = mysqli_connect('localhost','root','','test');
if($connection->connect_error){
	die("connection error".$connection->connect_error );
}
else{
		//echo "success";
}

//$fname= $_GET['fname'];

if($_POST){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$role=$_POST['role'];
	
	/* echo $id;
	echo $fname." ";
	echo $lname." ";
	echo $password." ";
	echo $role." "; */
	
	$update_user = "UPDATE users SET fname='$fname', lname='$lname' , password='$password' , role='$role' where id='$id' ";
	$result = $connection->query($update_user);
	if($result === TRUE ){
		echo "Record updated Successfulyy"."<br>";
		?>
		<p>See all Users List<a href="all_users.php">Click Here</a></p>
		<?php
		
	}

}


?>