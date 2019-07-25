<?php 
session_start();

// $_SESSION['name']='atit adfadsfasdf';
$name=isset($_SESSION['name']) ? $_SESSION['name']:'Guest';
$email=isset($_SESSION['email']) ? $_SESSION['email']:'Not subscribed';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Php sessions</title>
</head>
<body>
<h5>Than you <?php echo $name; ?>,You  have subscribed with the email <?php echo $email; ?></h5>
<a href="page3.php">Go to page 3.</a>
</body>
</html>