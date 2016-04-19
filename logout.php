<?php
session_start();
session_destroy();
echo "<script>alert('Anda Telah Keluar Dari Login Sebagai Admin'); window.location = 'index.php'</script>";
?>