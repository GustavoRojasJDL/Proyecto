<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'mysql';
  $db = "Proyecto";

  $conn = new mysqli($servername, $username, $password, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->xconnect_error);
  }

  // $servername = "localhost";
  // $username = "root";
  // $password = "mysql";

  // // Create connection
  // $conn = new mysqli($servername, $username, $password, "Proyecto");
?>