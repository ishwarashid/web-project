
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>

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

// $data = array(
//     'starters' => $starters,
//     'seafood' => $seafood,
//     'desserts' => $desserts,
//     'drinks' => $drinks
// );

// echo json_encode($data);
?>

<h1 id="h1">Hello</h1>

<script>
  alert(<?php echo $seafood ?>);
</script>
    
</body>
</html>