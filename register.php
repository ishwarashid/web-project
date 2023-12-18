<?php 
    session_start();
    if(isset($_SESSION['SESSION_ID'])){
        header('location: index.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
	<meta name="description" content="Discover Davur - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Davur provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:title" content="Davur : Restaurant Admin Dashboard + FrontEnd">
	<meta property="og:description" content="Discover Davur - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Davur provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>Culinary Cove Register</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="admin-panel/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="https://davur.dexignzone.com/xhtml/page-error-404.html"><img src="https://davur.dexignzone.com/xhtml/page-error-404.html" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4" style="color:#292929; font-weight: bold;">Sign up your account</h4>
                                    <form action="handle-register.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="John Doe" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="******" name="password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="signup" class="btn btn-primary btn-block" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a style="color:#292929; font-weight: bold;" href="login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="admin-panel/vendor/global/global.min.js"></script>
<script src="admin-panel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="admin-panel/js/custom.min.js"></script>
<script src="admin-panel/js/deznav-init.js"></script>

</body>

</html>