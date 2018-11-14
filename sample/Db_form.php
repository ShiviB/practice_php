<p>See all Users List <a href="all_users.php">All Users</a></p>

<?php
 
 $connection = new mysqli('localhost','root','','test');
 
 if($connection->connect_error){
	 die("connection error ".$connection->connect_error);
 }
 else{
	 //echo "success".'<br>';
 }

 $count= '';
 $count_id="SELECT * FROM  users";
 $result =$connection->query($count_id);
	if($result->num_rows >0){
		$count = $result->num_rows;
		$count=$count+1;
	}
	else{
		$count= 1 ;
	}
	
 ?>
 <form method="post" action="insert_users.php">
 
 <label> Unique ID:</label>
 <input type="text" name="id" value="<?php echo $count; ?>" readonly>
 <br>
 <label>First Name: </label>
 <input type="text" name="fname">
 <br>
 <label>Last Name: </label>
 <input type="text" name="lname">
 <br>
  <label>Password: </label>
 <input type="password" name="password">
 <br>
  <label>Role: </label>
  <select name="role">
		<option value="superadmin">Superadmin</option>
		<option value="admin">Admin</option>
		<option value="freelancer">Freelancer</option>
		<option value="student">Student</option>
		<option value="employee">Employee</option>
  </select>
 <input type="submit"  value="Submit">
 </form>
 
 
 
 
 </body>
</html>