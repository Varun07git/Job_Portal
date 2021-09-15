<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db_conn.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="firstpage_style.css" />
    <title>Index-page</title>
    <style>
        body {
            background-image: url(images/new.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Travaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comp_login.php">Company Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad_login.php">Candidate Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin\Admin_login.php">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- section 1 starts here -->
    <section class="content-header bg-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center index-head">
                    <h1 class="main_head">All in One Job Portal</h1>
                    <br>
                    <p>Find Jobs,Careers and Employment</p>
                    <div class="btn-wrap">
                        <a href="cad_login.php">Search</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            
            <br><br><br>
        </div>
    </section>
    <!-- section 1 ends here -->
    <!-- section 2 starts here -->
    <section class="bg-dark">
        <div class="container text-white text-center">
            <br>
            <br>
            <h1>All in One Job Portal</h1>
            <br>
            <div class="card-group">
                <div class="row">
                    <div class="card col bg-dark">
                        <img src="images/browse.jpg" class="card-img-top" alt="Browse Jobs" width="30%" height="260px">
                        <div class="card-body">
                            <h5 class="card-title text-white">Browse jobs</h5>
                        </div>
                    </div>
                    <div class="card col bg-dark">
                        <img src="images/interviewed.jpeg" class="card-img-top" alt="Apply & Get Interviewed" width="30%" height="260px">
                        <div class="card-body">
                            <h5 class="card-title text-white">Apply & Get Interviewed</h5>
                        </div>
                    </div>
                    <div class="card col bg-dark">
                        <img src="images/career.jpg" class="card-img-top" alt="Start A Career" width="30%" height="260px">
                        <div class="card-body">
                            <h5 class="card-title text-white">Start A Career</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 ends here -->
    <!-- section 3 starts here -->
    <section>
        <div class="jumbotron bg-dark" id="about_us">
            <!-- Start Happy Customer Jumbotron -->
            <div class="container">
                <br>
                <!-- Start Customer Container -->
                <h2 class="text-center text-white">About US</h2>
                <div class="row mt-5">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Start Customer 1st Column-->
                        <div class="card shadow-lg mb-2 bg-secondary">
                            <div class="card-body text-center">
                                <img src="./images/tanya.jpg" class="img-fluid" style="border-radius: 100px;">
                                <h4 class="card-title">Tanya Gupta</h4>
                                <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                    ducimus voluptas
                                    nesciunt debitis numquam.</p>
                                <br>
                            </div>
                        </div>
                    </div> <!-- End Customer 1st Column-->
                    <div class="col-lg-3 col-sm-6">
                        <!-- Start Customer 2nd Column-->
                        <div class="card shadow-lg mb-2 bg-secondary">
                            <div class="card-body text-center">
                                <img src="./images/vishakha.jpg" class="img-fluid" style="border-radius: 100px;">
                                <h4 class="card-title">Vishakha Gandhi</h4>
                                <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                    ducimus voluptas
                                    nesciunt debitis numquam.</p>
                                <br>
                            </div>
                        </div>
                    </div> <!-- End Customer 2nd Column-->
                    <div class="col-lg-3 col-sm-6">
                        <!-- Start Customer 3rd Column-->
                        <div class="card shadow-lg mb-2 bg-secondary">
                            <div class="card-body text-center">
                                <img src="./images/varun.jpg" class="img-fluid" style="border-radius: 100px;">
                                <h4 class="card-title">Varun Kushwah</h4>
                                <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                    ducimus voluptas
                                    nesciunt debitis numquam.</p>
                                <br>
                            </div>
                        </div>
                    </div> <!-- End Customer 3rd Column-->
                    <div class="col-lg-3 col-sm-6">
                        <!-- Start Customer 4th Column-->
                        <div class="card shadow-lg mb-2 bg-secondary">
                            <div class="card-body text-center">
                                <img src="./images/shikhar.jpg" class="img-fluid" style="border-radius: 100px;">
                                <h4 class="card-title">Shikhar singhal</h4>
                                <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                    ducimus voluptas
                                    nesciunt debitis numquam.</p>
                                <br>
                            </div>
                        </div>
                    </div> <!-- End Customer 4th Column-->
                </div> <!-- End Customer Row-->
            </div> <!-- End Customer Container -->
            <br><br>
        </div> <!-- End Customer Jumbotron -->
    </section>
    <!-- section 3 ends here -->
    <!-- Start Footer-->
    <footer class="bg-dark text-white">
        <div class="container">
            <!-- Start Footer Container -->
            <div class="row py-3">
                <!-- Start Footer Row -->
                <div class="col align-self-center">
                    <!-- Start Footer 2nd Column -->
                    <small> Designed For PBL Project &copy; 2021.
                    </small>
                </div> <!-- End Footer 2nd Column -->
            </div> <!-- End Footer Row -->
        </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>