<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$password = "123"; //  standarnya kosong
$database = "dbcrud"; // buat nama database harus sama 

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>