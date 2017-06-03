<?php
	require 'partials/header.php';
	require 'partials/navigation.php';
?>

<div class = "cat_create">
	<?php
		

		if (isset($_SESSION['username'])) {
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				$cat_title = $_POST['cat_title'];
				$cat_desc = $_POST['cat_desc'];
		
				if (empty($cat_title && $cat_desc)) {
    	        	header("Location: categories.php?error=empty");
        	    	exit();
        		}

				$sql = "INSERT INTO categories (cat_title, cat_desc)
    	            VALUES ('$cat_title', '$cat_desc')";
        	        $result = mysqli_query($conn, $sql);
					header("Location: categories.php");
			}
	
			echo"
				<form action='categories.php' method='POST'>
				<input type='text' name='cat_title' required /><br>
				<input type='text' name='cat_desc' required /><br>
				<input type='submit' name='submit' value='Create category'>	
			";
		}
		else {
			echo "<p>Pease <a href='login.php'>Log In</a> to create a category";
		}
	?>
</div>

<div class="container page-wrapper">

<?php
	$sql = "SELECT * FROM categories ORDER BY cat_title ASC";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$ctitle = ['cat_title'];
		while ($row = mysqli_fetch_assoc($result)) {
			
			$cid = $row['cat_id'];
			$ctitle = $row['cat_title'];
			$cdesc = $row['cat_desc'];
		
			require ('views/categories.view.php');
		}
	}
	else{
		echo "There are no categories avaliable yet";
	}
?>
</div>
