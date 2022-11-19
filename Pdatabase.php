
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAAS</title>
    <link rel="shortcut icon" href="vass.png" type="image/png">
    <style>

</style>
</head>
<body>
<script>     
    alert(" Account has been created succesfully ")


</script>

</body>
</html>
<?php

$a = $_POST['fname'];
$b = $_POST['Username'];
$d = $_POST['Password1'];
$e= $_POST['mnum'];
$f= $_POST['emailid'];
$g= $_POST['address'];
$c = mysqli_connect("localhost","root","","Project");
$q = "INSERT INTO `login`(`FullName`, `Username`, `Password`, `Mobile`, `Email`, `Address`) VALUES ('$a','$b','$d','$e','$f','$g');";


if ($_POST['Password1'] == $_POST['Cpassword1']){
 
    $insert = mysqli_query($c,$q);
    if ($insert) {
        echo "<script> location.href='Login.html';</script>";
        
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
