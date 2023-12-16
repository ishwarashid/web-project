<?php 
include("includes/session.php");
include '../database/database-helper.php';
$name = $_POST["name"];
$password = $_POST["password"];
$username = $_POST["username"];
$phone = $_POST["phone"];
$status = $_POST["status"];
// $status = $_POST["status"];
// intval()


$sql = "SELECT MAX(id) AS max FROM admin;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$adminID = $row["max"] + 1;

$sql = "INSERT INTO admin (id, fullname, username, password, contact, status) VALUES ('$adminID', '$name', '$username', '$password', '$phone', '$status')";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Admin Successfully Added");
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

