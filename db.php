<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Chat_App"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function formatDate($date){
	if(date('y', strtotime($date)) == date('y')){
		return date('m/d, g:ia', strtotime($date));
}
else{
	return date('m/d/y, g:ia', strtotime($date));
}
	
}
?>