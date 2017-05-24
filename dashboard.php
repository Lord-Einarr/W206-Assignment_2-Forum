
<?php
	require 'partials/header.php';
	require 'partials/navigation.php';

	if (isset($_SESSION['username'])) {
    	require 'views/dashboard.view.php';
	}
	
	else{
    	require 'views/index.view.php';
	}
 
 ?>
