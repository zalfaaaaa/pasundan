<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Staff</title>
    <style>
        .cardBox{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            grid-gap: 30px;
        }
        .cardBox .card1{
            position: relative;
            background:#1d1d1d;
            color: white;
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        }
        .cardBox .card1:hover
        {
            background:#fff;
            color:#000;
        }
        .col-auto ul li:hover
        {
            background:grey;
            color:#000;
        }
        .toggle
        {
            position: relative;
            font-size:2.15em;
            background:#fff;
            border-radius:8px;
            width:40px;
            height:40px;
            justify-content:center;
            align-items:center;
            box-shadow:0 7px 20px rgba(0,0,0,0.10);
        }
    </style>
</head>
<!-- nav -->
<body style="font-family:'poppins', sans-serif;background-color:#849FBD">
<nav class="navbar navbar-dark" style="background-color:#1d1d1d;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../totoro.png" alt="" width="40" class="d-inline-block ">
      &nbsp; Pembayaran SPP Vecna
    </a>
  </div>
</nav>
    <!-- sidebar -->
    <div class="container-fluid">
    <div class="row flex-nowrap" >
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#0b0b0b">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 mt-3">
            <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://i.pinimg.com/564x/b6/0f/02/b60f025cccf935944c5923db695c6ade.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">&nbsp;
                        <span class="d-none d-sm-inline mx-1" style="font-weight: bold;"><?php echo $_SESSION['username'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="border-radius: 20px;background-color:#1d1d1d">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">Log out</a></li>
                    </ul>
                </div>
                <!-- batas     -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-light"><ion-icon name="home"></ion-icon>&nbsp;Home</a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light"><ion-icon name="folder-open"></ion-icon>&nbsp; Payment Entry</a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light"><ion-icon name="timer"></ion-icon>&nbsp; History Payment</a>                    
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <!-- end -->
        <div class="col py-3 konten">
            <div class="cardBox">
                <div class="card1">
                    <div class="">
                        <div class="numbers">Payment Entry</div>
                        <div class="cardname">Entry Pembayaran</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="card1">
                    <div class="">
                        <div class="numbers">History Payment</div>
                        <div class="cardname">Histori Pembayaran</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>