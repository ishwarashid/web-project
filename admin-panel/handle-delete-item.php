<?php 
include("includes/session.php");
include '../database/database-helper.php';

$ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM products WHERE product_id = '$ID' ";
    // echo $SqlCommand;
    // die;
    $Result = mysqli_query($conn, $SqlCommand);
    if($Result)
    {
?>
        <script>
            alert("Product Successfully Deleted");
            window.location.href= "front-food-items.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "front-food-items.php?failed";
        </script>
<?php 
    }		
?>