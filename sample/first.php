<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World............shivani here</p>';  
 
 $names=array('Shivani','shivi','Anmol','Nirmala','Namita','Rajesh','Basnati','Narshi');
 foreach($names as $name){
		echo $name .'<br>';
 }
 		echo strlen("hii shivani")."<br>";
		echo str_word_count("hi  shivani bariya")."<br>";
		echo strrev("hii shivani")."<br>";
		echo strpos("hiii shivani bariya","y")."<br>";
		
		$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

		
		$z = 5;
$y = 10;

function myTest1() {
    global $z, $y;
    $y = $z + $y;
} 

myTest1();  // run function
echo $y; // output the new value for variable $y
		
 
 echo '<br><br>';
 

	if(isset($_POST['fname'])){
		$first_name= $_POST['fname'];
		$last_name= $_POST['lname'];
		
		echo "My Full Name is" .$first_name." ".$last_name."<br>";

		
	}

 ?>
 <form method="post" action="">
 
 <label>First Name: </label>
 <input type="text" name="fname">
 <br>
 <label>Last Name: </label>
 <input type="text" name="lname">
 <br>
 <input type="submit"  value="Submit">
 </form>
 
 
 
 
 </body>
</html>