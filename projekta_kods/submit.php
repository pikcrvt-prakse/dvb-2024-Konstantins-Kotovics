<?php

session_start(); 
require_once 'connection.php';

  $name = $_POST['name'];
  $email = $_SESSION['email'];
  $comment = $_POST['comment'];
  $userID = $_SESSION['userID'];

  $conn = mysqli_connect($servername, $DBusername, $DBpassword, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO comments (name, email, comment, userID)
  VALUES ('$name', '$email', '$comment', '$userID')";

  if (mysqli_query($conn, $sql)) {
    header("Location: forum.php?success=suc");
    exit;
    
    
    
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);


?>