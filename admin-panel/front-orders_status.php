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
			<div class="container-fluid bg-gray">
				<div class="row order-row" id="masonry">
					<div class="card-container">
						<div class="card shadow-sm">
							<div class="card-header bg-danger text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>2</span>Vanila Ice Cream</del></li>
									<li><span>1</span>Egg Faritta</li>
									<li><del><span>1</span>Rosted Chicken<small class="d-block">Extra Cheese</small></del></li>
									<li><del><span>1</span>Farm Ville Pizz<small class="d-block">Extra Cheese</small></del></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header  bg-danger text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>2</span>Vanila Ice Cream</del></li>
									<li><span>1</span>Egg Faritta</li>
									<li><del><span>1</span>Rosted Chicken<small class="d-block">Extra Cheese</small></del></li>
									<li><del><span>1</span>Farm Ville Pizz<small class="d-block">Extra Cheese</small></del></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>2</span>Vanila Ice Cream</del></li>
									<li><span>1</span>Egg Faritta</li>
									<li><del><span>1</span>Rosted Chicken<small class="d-block">Extra Cheese</small></del></li>
									<li><del><span>1</span>Farm Ville Pizz<small class="d-block">Extra Cheese</small></del></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-success text-white">
								<div>
									<h4 class="text-white">Delivery</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-warning text-white">
								<div>
									<h4 class="text-white">Take Away</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-danger text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header  bg-danger text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
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
	<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>

	
</body>

</html>