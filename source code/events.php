<html>
<body>
<?php   
$servername = "localhost";   
$username = "root"; 
$password= ""; 
//Before we can access data in the MySQL database, we need to be able to connect to the server 
// Create connection 
$conn = mysqli_connect($servername, $username, $password); 
$conn = mysqli_connect("localhost", "root", "");
// Check connection 
// Create database 
$sql = "CREATE DATABASE events"; 
if (mysqli_query($conn, $sql)) { 
    echo "database created successfully"; 
} else { 
    echo "Error creating database: " . $conn->error; 
} 
 mysqli_close($conn); //close the connection to the mysql 
//closing 
?>
</body>
</html>