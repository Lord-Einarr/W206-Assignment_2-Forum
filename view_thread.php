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
<h1>view THREAD</h1>
<?php
	$cid = $_GET['cid'];
	$sid = $_GET['sid'];
	$tid = $_GET['tid'];
	$sql = "SELECT * FROM threads WHERE cat_id='".$cid."' AND subcat_id='".$sid."' AND thread_id='".$tid."' LIMIT 1";
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
			$tdate = $row['thread_date_posted'];
			$tauthor = $row['thread_author'];
			$tcontent = $row['thread_content'];
			
			echo "<table><tr><td>".$ttitle." - ".$tdesc."</td><td>Posted on - ".$tdate."</td></tr>
			<tr><td>".$tcontent."</td></tr>
			<tr>".$tauthor."</tr>
			</talbe>
			";
		}
	}
	else{
		echo "you are trying to view a thread that does not exsist yet";
	}
?>


INSERT REPLY FORM HERE






<h4>Replies</h4>
<?php
	$cid = $_GET['cid'];
	$sid = $_GET['sid'];
	$tid = $_GET['tid'];
	$sql = "SELECT * FROM replies WHERE cat_id='".$cid."' AND subcat_id='".$sid."' AND thread_id='".$tid."' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			$tid = $row['thread_id'];
			$sid = $row ['subcat_id'];
			$cid = $row['cat_id'];
			$rauthor = $row['reply_author'];
			$rdate = $row['reply_date_posted'];
			$rcontent = $row['reply_content'];
			
			
			echo "<table><tr><td>".$rauthor." - ".$rdate."</td></tr>
			<tr><td>".$rcontent."</td></tr></talbe>
			";
		}
	} else {
		echo "there are no replies to this thread yet";
	}
?>
</div>
