<?php 
include("includes/session.php");
include '../database/database-helper.php';

$ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM customers WHERE customer_id = '$ID' ";
    // echo $SqlCommand;
    // die;
    $Result = mysqli_query($conn, $SqlCommand);
    if($Result)
    {
?>
        <script>
            alert("Customer Successfully Deleted");
            window.location.href= "front-people.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "front-people.php?failed";
        </script>
<?php 
    }		
?>