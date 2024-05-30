<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data
    $name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact_number = $_POST['contact_number'] ?? '';
    $position = $_POST['position'] ?? '';
    $educational_background = $_POST['educational'] ?? '';
    $gender = $_POST['gender'] ?? '';

    // Escape special characters
    $name = mysqli_real_escape_string($_connections, $name);
    $email = mysqli_real_escape_string($_connections, $email);
    $contact_number = mysqli_real_escape_string($_connections, $contact_number);
    $position = mysqli_real_escape_string($_connections, $position);
    $educational_background = mysqli_real_escape_string($_connections, $educational_background);
    $gender = mysqli_real_escape_string($_connections, $gender);

    // Insert into database
    $query = "INSERT INTO `applicant` (`Name`, `Email`, `Contact_No`, `Position`, `Education_Background`, `Gender`) 
              VALUES ('$name', '$email', '$contact_number', '$position', '$educational_background', '$gender')";

    if(mysqli_query($_connections, $query)) {
        header("Location: module1admin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($_connections);
    }
} else {
    echo "Error: No data received.";
}
?>
