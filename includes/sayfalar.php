<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title> Mark Zuckerberg Fan Sitesi </title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	</head>

	<body>
	
		<div> <?php include("includes/header.php"); ?></div>
		<div> <?php include("includes/menu.php"); ?></div>

		<div id="icerik">

			<?php

			@include "baglan.php";
	
			if (isset($_GET['id'])) {

				$sayfa_id = $_GET['id'];

				// icerikler tablosunda ki verileri id si $sayfa_id ye eşit olanı gösteriyor
				$run = mysql_query("SELECT * FROM icerikler WHERE id = $sayfa_id");

				/*
				 * verileri while içindeki diziye döndürüp mysql tablosundaki alan adlarına göre dizi indisi alan,
				 * $row degiskenini tablo alan adlarına uygun degiskenlere atıyoruz
				 */

				while ($row = mysql_fetch_array($run)) {

					$id 	= $row['id'];
					$baslik = $row['baslik'];
					$Tarih  = $row['tarih'];
					$yazar  = $row['yazar'];
					$image  = $row['image'];
					//	$keyword = $row['keyword'];
					$icerik = $row['icerik'];
					// substr fonksiyonunu kaldırıyoruz bütün iceriği göstermek için

					?>

					<!-- while içinde dizi indis adlarına atadığımız degişlenleri yazdırıyoruz -->
					<h2>
						<a href="sayfalar.php?id=<?php  echo $id; ?>">
							<?php echo $baslik; ?>
						</a>
					</h2>

					<p align="left"> Tarih: <b> <?php echo $tarih;  ?></b></p>
					<p align="right"><b><?php echo $yazar; ?></b></p>
					<p align="justfy"> <?php echo $icerik; ?> </p>

					<!-- devamını oku kısmı -->
					<p align="right"><a href="sayfalar.php?id=<?php echo $id; ?>"> Devamını Oku </a> </p>

					<center> <img src="images/<?php echo $image; ?>" alt="" width="500" height="400"> </center>

				<?php

				}
			}

			?>

		</div>

		<div><?php include("includes/sidebar.php"); ?></div>

		<div id="footer"> Footer </div>

	</body>

</html>