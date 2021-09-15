<?php
include('db_conn.php');
if(isset($_REQUEST["signup"])){
	
    // Checking for Empty Fields
    if(($_REQUEST['fname'] == "") || ($_REQUEST['lname'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['password'] == "")){
		// echo"hello";
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
		// echo"hell02";
      $sql = "SELECT c_email FROM tcustomer_login WHERE c_email='".$_REQUEST['email']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
		  echo"hiiii";
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rfName = $_REQUEST['fname'];
        $rlName = $_REQUEST['lname'];
        $rUserName = $_REQUEST['username'];
        $rEmail = $_REQUEST['email'];
        $rPassword = $_REQUEST['password'];
        $sql = "INSERT INTO `tcustomer_login` (`c_fname`, `c_lname`, `c_username`, `c_email`, `c_pass`) VALUES ('$rfName', '$rlName', '$rUserName', '$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
			echo"hilllo";
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="signup_style.css" />
	<title>Signup</title>
	<style>
		body {
			background-image: url(images/exam3.jpg);
			background-size: cover;
			background-attachment: scroll;
			background-repeat: no-repeat;
		}
	</style>
</head>

<body>
	<div class="one container my-3" style="width: 600px; height: auto; border-radius:3%;">
		<h1 class="p-2">Register</h1>
		<hr>
		<form class="g-3 p-2" action="" method="POST">
			<div class="row g-3 p-2">
				<div class="col">
					<div class="form-group">
						<label for="inputFname" class="form-label">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" aria-label="First name">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="inputLname" class="form-label">Last name</label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" aria-label="Last name">
					</div>
				</div>
			</div>
			<div class="form-group p-2">
				<label for="username" class="form-label">Username</label>
				<input type="text" maxlength="25" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group p-2">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" placeholder="Email" id="email" name="email">
			</div>
			<div class="form-group p-2">
				<label for="inputPassword4" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>

			<div class="align-left">
				<p>Already signed up? <a href="index.php">Login</a>.</p>
			</div>
			<center>
				<div class="container form-group col p-2">
					<button type="submit" name="signup" class="btn btn-primary">Register Now</button>
				</div>
				<center>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>