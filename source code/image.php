<html>
<body>
<?php   
$servername = "localhost";   
$username = "root"; 
$password= ""; 
$dbname="events"; 
  
 
$conn = mysqli_connect($servername, $username, $password, $dbname);  
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
 
$sql = "CREATE TABLE poster ( 
	ID INT NOT NULL AUTO_INCREMENT ,  
	image longtext NOT NULL ,
	PRIMARY KEY(ID))"; 
	
if (mysqli_query($conn, $sql)) { 
    echo "Tables created successfully\n"; 
} else { 
    echo "Error creating tables: " . $conn->error; 
} 
 mysqli_close($conn); 
 ?>
 	
</body>
</html>