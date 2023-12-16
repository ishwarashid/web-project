<?php include("includes/session.php"); ?>
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

</head>
<body>

	<input class="hid1" type="hidden" value="<?php echo $starters ?>;">
	<input class="hid2" type="hidden" value="<?php echo $seafood ?>;">
	<input class="hid3" type="hidden" value="<?php echo $desserts ?>;">
	<input class="hid4" type="hidden" value="<?php echo $drinks ?>;">


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
					<div class="col-xl-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="images/food-icon/1.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">128</span></h3>
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
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">400</span></h3>
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
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">678</span></h3>
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
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">128</span></h3>
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
											<h2 class="main-title text-black mb-1">Orders from</h2>
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
											<h2 class="main-title text-black mb-1">Top Selling items</h2>
										</div>
									</div>
									<div class="card-body pt-3">
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic5.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">Italiano pizza</h3>
												<span class="font-w500 mb-3">124 times</span>
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
										</div>
										<div class="media  mb-3 pb-3 items-list-2 align-items-center">
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
										</div>
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
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
										</div>
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
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
	<!-- <script src="js/dashboard/dashboard.js"></script> -->
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>

	<!-- <script>
	(function($) {
		/* "use strict" */


	var dzChartlist = function(){
		
		var screenWidth = $(window).width();
			
		
		var activityBar = function(){
			var activity = document.getElementById("activity");
			if (activity !== null) {
				var activityData = [{
						first: [35, 18, 15, 35, 40, 20, 30, 25, 22, 20]
					},
					{
						first: [50, 35, 10, 45, 40, 50, 60, 35, 10, 50]
					},
					{
						first: [20, 35, 60, 45, 40, 35, 30, 35, 10, 40]
					},
					{
						first: [25, 88, 25, 50, 21, 42, 60, 33, 50, 60]
					}
				];
				activity.height = 260;
				
				var config = {
					type: "bar",
					data: {
						labels: [
							"01",
							"02",
							"03",
							"04",
							"05",
							"06",
							"07",
							"08",
							"09",
							"10"
						],
						datasets: [
							{
								label: "My First dataset",
								data:  [35, 18, 15, 35, 40, 20, 30, 25, 22, 20, 45, 35, 35, 18, 15, 35, 40, 20, 30, 25, 22, 20, 45, 35, 30, 25, 22, 20, 45, 35],
								borderColor: 'rgba(47, 76, 221, 1)',
								borderWidth: "0",
								barThickness:'flex',
								backgroundColor: '#ff6d4d',
								minBarLength:10
							}
						]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						
						plugins:{
							legend:false,
							tooltip: {
								mode: "index",
								intersect: false,
								titleColor: "#888",
								bodyColor: "#555",
								titleFontSize: 12,
								bodyFontSize: 15,
								backgroundColor: "rgba(255,255,255,1)",
								displayColors: true,
								xPadding: 10,
								yPadding: 7,
								borderColor: "rgba(220, 220, 220, 1)",
								borderWidth: 1,
								caretSize: 6,
								caretPadding: 10
							}
							
						},
						
						
						scales: {
							y:{
								grid: {
									color: "rgba(233,236,255,1)",
									drawBorder: true
								},
								ticks: {
									fontColor: "#3e4954",
									max: 60,
					min: 0,
					stepSize: 20
								},
							},
							x:{
								barPercentage: 0.7,
								
								grid: {
									display: true,
									zeroLineColor: "transparent"
								},
								ticks: {
									stepSize: 20,
									fontColor: "#3e4954",
									fontFamily: "Nunito, sans-serif"
								}
							}
						},
						
					}
				};

				var ctx = document.getElementById("activity").getContext("2d");
				var myLine = new Chart(ctx, config);

				var items = document.querySelectorAll("#user-activity .nav-tabs .nav-item");
				items.forEach(function(item, index) {
					item.addEventListener("click", function() {
						config.data.datasets[0].data = activityData[index].first;
						myLine.update();
					});
				});
			}
		}

		var donutChart = function(){
			var options = {
				series: [<?php echo $starters ?>, <?php echo $seafood ?>, <?php echo $desserts ?>, <?php echo $drinks ?>],
				//colors:['#ff5c5a', '#2bc156', '#404a56'],
				chart: {
					height: 330,
					width:560,
					type: 'donut',
					sparkline: {
						enabled: true,
					},
					
				},
				labels: ["Starters ", "Sea Food ","Desserts ", "Drinks "],
				plotOptions: {
					pie: {
						customScale: 1,
						donut: {
							size: '50%'
							
						}
					}
				},
				legend: {
					show:true,
					fontSize: '18px',
					position: 'right',
					offsetY: 0,
					//height: 270,
					itemMargin: {
						vertical: 5,
						horizontal: 5,
					},
					markers: {
						width: 16,
						height: 16,
						strokeWidth: 0,
						radius: 0,
					},
				},
				dataLabels: {
					enabled: false
				},
				responsive: [{
					breakpoint: 1300,
					options: {
						chart: {
							height: 230,
							width:400
						},
						legend: {
							fontSize: '14px',
							itemMargin: {
							vertical: 0,
							horizontal: 5,
						},
						}
					}
				},
				{
					breakpoint: 575,
					options: {
						chart: {
							height: 230,
							width:300
						},
						legend: {
							show:false,
							fontSize: '14px',
							itemMargin: {
							vertical: 0,
							horizontal: 5,
						},
						}
					}
				}],
			};
			var chart = new ApexCharts(document.querySelector("#chart"), options);
			chart.render();
		}
		
		
		
		var counterBar = function(){
			$(".counter").counterUp({
				delay: 1,
				time: 100
			});
		}
		
		
		/* Function ============ */
			return {
				init:function(){
				},
				
				
				load:function(){
					activityBar();		
					donutChart();	
					counterBar();
				},
				
				resize:function(){
					
				}
			}
		
		}();

		jQuery(document).ready(function(){
		});
			
		jQuery(window).on('load',function(){
			setTimeout(function(){
				dzChartlist.load();
			}, 1000); 
			
		});

		jQuery(window).on('resize',function(){
			
			
		});     

	})(jQuery);

	</script> -->

	
	
</body>

</html>