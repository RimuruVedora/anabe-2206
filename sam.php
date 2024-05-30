</section>
<div id="notification" class="notification">
  <p>Roldan, you are my special</p>
  <div class="button-container">
    <form action="code.php" method="post">
    <button onclick="deleteItem()" name="delete_applicant" value="<?= $applicant['Applicant_No']; ?>" class="delete-button">Delete</button>
    </form>
    <button onclick="cancelDelete()" class="cancel-button">Cancel</button>
  </div>
</div>

<script>
function showNotification() {
  document.getElementById("notification").style.display = "block";
}

function deleteItem() {
  // Put your delete logic here
  alert("Item deleted!");
  hideNotification();
}

function cancelDelete() {
  hideNotification();
}

function hideNotification() {
  document.getElementById("notification").style.display = "none";
}
</script>
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