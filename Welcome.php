<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['Password1'];
echo $user;
echo $pass;

$c = mysqli_connect("localhost","root","","Project");
$q = "SELECT * FROM `login` WHERE Username= '$user' and Password ='$pass'";
$res = mysqli_query($c,$q);
$exists="No";
if (isset($_POST['username']) && isset($_POST['Password1']) )
{
    while ($row = mysqli_fetch_array($res)) 
    {
        $exists="Yes";
    }
    if($exists=="Yes")
    {
        $_SESSION['Username'] = $_POST['username'];
        $_SESSION['Password'] = $_POST['Password1'];
        echo "<script> location.href='main.php';</script>";
    }
    else{
        echo "<script> location.href='Login.html';</script>";
    }
}
// {

// if (($_POST['Username'] == $user) && ($_POST['passtext']== $pass)) {
//     $_SESSION['Username'] = $_POST['Password1'];
//     echo "Username :";
//     echo $user;
//    echo "<br>";
//     echo "password : ";
//     echo $pass."<br>";
   
  
   
// }
// else
// {

//     echo " wroung username and password";
// }
    
// }


?>