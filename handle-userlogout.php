<?php
session_start();
unset($_SESSION["SESSION_ID"]);
unset($_SESSION["USERNAME"]);
unset($_SESSION["NAME"]);
session_destroy();
header("location: index.php");
?>