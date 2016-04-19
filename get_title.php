<?php 

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'data_pembelian':
			$title = "Data Pembelian";
			break;
		case 'data_teknisi':
			$title = "Data Teknisi";
			break;
		case 'data_user':
			$title = "Data User";
			break;
		case 'spk':
			$title = "Data SPK";
			break;
		
		default:
			$title = "Halaman Tidak Ditemukan";
			break;
	}
	echo $title;
}
else {
	echo "Halaman Utama";
}

 ?>