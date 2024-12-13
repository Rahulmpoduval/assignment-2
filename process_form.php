<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$vmodel = $_POST['vmodel'];
$bookdate = $_POST['bookdate'];
$tadvance = $_POST['tadvance'];

// Insert data into database
$sql = "INSERT INTO vehicle (name, email, phone, vmodel, bookdate, tadvance)
VALUES ('$name', '$email', '$phone', '$vmodel', '$bookdate', '$tadvance')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Pre-Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Booked Details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Email:</strong> <?= ($email) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>Vehicle Model:</strong> <?= ($vmodel) ?></p>
        <p><strong>Booked Date:</strong> <?= ($bookdate) ?></p>
        <p><strong>Token Advance:</strong> <?= ($tadvance) ?></p>
    </div>
</body>
</html>