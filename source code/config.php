<?php    
$servername = "localhost";    
$username = "u356069337_root";  
$password= "Cass123$";  
$dbname="u356069337_events";  
   
  
$conn = mysqli_connect($servername, $username, $password, $dbname);  
if (!$conn) {  
    die("Connection failed: " . mysqli_connect_error());  
}