<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Check if the email is already subscribed
    $subscribersFile = 'subscribers.txt';
    $subscribers = file($subscribersFile, FILE_IGNORE_NEW_LINES);

    if (in_array($email, $subscribers)) {
        echo "You are already subscribed!";
        exit;
    }

    // Add new email to the subscribers list
    file_put_contents($subscribersFile, $email . PHP_EOL, FILE_APPEND);

    echo "You have successfully subscribed!";
}
?>
