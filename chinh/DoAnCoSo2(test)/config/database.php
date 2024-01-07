<?php
function connectdb(){
  $server = "localhost";
  $user = "root";
  $pass = "";
  $name_db = "do_an_cs_2";
  
  // Create connection
  $conn = mysqli_connect($server,$user,$pass,$name_db);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
  return $conn;
}

?>