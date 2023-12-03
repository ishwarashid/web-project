<?php 
    if (isset($_POST['login'])) {
        include("database/database-helper.php");
        if (empty($_POST['username'])  || empty($_POST['password'])) {
            echo "<!doctype html><html><body><script>alert('All fields must be entered.'); location.href = 'register.php';</script></body></html>";
            die(); 
        }else{
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = $_POST['password'];
            $sql = "SELECT * FROM customers WHERE username = '$username' AND password = '$password';";
            $result = mysqli_query($conn,$sql) or die("Query Failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();
                    $_SESSION['USERNAME'] = $row['username'];
                    $_SESSION['NAME'] = $row['name'];
                    $_SESSION['SESSION_ID'] = $row['customer_id'];
                    header("Location: index.php");
                }
            }else{
                echo "<div class='alert alert-danger'>Username and Password are not matched.</div>";
            }
        }
    }

    ?>