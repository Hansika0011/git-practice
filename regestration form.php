<?php
$servername = "localhost"; 
$username = "your_username"; 
$password = "your_password"; 
$database = "your_database"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO users (firstname, lastname, gender, email, password, phone) VALUES ('$firstname', '$lastname', '$gender', '$email', '$password', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
