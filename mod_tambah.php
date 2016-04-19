<?php 

if (isset($_GET['tambah'])) {
	$path = "pages/tambah/".$_GET['tambah'].".php";
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