<?php include '../database/database-helper.php'; ?>


<?php

if(isset($_REQUEST['BtnSubmit'])){

		$pname = mysqli_real_escape_string($conn,$_POST['itemName']);
		$price = mysqli_real_escape_string($conn,$_POST['itemPrice']);
		$desc = mysqli_real_escape_string($conn,$_POST['itemDesc']);
		$category = mysqli_real_escape_string($conn,$_POST['category']);
		$img = $_POST['itemImg1'];
		$PID = mysqli_real_escape_string($conn,$_POST['pid']);

?>
<script>
	alert("<?php echo $img; ?>")
</script>
<?php


		// $sql = "SELECT * FROM products";
		// $result = mysqli_query($conn, $sql);

		// // if (mysqli_num_rows($result) > 0) {
		
		// $row = mysqli_fetch_assoc($result);

		if($img == ""){
			$UpdateQuery = "UPDATE products SET product_name = '$pname', product_price = '$price', description = '$desc', category = '$category' WHERE product_id = '$PID'";

		} else {
			$FileInfo = PATHINFO($_FILES["itemImg1"]["name"]);
			$NewFileName = $FileInfo['filename'] . "_" . time() . "." . $FileInfo['extension'];
			move_uploaded_file($_FILES["itemImg1"]["tmp_name"], "upload/" . $NewFileName);
			$ImagePath = "upload/" . $NewFileName; // upload/abc_000384743436346436.j
	
			$UpdateQuery = "UPDATE products SET product_name = '$pname', product_price = '$price', description = '$desc', category = '$category', image='$ImagePath' WHERE product_id = '$PID'";
		}

		$Result = mysqli_query($conn, $UpdateQuery);
		if ($Result) {
?>
    <script>
        alert("Successfully Updated");
        window.location.href= "front-food-items.php";

    </script>
<?php 
		} else {
?>
	<script>
        alert("failed");
        window.location.href= "front-food-items.php";

    </script>
<?php
        	
    	}
}
$conn->close();
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
					<h2 class="dashboard-title me-auto">Food Items <a href="javascript:void(0);" class="btn btn-success btn-rounded ms-4 text-white d-inline-block flex-grow-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Add New
					</a></h2>
					
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
							<table id="example5" class="display mb-4 defaultTable dataTablesCard" style="min-width: 845px;">
								<thead>
									<tr>
										<th>ITEM NAME</th>
										<th>CATEGORY</th>
										<th>PRICE</th>
										<th>DESCRIPTION</th>
										<th>Image</th>
										<th class="text-end">ACTION</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								if(isset($_REQUEST['searchBtn'])){
									$searchedItem = mysqli_real_escape_string($conn,$_POST['searchedItem']);
                                	$sql = "SELECT * FROM products WHERE product_name LIKE '%$searchedItem%';";

								} else {
                                	$sql = "SELECT * FROM products";
								}
                                	$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
                            
                            	?>
									<tr>
										<td><strong><?php echo $row['product_name'];?></strong></td>
										<td><?php echo $row['category'];?></td>
										<td>Rs. <?php echo $row['product_price'];?></td>
										<td><?php echo substr($row['description'], 0, 20);?> ...</td>
										<td>
											<img src="<?php echo $row['image'];?>" alt="" width="80px">
										</td>

										<td>
											<div class="action-buttons d-flex justify-content-end">
												
												<a href="javascript:void(0);" class="btn btn-primary btn-edit light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['product_id']?>">

													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="handle-delete-item.php?id=<?php echo $row['product_id'];?>" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>
										<div class="modal fade" id="exampleModal<?php echo $row['product_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-center">
												<div class="modal-content">				
													<form action="" method="post" enctype="multipart/form-data">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Item</h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-xl-6">
																	<div class="mb-3">
																	<label for="exampleFormControlInput1" class="form-label">Item Name</label>
																	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cheese Burger" name="itemName" value="<?php echo $row['product_name']; ?>">
																	</div>
																	<div class="mb-3">
																	<label for="exampleFormControlInput2" class="form-label">PRICE</label>
																	<input type="number" class="form-control" id="exampleFormControlInput2" placeholder="Rs.1200" name="itemPrice" value="<?php echo $row['product_price']; ?>">
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="mb-3">
																	<label for="exampleFormControlInput3" class="form-label">DESCRIPTION</label>
																	<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="" name="itemDesc" value="<?php echo $row['description']; ?>">
																	</div>

																	<label for="exampleFormControlInput4" class="form-label">CATEGORY</label>

																	<select class="default-select" aria-label="Default select example" name="category">
																	<option 
																		<?php if($row['category']=='starter'){echo 'selected';} ?> 
																		id="opt1" 
																		value="starter"
																	>
																	Starter</option>

																	<option 
																		<?php if($row['category']=='seafood'){echo 'selected';}?>
																		id="opt2" 
																		value="seafood"
																	>
																	Sea Food</option>

																	<option 
																		<?php if($row['category']=='desserts'){echo 'selected';}?>
																		id="opt3" 
																		value="desserts"
																	>
																	Desserts</option>

																	<option 
																		<?php if($row['category']=='drinks'){echo 'selected';}?>
																		id="opt4" 
																		value="drinks"
																	>
																	Drinks</option>
																	
																	</select>

																	
																	<input type="hidden" name="pid" value="<?php echo $row['product_id']; ?>">
																</div>
																<div class="col-xl-12">

																	<div class="mb-4">
																		<label for="exampleFormControlInput4" class="form-label">Image</label>
																		<input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="exampleFormControlInput4" placeholder="" name="itemImg1">
																	</div>

																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary" name="BtnSubmit">Save changes</button>
														</div>
													</form>
												</div>
											</div>
										</div>												
									</tr>
									<?php

                                    	}
                                			}
                            		?>


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
		
		<!-- modal box -->
		
		<!-- Button trigger modal -->
		

		<!-- Modals -->
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