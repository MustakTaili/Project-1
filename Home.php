<?php
session_start();
if ( $_SESSION['Username'] &&  $_SESSION['Password']) {
 
}
else {
    echo "<script> location.href='Login.html'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="vass.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</head>
<body>
     <div class=" container-fluid ">
        <div class=" row ">

            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <div class="container-fluid">
                        <!-- <img class="lazy navbar-brand" width="226" height="66" alt="Mercedes Benz" src="C:\Users\MUSTAK\OneDrive\Pictures\Saved Pictures\Mercedes-Logo-1933.jpg" > -->
                        <a class="navbar-brand" href="#">Mercedes Benz</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Model</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Offers</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Price</a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Service
                                    </a>
                                    <ul class="dropdown-menu bg-dark">
                                        <li><a class="dropdown-item bg-dark text-light " id="new" href="#"> Auto
                                                Terrace</a></li>
                                        <li><a class="dropdown-item bg-dark text-light " id="new" href="#"> Warranty</a>
                                        </li>
                                        <li><a class="dropdown-item bg-dark text-light " id="new" href="#"> RSA</a></li>
                                        <li><a class="dropdown-item bg-dark text-light " id="new" href="#"> Owners
                                                Manual</a></li>
                                        <li><a class="dropdown-item bg-dark text-light " id="new" href="#">Mercedes Benz
                                                Connect</a></li>
                                    </ul>
                                </li>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Logout.php">Logout</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
    
    
</body>
</html>