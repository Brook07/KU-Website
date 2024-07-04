<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "form_data";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO query (name, email, subject, message)
  VALUES ('$name', '$email', '$subject', '$message')";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>

