<?php
	require 'partials/header.php';
	require 'partials/navigation.php';
?>
</div>

<div class="container page-wrapper">
<h1> subcategories </h1>
<?php 
	$cid = $_GET['cid'];
	if (isset($_SESSION['username'])) {
		echo"<a href='create_subcat.php?cid=".$cid."'>Click here to create a subcategory</a>";
	}
	else {
		echo "Please log in to create a subcategory";
	}




	$sql = "SELECT * FROM subcategories WHERE cat_id='".$cid."'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			$sid = $row ['subcat_id'];
			$cid = $row['cat_id'];
			$ctitle = $row['cat_title'];
			$cdesc = $row['cat_desc'];
			$stitle = $row ['subcat_title'];
			$sdesc = $row ['subcat_desc'];
			
			require ('views/subcat.view.php');
		}
	}
	else{
		echo "There are no subcategories avaliable in this category yet";
	}
?>
</div>
