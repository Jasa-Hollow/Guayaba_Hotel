<?php
    session_start();
	include "../../controllers/redirrecionar.php";
	$redic = new Rd();
	$redic->Admin();
?>
<!DOCTYPE html>
<html lang="en">
	<?php include '../layouts/head.php'; ?>
<body>
	<?php 
		include './navbar/navbar.php';
		include '../layouts/banner.php';
	?>
    <script src="../../public/js/js_funciones.js"></script>
</body>
</html>