<?php
// $login = false;
$showError = false;
  if($_SERVER['REQUEST_METHOD']=="POST"){
  include('db_conn.php');
  $email=$_POST['email'];
  $password=$_POST['password'];
  // echo"hello";
  // a_email, a_pass
  $sql="SELECT a_email, a_pass FROM `tadmin_login` WHERE a_email='".$email."' AND a_pass='".$password."'";
  $result=$conn->query($sql);
  if($result->num_rows == 1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
        // $login = true;
        // $_SESSION['loggedin']=true;
        // $_SESSION['email']=$email;
        // echo"login success";
        echo "<script> location.href='a_dashboard.php'; </script>";
      exit;
      }
      else{
        $showError="Invalid Credentials";
      }
    }
  else{
    // $showError="Invalid Credentials";
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
    
    <title>Admin Login</title>
    <?php
    // if($login){
    // echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> You are logged in
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //     </button>
    // </div> ';
    // }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    // ?>
   <link rel="stylesheet" href="loginstyle.css">
  </head>
  <body>
  <div class="container">
  <h1>Admin Login</h1>
  <form action="" method="POST">
  <div class="form-group ">
  <label for="email" class="form-label">Email Address</label>
  <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
</div>
<div class="form-group ">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" id="password" name="password" placeholder="password">
</div>
<div class="form-group ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login </button>
      </div>
      </div>
      
      <!-- <br></br> -->
      <a href="signup.php">Don't have an account</a>
    </div>
    </form>
  </div>
  <!-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div> -->
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