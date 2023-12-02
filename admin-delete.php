<?php include("includes/DatabaseHelper.php");?>

<?php //include("include/session.php");?>

<?php
    $ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM admins WHERE id = '$ID' ";
    // echo $SqlCommand;
    // die;
    $Result = mysqli_query($conn, $SqlCommand);
    if($Result)
    {
?>
        <script>
            alert("Admin Record Successfully Deleted");
            window.location.href= "admin-list.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "admin-list.php?failed";
        </script>
<?php 
    }		
?>