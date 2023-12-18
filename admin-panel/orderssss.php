<?php include("includes/session.php"); ?>
<?php include '../database/database-helper.php'; ?>
<?php error_reporting(0); ?> 


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
					<h2 class="dashboard-title me-auto">Orders 
					<form action="front-orders.php" method="post" id="orderStatusForm">
						<select id="orderDropdown" class="default-select" aria-label="Default select example" name="orderStatus">
							<?php
								$status = 'placed';
								if(!$_POST['orderStatus'] || $_POST['orderStatus']=='placed'){
							?>
							<option selected value="placed">Pending</option>
							<option value="delivered">Delivered</option>
							<?php
								} else {
							?>
							<option selected value="delivered">Delivered</option>
							<option value="placed">Pending</option>
							<?php

								}
							?>	
						</select>
					</form>
					</h2>
					
					<div class="input-group search-area" style="position: relative;">
						<form action="" method="post">
						<input type="text" class="form-control" name="searchedItem" placeholder="Search here...">
						<button style="border:none; background:transparent; position: absolute; right:22px; top:8px" name="searchBtn"><i class="flaticon-381-search-2"></i></button>
						</form>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example5" class="display mb-4 defaultTable dataTablesCard table table-hover" style="min-width: 845px;">
								<thead>
									<tr>
										<th>ORDER NO.</th>
										<th>STATUS</th>
										<th>CUSTOMER NAME</th>
										<th>PRODUCT</th>
										<th>QUANTITY</th>
										<th>PRICE</th>
										<th class="text-end">ACTION</th>
									</tr>
								</thead>
                                <!-- loop starts -->
								<tbody>
									<tr>

										<td><strong>1</strong></td>
										<td>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-edit light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Pending</a>

                                        </td>
										<td>Ishwa</td>

										<td>Pasta</td>
										<td>4</td>
										<td>500</td>  
										<td>Edit</td>  
                                    </tr> 
                                    
                                </tbody> 
                                
                                <!-- loop ends -->
                            </table>    
                            <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            My name is ishwa
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
		
		<!-- modal box -->
		
		<!-- Button trigger modal -->
		

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-center">
			<div class="modal-content">
				<form action="handle-new-items.php" method="post" enctype="multipart/form-data">

					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Add New Items</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-6">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Items Name</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cheese Burger" name="itemName">
								</div>
								<div class="mb-3">
								<label for="exampleFormControlInput2" class="form-label">PRICE</label>
								<input type="number" class="form-control" id="exampleFormControlInput2" placeholder="Rs.1200" name="itemPrice">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="mb-3">
								<label for="exampleFormControlInput3" class="form-label">DESCRIPTION</label>
								<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="" name="itemDesc">
								</div>

								<label for="exampleFormControlInput4" class="form-label">CATEGORY</label>
								<select class="default-select" aria-label="Default select example" name="category">
								<option selected value="starter">Starter</option>
								<option value="seafood">Sea Food</option>
								<option value="desserts">Desserts</option>
								<option value="drinks">Drinks</option>
								</select>
							</div>
							<div class="col-xl-12">

								<div class="mb-4">
								<label for="exampleFormControlInput4" class="form-label">Image</label>
								<input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="exampleFormControlInput4" placeholder="" name="itemImg">
								</div>

							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		  </div>
		</div>

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
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	
	<!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	
	<script>
		const dropdown = document.getElementById("orderDropdown");

		dropdown.addEventListener("change", function() {
		
		document.getElementById("orderStatusForm").submit();
		});
	</script>
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