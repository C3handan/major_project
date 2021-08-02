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
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/boots  trap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
<body class="bg-light">

       <!-- nab_section_1 part-->
       <section>
              <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
                     <a class="navbar-brand" href="../home.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25"
                                   fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                   <path
                                          d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav mr-auto nav-pills">
                                   <li class="nav-item ">
                                         <div class="topnav"> <a class="" href="digital.php">Digital electronics</a>
                                         </div>    </li>

                               
                                   <li class="nav-item">
                                      <div class="topnav">   <a class="" href="network.php">Network Analysis</a>
                                      </div>     </li>
                                   <li class="nav-item">
                                         <div class="topnav"> <a class="" href="communication.php">Satellite Communication</a>
                                         </div>     </li>

                                   <li class="nav-item">
                                        <div class="topnav">  <a class="" href="devices.php">Electronics Devices</a>
                              </div>     </li>
                                   <li class="nav-item">
                                          <a class="nav-link" href="#">Analog & Digital Comm.</a>
                                   </li>

                            </ul>



                            <ul class="navbar-nav">
                                  <li> <strong class="nav-link text-white active"> Welcome <?php echo $_SESSION["displayname"] ?>  </strong>  </li>
                            </ul>


                            <ul class="navbar-nav">
                            <li><a class="nav-link text-white active" href="../loggout.php"> <strong>logout </strong> <i class="fas fa-user"></i></a></li>
          
                            </ul>






                          



                                

</div>
</nav>
</br>


</section>