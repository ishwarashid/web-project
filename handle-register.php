<?php
    if (isset($_POST['signup'])) {
        include("database/database-helper.php");
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
            echo "<!doctype html><html><body><script>alert('All fields must be entered.'); location.href = 'register.php';</script></body></html>";
            die; 
        }
        else{
            $sql = "SELECT MAX(customer_id) as max_id FROM customers;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                $id = $row['max_id'] + 1;
            }
            else {
                $id = 1;
            }
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $username = mysqli_real_escape_string($conn, $_POST['email']);
            $password = $_POST['password'];
            $sql = "SELECT * FROM customers WHERE username='$username';";
            $result = mysqli_query($conn,$sql) or die("Query Failed");

            if(mysqli_num_rows($result)>0){
                echo "<!doctype html><html><body><script>alert('User already exists.'); location.href = 'register.php';</script></body></html>";
                die;
            }

            $sql = "INSERT INTO customers (customer_id, name, username, password) VALUES ('$id', '$name', '$username', '$password');";
            $result = mysqli_query($conn,$sql) or die("Query Failed");
            if ($result) {
                session_start();
                $_SESSION['USERNAME'] = $username;
                $_SESSION['NAME'] = $name;
                $_SESSION['SESSION_ID'] = $id;
                header("Location: index.php");
            }
        }
    }

?>