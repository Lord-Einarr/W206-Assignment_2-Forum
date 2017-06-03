 <?php
 	include 'partials/header.php';
 	include 'partials/navigation.php';
 	
 	if ($_SERVER['REQUEST_METHOD']=='POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		$hash_pwd = $row['password'];
		$hash = password_verify($password, $hash_pwd);

		if ($hash == 0) {
			header("Location: login.php?error=pass");
            exit();
		} 
		else {
     	
        	$sql = "SELECT * FROM users WHERE email='$email' AND password='$hash_pwd'";
			$results = mysqli_query($conn, $sql);

			if (!$row = mysqli_fetch_assoc($results)) {
				echo "Invalid Login details!";
			} else {
				$_SESSION['username'] = $row['username'];
			}
		
			header("Location: index.php");
		}
	}

	include 'views/login.view.php';
	include 'partials/footer.php';
 ?>




	