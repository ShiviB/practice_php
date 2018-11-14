<?php

$connection =  mysqli_connect('localhost','root','','test');
if($connection->connect_error){
	die("mysql connection error".$connection->connect_error);
}
else{
	//echo "success";
}

$id = $_GET['id'];
//echo $fname;

$delete_user = "DELETE FROM users where id='$id' ";
$result= $connection->query($delete_user);
if(!$result === TRUE){
		die("cannot delete user".mysql_error());
}
else{
	echo "Selected 	user Deleted Successfully" ."<br>";
	?>
	<p>See All Users List<a href="all_users.php">Go Back</a></p>
	<p>Insert Users<a href="Db_form.php">Add User</a></p>
<?php	
}

?>