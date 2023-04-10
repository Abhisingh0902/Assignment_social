<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = $_POST["username"];
  $dob = $_POST["dob"];
  
  // TODO: Validate the form data and check if the user exists in the database
  
  // If the user exists, redirect to the reset password page
  header("Location: reset_password.php?username=$username");
  exit();
}
?>
