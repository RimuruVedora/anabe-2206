<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $applicantNo = $_GET['applicantNo'];
    $servername = "127.0.0.1";
    $username = ""; // Empty username
    $password = ""; // Empty password
    $dbname = "db3";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to delete a record
    $sql = "DELETE FROM applicant WHERE Applicant_No='$applicantNo'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
