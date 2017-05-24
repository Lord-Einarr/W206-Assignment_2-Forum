<?php
require 'partials/header.php';
require 'partials/navigation.php';


// if LOGGED IN
if(isset($_SESSION['username'])){
    // GO TO DASHBOARD
    header('location: dashboard.php');
}
?>
<h1>add php code and while loop for forum topics that guests can view</h1>
<?php 
 require 'views/index.view.php';
require 'partials/footer.php';
?>
