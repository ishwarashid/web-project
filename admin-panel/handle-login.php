<?php 
    if (isset($_POST['login'])) {
        include("../database/database-helper.php");
        if (empty($_POST['username'])  || empty($_POST['password'])) {
            echo "<div class='alert alert-danger'>All fields must be entered</div>";
            die(); 
        }else{
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = $_POST['password'];
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
            $result = mysqli_query($conn,$sql) or die("Query Failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();
                    $_SESSION['USERNAME'] = $row['username'];
                    $_SESSION['SESSION_ID'] = $row['id'];
                    header("Location: index.php");
                }
            }else{
                echo "<div class='alert alert-danger'>Username and Password are not matched.</div>";
            }
        }
    }

    ?>