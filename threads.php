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
<h1>THREADS</h1>
<?php
	$cid = $_GET['cid'];
	$sid = $_GET['sid'];
	$sql = "SELECT * FROM threads WHERE cat_id='".$cid."' AND subcat_id=".$sid."";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			$tid = $row['thread_id'];
			$sid = $row ['subcat_id'];
			$cid = $row['cat_id'];
			$ctitle = $row['cat_title'];
			$cdesc = $row['cat_desc'];
			$stitle = $row ['subcat_title'];
			$sdesc = $row ['subcat_desc'];
			$ttitle = $row['thread_title'];
			$tdesc = $row['thread_desc'];
			
			echo "<ul><li><a href='view_thread.php?cid=".$cid."&sid=".$sid."&tid=".$tid."' class='cat_link'>".$ttitle." - ".$tdesc."</a></li></ul>
			";
		}
	}
	else{
		echo "There are no threads avaliable in this subcategory yet";
	}
	// replies
?>
</div>
