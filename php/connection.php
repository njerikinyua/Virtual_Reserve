<?php
$host = "127.0.0.1";
$user = "root"; 
$pass = ""; // edit if you have set a password
$name = "vreserve";

$conn = new mysqli($host, $user, $pass, $name);

if($conn == TRUE){
// 	echo "Connection succesful";
}

else if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>