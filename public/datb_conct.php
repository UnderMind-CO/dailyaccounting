<?php
$hostname = "localhost";
$database = "registros";
$username = "root";
$password = "";



// Message

$mensage = "an unexpected error occurred during connection, Please try again";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Convert and visualizer text Amarican with assents (tildes y todo eso)

mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($mesage));
    
}
/* echo "Connected successfully"; */

?>