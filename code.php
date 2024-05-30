<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_applicant']))
{
    $applicant_no = mysqli_real_escape_string($_connections, $_POST['delete_applicant']);

    $query = "DELETE FROM applicant WHERE Applicant_No='$applicant_no' ";
    $query_run = mysqli_query($_connections, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Applicant Deleted Successfully";
        header("Location: module1admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Applicant Not Deleted";
        header("Location: module1admin.php");
        exit(0);
    }
}


if (isset($_POST['update_applicant'])) {
    $applicant_id = mysqli_real_escape_string($_connections, $_POST['applicant_no']);
    $name = mysqli_real_escape_string($_connections, $_POST['name']);
    $email = mysqli_real_escape_string($_connections, $_POST['email']);
    $phone = mysqli_real_escape_string($_connections, $_POST['phone']);
    $position = mysqli_real_escape_string($_connections, $_POST['position']);
    $education_background = mysqli_real_escape_string($_connections, $_POST['education_background']);
    $gender = mysqli_real_escape_string($_connections, $_POST['gender']);

    $query = "UPDATE applicant SET Name='$name', Email='$email', Contact_No='$phone', Position='$position', Education_Background='$education_background', Gender='$gender' WHERE Applicant_No='$applicant_id'";
    $query_run = mysqli_query($_connections, $query);

    if ($query_run) {
        $_SESSION['message'] = "Applicant Updated Successfully";
        header("Location: module1admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Applicant Not Updated";
        header("Location: update.php");
        exit(0);
    }
}



if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($_connections, $_POST['name']);
    $email = mysqli_real_escape_string($_connections, $_POST['email']);
    $contact_no = mysqli_real_escape_string($_connections, $_POST['contact_no']);
    $position = mysqli_real_escape_string($_connections, $_POST['position']);
    $education_background = mysqli_real_escape_string($_connections, $_POST['education']);
    $gender = mysqli_real_escape_string($_connections, $_POST['gender']);

    $query = "INSERT INTO applicant (Name, Email, Contact_No, Position, Education_Background, Gender) VALUES ('$name','$email','$contact_no','$position','$education_background','$gender')";

    $query_run = mysqli_query($_connections, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Applicant Created Successfully";
        header("Location: module1admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Applicant Not Created";
        header("Location: module1admin.php");
        exit(0);
    }
}

?>
