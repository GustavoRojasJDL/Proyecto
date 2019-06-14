<?php
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $db = "Proyecto";

  $conn = new mysqli($servername, $username, $password, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->xconnect_error);
  }
?>