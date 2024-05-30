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
        <a href="Admin.php">
          <i class='fas fa-qrcode'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="Modul1admin.php">
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
 
  <?php
require 'connection.php';
?><div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Applicant View Details 
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="back">
                            <a href="module1admin.php">
                            <button type="submit"><i class="fa-solid fa-chevron-left"></i>Back</button>
                            </a>
                        </div>
                        <?php
                        if(isset($_GET['id']))
                        {
                            $applicant_id = mysqli_real_escape_string($_connections, $_GET['id']);
                            $query = "SELECT * FROM applicant WHERE Applicant_No='$applicant_id' ";
                            $query_run = mysqli_query($_connections, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $applicant = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Applicant Name</label>
                                        <p class="form-control">
                                            <?=$applicant['Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Applicant Email</label>
                                        <p class="form-control">
                                            <?=$applicant['Email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Applicant Phone</label>
                                        <p class="form-control">
                                            <?=$applicant['Contact_No'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Applicant Position</label>
                                        <p class="form-control">
                                            <?=$applicant['Position'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Applicant Education Background</label>
                                        <p class="form-control">
                                            <?=$applicant['Education_Background'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Applicant Gender</label>
                                        <p class="form-control">
                                            <?=$applicant['Gender'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
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
.card {
        border: 2px solid whitesmoke;
        border-radius: 10px;
        margin-top: 50px;
        background-color: wheat;

    }

    .card-header {
        background-color: gray;
        color: white;
       border-bottom: 2px solid black;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2em;
        height: 90px;
        border-radius: 10px;

    }

    .card-body {
        padding: 20px;
    }

    input[type=text],
    input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
    }

    button {
        background-color: black;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    .mb-3{
        margin: 10px;
        margin-top: 15px;
        font-size: 20px;
        border-bottom: 2px solid black;
    }
    .mb-3:hover ,label:hover{
      background-color: gray;
      border-radius: 10px;
      color: aquamarine;
      font-size: 20px;
    }
    .back button{
    background-color: white;
    color: black;
    width: 90px;
    border: 2px solid black;
    border-radius: 10px;
    }
</style>
</html>
