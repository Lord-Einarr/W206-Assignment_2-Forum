<?php
    session_start();
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= (!empty($page['title'])) ? $page['title'] : 'Default Page' ?></title>

    	<!-- Styles -->
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    	<link href="css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/custom.css">        
        
	</head>
    
	   <body class="page-body">