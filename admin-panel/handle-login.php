<?php

include("../database/database-helper.php");
include("includes/session.php");


if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];




    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($conn, $query) or die("Query failed");
    if(mysqli_num_rows($result) >0 ){

        $row = mysqli_fetch_assoc($result);

            $_SESSION["USERNAME"] = $row["username"];
            $_SESSION["SESSION_ID"] = $row["id"];


            header('Location: index.php');


    }

} else {
    header('Location: page-register.php');
}

?>