<?php
    include("includes/DatabaseHelper.php");
    include("includes/variables.php");
    //include("include/session.php");
?>
<!--
************************************************************************************************
                        Facile Solutions UK (www.facilesol.co.uk)
                        Development Date   : 28-07-2022
                        Page Updated On    : 01-12-2023
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo(constant("CompanyName")); ?> - Admins List</title>
    <?php include("includes/favicon.php"); ?>
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <style>
        .container-element{
            width: 85%;
            display:flex;
            justify-content: flex-end;
        }
        /* .content-left{
            

        } */
    </style>
</head>
<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <?php include("includes/header.php") ?>    
            <!-- Header END -->
            <!-- Side Nav START -->
            <?php include("includes/sidebar.php") ?>    
            <!-- Side Nav END -->
            <!-- Content START -->
            <div class="content">
                <div class="main">
                    <div class="page-header">
                        <h4 class="page-title">Admin List</h4>
                        <div class="breadcrumb">
                           <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
                           <div class="breadcrumb-item"><a href="index.php"> Home </a></div>
                        </div>
                        <div class="container-element">
                            <a href="index.php"><button class="btn btn-primary text-white">Add an Admin</button></a>
                           </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                                <table id="data-table" class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email Address</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $Query = "SELECT * FROM admins";
                                        // echo $Query; die;
                                        $Result = mysqli_query($conn,$Query);
                                        if ($Result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($Result))
                                            {
                                    ?> 
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['firstname']; ?></td>
                                            <td><?php echo $row['lastname']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td>
                                                <?php 
                                                    $Status = $row['status']; 
                                                    if($Status == 1){
                                                        echo '<b class="text-success">Active</b>';
                                                    } else {
                                                        echo '<b class="text-danger">Pending</b>';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="admin-edit.php?id=<?php echo $row['id'];?>"><button class="btn btn-success">Edit</button></a>
                                                <a href="admin-delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete"><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                        <?php
											}
										}
										else
										{
											echo "No Result Found";
										}
									?>	
                                    </tbody>
                                </table>
                            </div>
                <!-- Footer START -->
                <?php include("includes/footer.php");?>
                <!-- Footer End -->
            </div>
            <!-- Content END -->
        </div>
    </div>
<script src="assets/js/vendors.min.js"></script>
<script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $('.data-table').DataTable({
        'columnDefs': [
            { 'orderable': false, 'targets': 0 }
        ]
    });
</script>
<script src="assets/js/app.min.js"></script>
</body>
</html>