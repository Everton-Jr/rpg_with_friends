<?php
$servername = 'rpg_with_friends';
$username = 'root';
$password = '';

// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
?>