<?php

require 'datb_conct.php';
 
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
/*     echo "Connected to $database at $hostname successfully."; */
} catch (PDOException $pe) {
    die("Could not connect to the database $database : ".$pe->getMessage());
}