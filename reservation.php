<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $time = $_POST['time']; // Change 'time' to match the 'name' attribute of your time select element
    $date = $_POST['date']; // Change 'date' to match the 'name' attribute of your date input element
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $person = $_POST['person'];
    $email = $_POST['email'];

    // You can perform further operations here, such as saving to a database or sending an email notification

    // For demonstration purposes, let's print the received data
    echo "Time: " . $time . "<br>";
    echo "Date: " . $date . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Person: " . $person . "<br>";
    echo "Email: " . $email . "<br>";
}
?>
