<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Module1 </title>
    <link rel="stylesheet" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" href="fontawsome/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="TNVS.jpeg" alt="">
        <div class="logo_name">Application Management</div>
        <i class='fas fa-bars' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='fas fa-search' ></i>
        <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="User.php">
          <i class='fas fa-qrcode'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="UserModule1.php">
         <i class='fas fa-user' ></i>
         <span class="links_name">Module1</span>
       </a>
       <span class="tooltip">Module1</span>
     </li>
     <li>
       <a href="#">
         <i class='fa-brands fa-rocketchat' ></i>
         <span class="links_name">Module2</span>
       </a>
       <span class="tooltip">Module2</span>
     </li>
     <li>
       <a href="#">
         <i class='fas fa-book' ></i>
         <span class="links_name">Module3</span>
       </a>
       <span class="tooltip">Module3</span>
     </li>
     <li>
       <a href="#">
         <i class='fas fa-folder' ></i>
         <span class="links_name">Module4</span>
       </a>
       <span class="tooltip">Module4</span>
     </li>
     <li>
       <a href="#">
         <i class='fas fa-cart-shopping' ></i>
         <span class="links_name">Module5</span>
       </a>
       <span class="tooltip">Module5</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Rain</div>
             <div class="email">ilovebeslenk@gmail.com</div>
           </div>
         </div>
         <i class='fas fa-right-from-bracket' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
  <div class="text">Module1</div>
                    <?php
    session_start();
    require 'connection.php';
?>
                   

<div class="containers">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Applicant Details
                    </h2>
                </div>
                <div class="card-body">
                    <div class="tbl_container">
                        <input type="text" class="form-control" id="search" placeholder="Search..."> 
                        <i class="fa fa-search"></i>
                    </div>

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Position</th>
                                <th>Education Background</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $query = "SELECT * FROM applicant";
                                $query_run = mysqli_query($_connections, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $applicant)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $applicant['Name']; ?></td>
                                            <td><?= $applicant['Email']; ?></td>
                                            <td><?= $applicant['Contact_No']; ?></td>
                                            <td><?= $applicant['Position']; ?></td>
                                            <td><?= $applicant['Education_Background']; ?></td>
                                            <td><?= $applicant['Gender']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<tr><td colspan='8'>No Record Found</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notification" class="notification">
  <p>Roldan, you are my special</p>
  <div class="button-container">
    <form id="deleteForm" action="code.php" method="post">
      <input type="hidden" id="applicantNo" name="delete_applicant" value="<?= $applicant['Applicant_No']; ?>">
      <button type="button" onclick="deleteItem()" class="delete-button">Delete</button>
    </form>
    <button onclick="cancelDelete()" class="cancel-button">Cancel</button>
  </div>
</div>

<script>
function showNotification() {
  document.getElementById("notification").style.display = "block";
}

function deleteItem() {
  var applicantNo = document.getElementById("applicantNo").value;
  // You can perform your delete logic here, for now, just alerting
  alert("Item deleted: " + applicantNo);
  hideNotification();
}

function cancelDelete() {
  hideNotification();
}

function hideNotification() {
  document.getElementById("notification").style.display = "none";
}

// Function to set the applicant number in the form
function setApplicantNo(applicantNo) {
  document.getElementById("applicantNo").value = applicantNo;
}
</script>
  </section>
  <script>
 let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".fa-search");
let body = document.querySelector("body"); 

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  body.classList.toggle("gray-background"); 
  menuBtnChange();
});

searchBtn.addEventListener("click", ()=>{ 
  sidebar.classList.toggle("open");
  body.classList.toggle("gray-background"); 
  menuBtnChange(); 
});

function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("fa-bars", "fa-arrow-right");
 } else {
   closeBtn.classList.replace("fa-arrow-right", "fa-bars"); 
 }
}


  </script>
</body>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body {
  background-color: midnightblue;
}

.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details img{
  width: 30px;
  height: 30px;
  border-radius: 50px;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .img,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: white;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .fa-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .fa-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .fa-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background:  #11101D;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .email{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .email{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  background: midnightblue;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}

@keyframes animate {
    0%,18%,20%,50.1%,60.1%,65.1%,80%,90%,92%
    {
        color: #0e3742;
        box-shadow: none;
    }
    18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%
    {
        color: white;
        text-shadow: 0 0 10px #0e3742,
                    0 0 20px  #0e3742,
                    0 0 40px  #0e3742,
                    0 0 80px  #0e3742,
                    0 0 160px darkcyan;
    }
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: white;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
.containers {
  max-width: 1100px;
  height: 80vh;
  top: 10%;
  position: absolute;
  left: 8%;
  margin: 0 auto;
  padding: 20px;
  background-color: wheat;
}

.card-header h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.tbl_container {
  position: relative;
  margin-bottom: 20px;
}

.tbl_container input[type="text"] {
  width: 60%;
  padding: 8px;
  border-radius: 10px;
  border: 1px solid #ccc;
}

.fa-search {
  position: absolute;
  top: 50%;
  right: 430px;
  transform: translateY(-50%);
}

.tbl {
  width: 100%;
  border-collapse: collapse;
  height: 100%;
}

.tbl thead {
  background-color: midnightblue;
  color: white;
}

.tbl th,
.tbl td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
}

.tbl tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.tbl tbody tr:hover {
  background-color: #ddd;
}

.tbl button {
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.tbl button.btn_view {
  background-color: #007bff;
  color: white;
}

.tbl button.btn_edit {
  background-color: #28a745;
  color: white;
}

.tbl button.btn_delete {
  background-color: #dc3545;
  color: white;
}

@media (max-width: 768px) {
  .tbl thead {
    display: none;
  }

  .tbl tbody,
  .tbl tr,
  .tbl td {
    display: block;
    width: 100%;
  }

  .tbl tr {
    margin-bottom: 15px;
  }

  .tbl td {
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  .tbl td:before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 10px;
    font-size: 16px;
    font-weight: bold;
    text-align: left;
  }
}
.notification {
        display: none;
        background-color: #f2f2f2;
        color: #333;
        text-align: center;
        border-radius: 5px;
        padding: 20px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .delete-button {
        background-color: #f44336;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
    }

    .cancel-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
    }
.tbl_container button{
  width: 60px;
  height: 30px;
  font-size: 20px;
  border-radius: 10px;
}
</style>
</html>