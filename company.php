<?php
session_start();
if ($_SESSION['loggedin']) {
    $email = $_SESSION['email'];
} else {
    echo "you are not Logged In as admin";
}
?>
<?php
include('db_conn.php');
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
    <link rel="stylesheet" type="text/css" media="screen" href="side_nav.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="./css/AdminLTE.min.css">
    <link rel="stylesheet" href="./css/_all-skins.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom -->
    <link rel="stylesheet" href="/css/custom.css">
    <title>Dashboard</title>


</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper bg-white">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="dashboard.php" class="side_nav_a">Home</a>
                    <a href="jobs.php" class="side_nav_a">Jobs</a>
                    <a href="applied.php" class="side_nav_a">Applied Jobs</a>
                    <a href="company.php" class="side_nav_a">Companies</a>
                </div>
                <span class="pointer" onclick="openNav()">&#9776;</span>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="a_dashboard.php">Travaux</a>
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-end">
                    <div class="col">
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <!-- <li><a class="dropdown-item" href="profile_page.php">My Profile</a></li> -->
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <span class="nav-link active" aria-current="page"><?php echo $email; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation bar end -->

        <!-- Modal -->
        <div class="modal fade" id="StateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="code.php" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" name="co_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Company Description</label>
                                <textarea name="cdesc" class="form-control"  required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Company Email</label>
                                <input type="text" name="cemail" class="form-control"  required></input>
                            </div>
                            <div class="form-group">
                                <label for="">Companies Password</label>
                                <input type="text" name="cpass" class="form-control" rows="5" required></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="comp_save" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content bg-white text-dark">

            <section class="content mt-4">
                <div class="container-fluid bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Companies
                                        
                                    </h4>
                                </div>
                                <div class="card-body bg-white">
                                    <table class="table table-bordered bg-white">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company Name</th>
                                                <th>Company Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM tcomp_login";
                                            $query_run = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $compitem) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $compitem['co_id']; ?></td>
                                                        <td><?php echo $compitem['co_name']; ?></td>
                                                        <td><?php echo $compitem['cdesc']; ?></td>
                                                       
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="6">No record found</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>

    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;"> -->
    <!-- <div class="container"> -->
    <!-- Start Footer Container -->
    <!-- <div class="row py-3"> -->
    <!-- Start Footer Row -->
    <!-- <div class="col-md-6"> -->
    <!-- Start Footer 1st Column -->
    <!-- <span class="pr-2">Follow Us: </span> -->
    <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a> -->
    <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a> -->
    <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a> -->
    <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a> -->
    <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a> -->
    <!-- </div>  -->
    <!-- End Footer 1st Column -->
    <!--  -->
    <!-- <div class="col-md-6 text-right"> -->
    <!-- Start Footer 2nd Column -->
    <!-- <small> Designed For PBL Project. -->
    <!-- </small> -->
    <!-- <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small> -->
    <!-- </div> End Footer 2nd Column -->
    <!-- </div> End Footer Row -->
    <!-- </div> End Footer Container -->
    <!-- </footer>  -->
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->

</body>

</html>
<?php
include('script.php');
?>