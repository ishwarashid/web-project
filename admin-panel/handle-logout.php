<?php

include("../database/database-helper.php");
include("includes/session.php");

unset($_SESSION["SESSION_ID"]);
unset($_SESSION["USERNAME"]);
header("location: page-login.php");
session_destroy();
?>