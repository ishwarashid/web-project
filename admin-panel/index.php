
<?php include '../database/database-helper.php'; ?>
<?php
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);
	$starters=0;
	$seafood=0;
	$desserts=0;
	$drinks=0;


	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		if($row['category']=='starter'){
			$starters++;
		} else if($row['category']=='seafood'){
			$seafood++;
		} else if($row['category']=='desserts'){
			$desserts++;
		} else {
			$drinks++;
		}
	}
	} else {
	echo "0 results";
	}

?>

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
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<input class="hid1" type="hidden" value="<?php echo $starters; ?>">
	<input class="hid2" type="hidden" value="<?php echo $seafood; ?>">
	<input class="hid3" type="hidden" value="<?php echo $desserts; ?>">
	<input class="hid4" type="hidden" value="<?php echo $drinks; ?>">

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
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h2 class="main-title mb-1">Earnings</h2>
								</div>
								<div class="card-action card-tabs mt-3 mt-sm-0">
									
									 <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab">
                                                Monthly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#user" role="tab">
                                               Weekly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#user" role="tab">
                                               Today
                                            </a>
                                        </li>
                                    </ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
						$totalMenus = "SELECT COUNT(*) AS totalMenus FROM products";
						$rstRow1 = mysqli_query($conn, $totalMenus);
						$objRow1 = mysqli_fetch_object($rstRow1);

						$totalOrders = "SELECT COUNT(*) AS totalOrders FROM orders WHERE status='placed'";
						$rstRow2 = mysqli_query($conn, $totalOrders);
						$objRow2 = mysqli_fetch_object($rstRow2);

						$totalItems = "SELECT COUNT(*) AS totalItems FROM orders WHERE status='placed'";
						$rstRow3 = mysqli_query($conn, $totalItems);
						$objRow3 = mysqli_fetch_object($rstRow3);

						$sql = "SELECT * FROM orders WHERE status='placed'";
						$result = mysqli_query($conn, $sql);
						$totalItems = 0;
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$totalItems = $totalItems + $row['quantity'];
								
							}
						}

            		?>

					<div class="col-xl-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="images/food-icon/1.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2" style="color: #292929"><span class="counter ms-0"><?php echo ($objRow1->totalMenus);?></span></h3>
												<p class="mb-0">Total Menus</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="images/food-icon/2.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2" style="color: #292929"><span class="counter ms-0">400</span></h3>
												<p class="mb-0">Revenue</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="images/food-icon/3.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2" style="color: #292929"><span class="counter ms-0"><?php echo $totalItems;?></span></h3>
												<p class="mb-0">Items Sold</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="images/food-icon/4.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2" style="color: #292929"><span class="counter ms-0"><?php echo ($objRow2->totalOrders);?></span></h3>
												<p class="mb-0">Total Orders</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="chart" class="d-inline-block donut-chart-d"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 d-sm-flex d-block">
										<div>
											<h2 class="main-title mb-1" style="color: #292929">Orders from</h2>
										</div>
									</div>
									<div class="card-body">
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="images/food-icon/8.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Dine-in</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 92%;"></div>
												</div>
												<span class="text-end percentage">602 <span>(92%)</span></span>
											</div>
										</div>
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="images/food-icon/9.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Takeaway</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 8%;"></div>
												</div>
												<span class="text-end percentage">52 <span>(8%)</span></span>
											</div>
										</div>
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="images/food-icon/10.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Online</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 5%;"></div>
												</div>
												<span class="text-end percentage">3.1k <span>(5%)</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 d-sm-flex d-block">
										<div>
											<h2 class="main-title mb-1" style="color: #292929">Top Selling items</h2>
										</div>
									</div>
									
									<div class="card-body pt-3">
										<?php
											$sql = "SELECT * FROM products LIMIT 5";
											$result = mysqli_query($conn, $sql);
											
											if (mysqli_num_rows($result) > 0) {
											// output data of each row
												while($row = mysqli_fetch_assoc($result)) {

										?>
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="<?php echo $row["image"] ?>" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-2 mb-2 sub-title"><?php echo $row["product_name"] ?></h3>
												
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">Rs. <?php echo $row["product_price"] ?></h3>
												<!-- <div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div> -->
											</div>
										</div>
										<?php
												}
											}
										?>
										<!-- <div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic4.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">Cheese Momos</h3>
												<span class="font-w500 mb-3">116 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div> -->
										<!-- <div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic3.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">French fries</h3>
												<span class="font-w500 mb-3">200 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div> -->
										<!-- <div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic2.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-3 sub-title">Cheese Sandwich</h3>
												<span class="font-w500 mb-3">50 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div> -->
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
	
	<!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>	
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	
</body>

</html>