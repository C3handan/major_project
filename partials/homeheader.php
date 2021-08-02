<?php

session_start();
if(!isset($_SESSION['displayname'])){
       header('location:loggin.php');
}

?>




<!doctype html>
<html lang="en">

<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
       
     <link rel ="stylesheet" href = "CSS/footer.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
       <title>virtualEDU</title>


       <style>
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
  font-size: 15px;
  font-family: 'Ubuntu', sans-serif;
}

.navbar a:hover {
  background-color: #00FFFF;
  color: black;
  border-radius:5px;
}

.navbar a:active {
  background-color: #04AA6D;
  color: white;
  border-radius:5px;
}

 

       </style>
</head>

<body>

       <div class="container-fluid  first_class ">
              <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-dark text-white ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                     </button>
                     <a class="navbar-brand text-primary" href="home.php">
                            <h5>virtualEDU</h5>
                     </a>

                     <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                   <li class="nav-item active  text-white">
                                          <a  href="ece/digital.php">Electronics <span
                                                        class="sr-only">(current)</span></a>
                                   </li>
                                   <li class="nav-item">
                                          <a class=" " href="e_book.php">E-MATERIAL</a>
                                   </li>
                                   <li class="nav-item">
                                          <a  href="course.php">Courses</a>
                                   </li>
                                   <li class="nav-item">
                                          <a  href="about.php">Notice</a>
                                   </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                   <li> <strong class="nav-link text-white active"> Welcome
                                                 <?php echo $_SESSION["displayname"] ?> </strong> </li>
                                   <li><a class="nav-link text-white active" href="loggout.php"> <strong>logout
                                                 </strong> <i class="fas fa-user"></i></a></li>

                            </ul>

                     </div>
              </nav>
       </div>

