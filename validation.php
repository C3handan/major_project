

<?php
  session_start();
  header('location:home.php');

 
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
       echo "no connection; <br> ";
}


$username = $password = "";


 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $username = $_POST['username'];
 $password = $_POST['passord'];
 //$fname= $_POST['fname'];
 //$lname= $_POST['lname'];
 //$repassword= $_POST['pass'];

}



echo "$repassword";
$name="";

$q = "SELECT * FROM tbsignin WHERE  username= '$username' && password = '$password' ";
//$nq = "SELECT name  FROM tbsignin WHERE  username= '$username' && password = '$password' ";
//$name = mysqli_query($con,$nq);
$r = mysqli_query($con, $q);
$num = mysqli_num_rows($r);
if($num >=1)
{
       echo "you are a valid user";
   $_SESSION['displayname'] = $username;
   header('location:home.php');


}
else{
            header('location:loggin.php');

       

}



?>
