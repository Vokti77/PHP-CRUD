<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'crud_operation');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>