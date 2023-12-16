<?php include("includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">


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
	<title>Culinary Cove Admin Dashboard</title>
    <!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.ico">
	<!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
	
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
	
	
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/sidebar.php'; ?>

		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-wrapper">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<h2 class="text-black main-title mb-sm-4 mb-0 pb-2">Settings</h2>
								<form class="mb-5">
									<div class="d-flex align-items-center">
										<div class="avatar-upload">
											<div class="avatar-edit">
												<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg">
												<label for="imageUpload"></label>
											</div>
											<div class="avatar-preview">
												<div id="imagePreview" style="background-image: url('images/avatar/1.jpg');">
												</div>
											</div>
										</div>
										<span class="fs-13 ms-sm-5 ms-3">Logo Should have in <br>1:1 ratio for better viewing<br> experience.</span>
									</div>
									
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Restaurant Name</label>
										<input type="text" class="form-control solid" value="John doe">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Restaurant Phone Number</label>
										<input type="text" class="form-control solid" value="+1 133 458 2578">
									</div>
									<div class="form-group">
										<label class="font-w600">Restaurant Email Address</label>
										<input type="text" class="form-control solid" value="example@gmail.com">
									</div>
								</form>
								<hr>
								<h2 class="text-black main-title mb-4 pb-2 mt-4">Bank Details</h2>
								<form class="mb-5">
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Account Number</label>
										<input type="text" class="form-control solid" value="1234 5678 9120 1234">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Account Name</label>
										<input type="text" class="form-control solid" value="Bank of Usa">
									</div>
									<div class="form-group">
										<label class="font-w600">Bank Code</label>
										<input type="text" class="form-control solid" value="685959">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<h2 class="text-black main-title mb-4 pb-2">Restaurant Timings</h2>
										<form>
											<div class="row">
												<div class="col-xl-6">
													<div class="form-group">
														<label class="font-w600">Opening Time</label>
														<input class="form-control solid" type="time" id="opening-time" value="08:56">
													</div>
												</div>
												<div class="col-xl-6">
													<div class="form-group">
														<label class="font-w600">Closing Time</label>
														<input class="form-control solid" type="time" id="closing-time" value="10:56">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<h2 class="text-black main-title mb-4 pb-2">Restaurant Location</h2>
										<div class="map-box">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14448.885880295826!2d75.81852004999999!3d25.128202299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1626342496073!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<h2 class="text-black main-title mb-4 pb-2">Order Color Setting</h2>
										<form>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#2f4cdd">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#ff6d4d">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#f72b50">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
		<?php include 'includes/footer.php'; ?>

        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
	
	<!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>

</body>

</html>