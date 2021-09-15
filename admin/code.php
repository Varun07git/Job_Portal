<?php
include('db_conn.php');
?>
<?php
session_start();
if ($_SESSION['loggedin']) {
    $email = $_SESSION['email'];
  } else {
    echo "you are not Logged In as admin";
    header("Admin_login.php");
  }
// ---------------------------------------------------------------------------------------------------------------------------------------------
// Insert company start 
if(isset($_POST['comp_save']))
{
    $cname = $_POST['co_name'];
    $cdescription = $_POST['cdesc'];
    $cemail = $_POST['cemail'];
    $cpass = $_POST['cpass'];
    $comp_query = "INSERT INTO tcomp_login (co_name,cdesc,co_email,co_pass) VALUES ('$cname','$cdescription','$cemail','$cpass')";
    $comp_query_run = mysqli_query($conn, $comp_query);
    if($comp_query_run)
    {
        $_SESSION['status'] = "Companny inserted successfully";
        header("Location: company.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Company insertion failed";
        header("Location: Company.php");
        // after execution we need to be on the same page     
    }
}
// Insert company END
//Updating company Start
if(isset($_POST['comp_update'])) 
{
    $comp_id = $_POST['comp_id']; //this cate id is obtained in hidden value while editing
    $cname = $_POST['co_name'];
    $cdescription = $_POST['cdesc'];
    $query = "UPDATE tcomp_login SET co_name = '$cname', cdesc = '$cdescription' WHERE co_id = '$comp_id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Company updated successfully";
        header("Location: company.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Company updation failed";
        header("Location: company.php");
        // after execution we need to be on the same page 
        
    }
}
//Updating company End
// Delete company start 
if(isset($_POST['comp_delete_btn']))
{
    $comp_id = $_POST['comp_delete_id']; // on the basis of this id the deletion of the data will take place
    $query = "DELETE FROM tcomp_login WHERE co_id = '$comp_id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Company data deleted successfully";
        header("Location: company.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Company data deletion failed";
        header("Location: company.php");
        // after execution we need to be on the same page     
    }
}
// Delete company end 
// ------------------------------------------------------------------------------------------------------------------------------------------













// ------------------------------------------------------------------------------------------------------------------------------------------
// Insert Job start 
if(isset($_POST['job_save']))
{
    $jname = $_POST['jname'];
    $jdescription = $_POST['jdesc'];
    $jemail = $_POST['jemail'];
    $job_query = "INSERT INTO jobs (jname,jdesc,co_email) VALUES ('$jname','$jdescription','$jemail')";
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
    $jemail = $_POST['jemail'];

    $query = "UPDATE jobs SET jname = '$jname', jdesc = '$jdescription', co_email=$jemail WHERE jid = '$job_id' ";
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
//Updating State End

// Delete job start 
if(isset($_POST['job_delete_btn']))
{
    $job_id = $_POST['job_delete_id']; // on the basis of this id the deletion of the data will take place
    $query = "DELETE FROM jobs WHERE jid = '$job_id' ";
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















// ------------------------------------------------------------------------------------------------------------------------------------------
// Insert Applicant start 
if(isset($_POST['ap_save']))
{
    $ap_fname = $_POST['ap_fname'];
    $ap_lname = $_POST['ap_lname'];
    $ap_uname = $_POST['ap_uname'];
    $ap_email = $_POST['ap_email'];
    $ap_pass = $_POST['ap_pass'];
    

    $app_query = "INSERT INTO tuser_login (ap_fname,ap_lname,ap_username,ap_email,ap_pass) VALUES ('$ap_fname','$ap_lname','$ap_uname','$ap_email','$ap_pass')";
    $app_query_run = mysqli_query($conn, $app_query);
    if($comp_query_run)
    {
        $_SESSION['status'] = "Applicant inserted successfully";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Applicant insertion failed";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
        
    }
}
// Insert applicant END

//Updating applicant Start
if(isset($_POST['ap_update'])) 
{
    $ap_id = $_POST['ap_id']; //this cate id is obtained in hidden value while editing
    $ap_fname = $_POST['ap_fname'];
    $ap_lname = $_POST['ap_lname'];
    $ap_email = $_POST['ap_email'];
    $ap_pass = $_POST['ap_pass'];
    

    $query = "UPDATE tuser_login SET ap_fname = '$ap_fname', ap_lname='$ap_lname', ap_email='$ap_email', ap_pass='$ap_pass' WHERE ap_id = '$ap_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Applicant updated successfully";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Applicant updation failed";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
        
    }
}
//Updating State End

// Delete job start 
if(isset($_POST['ap_delete_btn']))
{
    $ap_id = $_POST['ap_delete_id']; // on the basis of this id the deletion of the data will take place
    $query = "DELETE FROM tuser_login WHERE ap_id = '$ap_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Applicant deleted successfully";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
    }
    else
    {
        $_SESSION['status'] = "Applicant deletion failed";
        header("Location: applicant.php");
        // after execution we need to be on the same page 
        
    }
}
// Delete job end 












// --------------------------------------------------------------------------------------------------------------------------------------------

?>





