<?php 
include("includes/session.php");
include '../database/database-helper.php';

$ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM orders WHERE order_id = '$ID' AND status='placed' ";
    // echo $SqlCommand;
    // die;
    $Result = mysqli_query($conn, $SqlCommand);
    if($Result)
    {
?>
        <script>
            alert("Order Successfully Canceled");
            window.location.href= "front-orders.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "front-orders.php?failed";
        </script>
<?php 
    }		
?>