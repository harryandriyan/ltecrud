<?php 

require "config/main.php";
$type = trim($_POST['type']);
$cmd = trim($_POST['cmd']);

switch ($type) {
	case 'data_user':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO user1(nama,alamat,telp,kontak)
			VALUES('$_POST[nama]',
					'$_POST[alamat]',
					'$_POST[telepon]',
					'$_POST[kontak]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE user1 SET nama='$_POST[nama]',
				alamat='$_POST[alamat]',
				telp='$_POST[telepon]',
				kontak='$_POST[kontak]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_user');
		break;
	case 'data_pembelian':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO user(nama,alamat,telp,kontak,type,sn,tgl)
			VALUES('$_POST[nama]',
					'$_POST[alamat]',
					'$_POST[telepon]',
					'$_POST[kontak]',
					'$_POST[type_alat]',
					'$_POST[sn]',
					'$_POST[tgl_beli]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE user SET nama='$_POST[nama] ',
				alamat='$_POST[alamat]',
				telp='$_POST[telepon]',
				kontak='$_POST[kontak]',
				type='$_POST[type_alat]',
				sn='$_POST[sn]',
				tgl='$_POST[tgl_beli]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_pembelian');
		break;
	case 'data_teknisi':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO teknisi1(nama)
			VALUES('$_POST[nama]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE teknisi1 SET nama='$_POST[nama]'
			WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_teknisi');
		break;
	case 'spk':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO teknisi(nama,pelanggan,alamat,kontak,telp,tgl,jam,ket)
			VALUES('$_POST[nama]',
			'$_POST[pelanggan]',
			'$_POST[alamat]',
			'$_POST[kontak]',
			'$_POST[telepon]',
			'$_POST[tanggal]',
			'$_POST[jam]',
			'$_POST[ket]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE teknisi SET nama='$_POST[nama]',
				pelanggan='$_POST[pelanggan]',
				alamat='$_POST[alamat]',
				kontak='$_POST[kontak]',
				telp='$_POST[telepon]',
				tgl='$_POST[tanggal]',
				jam='$_POST[jam]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=spk');
		break;
	case 'admin':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO admin(nama,username,password)
			VALUES('$_POST[nama]',
			'$_POST[username]',
			'$_POST[password]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE admin SET nama='$_POST[nama]',
				username='$_POST[username]',
				password='$_POST[password]'
				WHERE id=".$_POST[id]);
			
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=admin');
		break;
	
	default:
		require_once("pages/404.php");
		break;
}

 ?>