<?php
  session_start();
  header('location: loggin.php');
 
 $servername= "localhost";
 $passw= "";
 $user = "root";
 $database = "signin";
 /*   mysqli_select_db($con, 'signin');   */

$con= mysqli_connect($servername, $user, $passw, $database);
if($con)
{
       echo "databases connection succeessful <br>";
}  else{
       echo "no connection;";
}


$email = $password = "";


 
if($_SERVER["REQUEST_METHOD"]=="POST")
{

 $email = $_POST['emal'];
 $password = $_POST['passord'];
 $username= $_POST['username'];
 $name= $_POST['name'];
 $repassword= $_POST['pass'];
 $branch = $_POST['branch'];
 $colname = $_POST['colname'];

}

echo "$repassword";


$q = "SELECT * FROM tbsignin WHERE  email= '$username' && password ='password'  ";
$r = mysqli_query($con, $q);
$num = mysqli_num_rows($r);
if($num >=1)
{
       echo "duplicate data";
}
else{
       
$datainn= "INSERT INTO `tbsignin` (`id`, `username`, `name`, `email`, `password`, `repassword`, `colname`, `branch`) 
VALUES (NULL, '$username', '$name', '$email', '$password', '$repassword', '$colname', '$branch'); ";

$result = mysqli_query($con,$datainn);


if($result==1)
{
       header('location:loggin.php');
}
else{
       echo"data not inserted";
}
}


?>