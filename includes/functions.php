<?php
	


function dispcategories() {
		include ('config.php');
		$select = mysqli_query($conn, "SELECT * FROM categories");
		
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<table class='category-table'>";
			echo "<tr><td class='main-category' colspan='2'>".$row['cat_title']."</td></tr>";
			dispsubcategories($row['cat_id']);
			echo "</table>";
		}
	}









// ADD MESSAGE FUNCTION
function addMessage($message) {
  $_SESSION['message'] = $message;
}

// REDIRECT FUNCTION
function redirect($url)
{
    header('Location: ' . $url);
    die();
}


// SHOW MESSAGE FUNCTION
function showMessage() {
    $message = '';
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    return $message;
}



























