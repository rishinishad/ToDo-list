<?php
$servername = "localhost";
    $username = "rishi";
    $password = "password";
    $dbname = "todo";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, "$dbname");
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    ?>