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
			<div class="container-fluid">
			
				
				<div class="form-head dashboard-head d-md-flex d-block mb-5 align-items-start">
					<h2 class="dashboard-title me-auto">Reviews<span class="font-w300 ms-4">4.2<i class="fa fa-star fs-24 mx-1 text-warning"></i></span></h2>
					<div class="input-group search-area">
						<input type="text" class="form-control" placeholder="Search here...">
						<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example5" class="display mb-4 defaultTable dataTablesCard" style="min-width: 845px;">
								<thead>
									<tr>
										<th>RATINGS</th>
										<th>NAME</th>
										<th>REVIEW</th>
										<th>REVIEWED ON</th>
										<th class="text-end">ORDER</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Tommy Hank</strong></td>
										<td>food taste is awesome we want <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Emilia Johnson</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Mark Steven</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Cindy Stark</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Wanda Hummels</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>David Lee</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>Franklin Mc. Good</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
									<tr>
										<td>4.0 <i class="fa fa-star fs-18 mx-1 text-warning"></i></td>
										<td><strong>James Rodriguez</strong></td>
										<td>food taste is awesome we want  <a href="javascript:void(0);" class="text-primary">Read all</a></td>
										<td>12 June 2020 12:30 pm</td>
										<td class="text-end"><a href="javascript:void(0);" class="text-primary font-w500">View order</a></td>											
									</tr>
								</tbody>
							</table>
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
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>

	<script>
	(function($) {
	 
		var table = $('#example5').DataTable({
			searching: false,
			paging:true,
			select: false,
			//info: false,         
			lengthChange:false 
			
		});
		$('#example tbody').on('click', 'tr', function () {
			var data = table.row( this ).data();
			
		});
	   
	})(jQuery);
	</script>
	
</body>

</html>