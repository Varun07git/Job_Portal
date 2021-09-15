<?php
include('../db_conn.php');
?>
<?php
session_start();
if ($_SESSION['loggedin']) {
    $email = $_SESSION['email'];
  } else {
    echo "you are not Logged In as admin";
    header("../comp_login.php");
  }
// ---------------------------------------------------------------------------------------------------------------------------------------------

// ------------------------------------------------------------------------------------------------------------------------------------------
// Insert Job start 
if(isset($_POST['job_save']))
{
    $jname = $_POST['jname'];
    $jdescription = $_POST['jdesc'];
    $coemail=$_SESSION['email'];

    $job_query = "INSERT INTO jobs (jname,jdesc,co_email) VALUES ('$jname','$jdescription','$coemail')";
    $job_query_run = mysqli_query($conn, $job_query);
    if($comp_query_run)
    {
        $_SESSION['status'] = "Job inserted successfully";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Job insertion failed";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
        
    }
}
// Insert Job END

//Updating State Start
if(isset($_POST['job_update'])) 
{
    $job_id = $_POST['job_id']; //this cate id is obtained in hidden value while editing
    $jname = $_POST['jname'];
    $jdescription = $_POST['jdesc'];

    $query = "UPDATE jobs SET jname = '$jname', jdesc = '$jdescription' WHERE jid = '$job_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Job updated successfully";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Job updation failed";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
        
    }
}
//Updating job End

// Delete job start 
if(isset($_POST['job_delete_btn']))
{
    $job_id = $_POST['job_delete_id']; // on the basis of this id the deletion of the data will take place
    $query = "DELETE FROM companies WHERE jid = '$job_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Job deleted successfully";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Job deletion failed";
        header("Location: jobs.php");
        // after execution we need to be on the same page 
        
    }
}
// Delete job end 
// ------------------------------------------------------------------------------------------------------------------------------------------

