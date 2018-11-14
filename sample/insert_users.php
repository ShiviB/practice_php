<?php

$connection = mysqli_connect('localhost','root','','test');

if($connection->connect_error){
		die("mysql connection error: ".$connection->connect_error);
}
else{ echo "Success"; }	


if($_POST){
		$id=$_POST['id'];
		$first_name= $_POST['fname'];
		$last_name= $_POST['lname'];
		$pass= $_POST['password'];
		$role= $_POST['role'];
		
		//var_dump($_POST);
		
		$insert = "INSERT INTO users VALUES('$id','$first_name','$last_name','$pass','$role')";
			//var_dump($insert);
			$result=$connection->query($insert);
			//var_dump($result);
			if($result){
				echo "inserted successfully".'<br>'; ?>
				 <p><a href="Db_form.php">Go Back</a></p>
				 <?php
			}else{
				echo "error".$connection->connect_error."<br>";
				
			}

	}