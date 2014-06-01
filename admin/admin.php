<?php 
	
	session_start();  // admin olmayanın girememesi için session işlemlerini yapıyoruz

	if (!isset($_SESSION['kadi'])) {
			
			header("Location: login.php");

	}else{	


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title> Admin </title>
	<link rel="stylesheet" type="text/css" href="admin_style.css"media="all" />
	<style>

		body{ margin: 0px ;padding: 0px; }
	

	</style>
</head>
<body>
	

	<div id="header">
	<a href="admin.php">
	 <h1> <a href="admin.php">  Admin Panel </a> </h1>  
	</a>
	</div>
	<div id="sidebar">
		<h2 class="hg"> <?php  echo "Hoşgeldin ".$_SESSION['kadi'];  ?> </h2>
		<h2><a href="logout.php"> Çıkış yap </a></h2>
		<h2><a href="icerikler.php"> İçerikler</a></h2>
		<h2><a href="icerik_ekle.php?ekle=ekle"> İçerik Ekle</a></h2>
		<h2><a href="">  Yorumlar </a></h2>


	</div>

		

	<div id="welcome">
		
	<h2>  Admin Panele Hoşgeldiniz </h2>

		


	</div>
	<?php  

		if (isset($_GET['ekle'])) {
			
			include "icerik_ekle.php";

		}


   ?>









</body>
</html>


<?php  }  ?>