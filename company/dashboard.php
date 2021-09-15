<?php
session_start();
include('../db_conn.php');

if ($_SESSION['loggedin']) {
  $email = $_SESSION['email'];
} else {
  echo "you are not Logged In as admin";
}

$sql = "SELECT * FROM `jobs` where co_email='$email' ";
$result = $conn->query($sql);
$totaljobs = $result->num_rows;

$sql = "SELECT * FROM `applied jobs` where co_email='$email'";
$result = $conn->query($sql);
$totalapp = $result->num_rows;

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="../firstpage_style.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../side_nav.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="./css/AdminLTE.min.css">
  <link rel="stylesheet" href="./css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <title>Dashboard</title>
  <style>
    body {
      background-image: url(images/new.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>

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
                    <a href="applied.php" class="side_nav_a">Job Applications</a>
        </div>
        <span class="pointer" onclick="openNav()">&#9776;</span>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="a_dashboard.php">Travaux Company Panel</a>
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
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
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
    <div class="container">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->

            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3 style="text-align:center";><?php echo $totaljobs; ?></h3>

                  <h4 style="text-align:center";>Total Active Jobs</h2>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="Jobs.php" class="small-box-footer">More info </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3 style="text-align:center";><?php echo $totalapp; ?></h3>

                  <h4 style="text-align:center";>Total Application</h2>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="applied.php" class="small-box-footer">More info </a>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->

</body>

</html>
<?php
    include('../script.php');
?>