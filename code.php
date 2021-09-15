<?php
include('db_conn.php');
?>
<?php
session_start();
if ($_SESSION['loggedin']) {
    $email = $_SESSION['email'];
} else {
    echo "you are not Logged In as admin";
    header("cad_login.php");
}
// ---------------------------------------------------------------------------------------------------------------------------------------------

if(isset($_POST['job_update'])) 
{
    $job_id = $_POST['job_id']; //this cate id is obtained in hidden value while editing
    $jname = $_POST['jname'];
    $jcemail = $_POST['jcemail'];
    $apemail=$_SESSION['email'];
    $jdescription = $_POST['jdesc'];

    $job_query = "INSERT INTO `applied jobs` (`aj_title`, `aj_desc`, `ap_email`, `co_email`) VALUES ('$jname', '$jdescription', '$apemail', '$jcemail')";
    $job_query_run = mysqli_query($conn, $job_query);
    if($comp_query_run)
    {
        $_SESSION['status'] = "Job inserted successfully";
        header("Location: applied.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Job insertion failed";
        header("Location: company.php");
        // after execution we need to be on the same page 
        
    }
}




// Delete job start 
if(isset($_POST['job_delete_btn']))
{
    $job_id = $_POST['job_delete_id']; // on the basis of this id the deletion of the data will take place
    $query = "DELETE FROM `applied jobs` WHERE aj_id = '$job_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Job deleted successfully";
        header("Location: applied.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Job deletion failed";
        header("Location: applied.php");
        // after execution we need to be on the same page 
        
    }
}
// Delete job end 
?>