<?php 
include("includes/session.php");
include '../database/database-helper.php';

$ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM admin WHERE id = '$ID' ";
    // echo $SqlCommand;
    // die;
    $Result = mysqli_query($conn, $SqlCommand);
    if($Result)
    {
?>
        <script>
            alert("Admin Successfully Deleted");
            window.location.href= "front-admins.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "front-admins.php?failed";
        </script>
<?php 
    }		
?>