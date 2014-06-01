<?php 

	session_start();   // sessiom başlatıyoruz sonlandırmak içih

	session_destroy(); // başlattığımız session ı bitiriyoruz

	header("Location: login.php"); // ve login.php ye yönlediriyoruz


?>