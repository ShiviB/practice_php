<p>See all Users List <a href="all_users.php">All Users</a></p>

<?php
 $connection =mysqli_connect('localhost','root','','test');
 if($connection->connect_error){
	 die("connection error".$connection->connect_error);
 }
 else{
	 //echo "success";
 }

 
 $id=$_GET['id'];
 //echo $id;

$get_row = "SELECT * FROM users where id='$id' ";
$result = $connection->query($get_row);
if($result->num_rows>0){
	while($rows = $result->fetch_assoc()){
		//echo $rows['fname'] ."  ";
		//echo $rows['lname']."  ";
		//echo $rows['password']."  ";
		//echo $rows['role']."  ";
		?>
		 <form method="post" action="update_users.php">
			
			 <label> Unique ID:</label>
			 <input type="text" name="id" value="<?php echo $id; ?>" readonly>
			 <br>
			 <label>First Name: </label>
			 <input type="text" name="fname" value="<?php echo $rows['fname']; ?>">
			 <br>
			 <label>Last Name: </label>
			 <input type="text" name="lname" value="<?php echo $rows['lname']; ?>">
			 <br>
			  <label>Password: </label>
			 <input type="password" name="password" value="<?php echo $rows['password']; ?>">
			 <br>
			  <label>Role: </label>
			  <select name="role">
					<option value="superadmin" <?php if($rows['role'] == 'superadmin' ) echo "selected"; ?> >Superadmin</option>
					<option value="admin" <?php if($rows['role'] == 'admin' ) echo "selected"; ?>  >Admin</option>
					<option value="freelancer" <?php if($rows['role'] == 'freelancer' ) echo "selected"; ?> >Freelancer</option>
					<option value="student" <?php if($rows['role'] == 'student' ) echo "selected"; ?> >Student</option>
					<option value="employee" <?php if($rows['role'] == 'employee' ) echo "selected"; ?> >Employee</option>
			  </select>
			 <input type="submit"  value="Update">
		 </form>
 
<?php		
	}
}
 
 ?>

 
 
 
 </body>
</html>