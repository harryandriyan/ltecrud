<?php 

if (isset($_GET['edit'])) {
	$path = "pages/edit/".$_GET['edit'].".php";
	if (file_exists($path)) {
		require_once($path);
	}
	else {
		require_once("pages/404.php");
	}
}
else {
	require_once("pages/home.php");
}

 ?>