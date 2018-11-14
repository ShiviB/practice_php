<a href="Db_form.php">Add New User</a>
<?php

$connection = mysqli_connect('localhost','root','','test');

if($connection->connect_error){
		die("mysql connection error: ".$connection->connect_error);
}
else{ 
	//echo "Success"; 
}	
	

$all_users= "SELECT * from users";
$result=$connection->query($all_users);

?>


<html>
 <head>
  <title>All Users List</title>
  <h1 style="text-align:center;">All Users List</h1>
 </head>
 <body>

<table >
  <tr>
	<th> ID: </th>
    <th> Firstname </th>
    <th> Lastname </th> 
    <th> Password </th>
	<th> Role </th>
	<th> functions </th>
  </tr>
  <?php
	if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
?>   
			<tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['fname']; ?></td>
			<td><?php echo $rows['lname']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['role']; ?></td>
			<td><button name="edit"><a href="edit_user.php?id=<?php echo $rows['id']; ?>">Edit</a></button></td>
			<td><button name="delete"><a href="delete_user.php?id=<?php echo $rows['id']; ?>">Delete</a></button></td>
			</tr>
	<?php
	}
}
?>  
 
</table> 
	 
	 <p>done</p>
	 <p>Go back</p>
 
 </body>
</html>
