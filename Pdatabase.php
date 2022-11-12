<?php

$us = $_POST['Username'];
$ps = $_POST['Password1'];
$cp = $_POST['Cpassword1'];
$c = mysqli_connect("localhost","root","","Project");
$q = "INSERT INTO `login`(`Username`, `Password`) VALUES ('$us','$ps');";
// if ($insert) {
    
//     echo "<center> <h1 >Response added successfully</h1></center> ";
    
// }
// else {
//     echo " <h1> somthing went wrong </h2>";
// }
if ($_POST['Password1'] == $_POST['Cpassword1']){
 
    $insert = mysqli_query($c,$q);
    if ($insert) {
        echo "<center> <h1 >Response added successfully</h1></center> ";
        
        }
        else {
            
            echo " <center> <h1> Somthing went wrong please try again</h1> </center>";
        }
  
   
}
else
{

    echo " <center> <h1>Password and confirm password is wrong please try again </h1> </center>";
    
}
?>