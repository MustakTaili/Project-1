<?php
session_start();
if ( $_SESSION['Username'] &&  $_SESSION['Password']) {
 
    echo "<script> location.href='Home.html';</script>";
}
