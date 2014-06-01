<div id="icerik">

	<?php

	include"baglan.php";


	$goster = mysql_query("SELECT * FROM icerikler ORDER BY RAND() LIMIT 0, 4");

	// icerikler tablosunda ki verileri rast gele sırala herhangi 4 iceriği

	/*
	 * verileri while içindeki diziye döndürüp mysql tablosundaki alan adlarına göre dizi indisi alan,
	 * $row degiskenini tablo alan adlarına uygun degiskenlere atıyoruz
	 */
	while ($row = mysql_fetch_array($goster)) {

		$id = $row['id'];
		$baslik = $row['baslik'];
		$tarih = $row['tarih'];
		$yazar = $row['yazar'];
		$image = $row['image'];
		//	$keyword = $row['keyword'];
		$icerik = substr($row['icerik'], 0, 200);

		?>

		<!-- while içinde dizi indis adlarına atadığımız degişlenleri yazdırıyoruz -->

		<h2>
			<a href="sayfalar.php?id=<?php  echo $id; ?>">

				<!-- sayfalar php ye get ile başlığın id nosunu yolluyoruz -->
				<?php echo $baslik; ?>
			</a>
		</h2>

		<p align="left"> Tarih: <b> <?php echo $tarih;  ?></b></p>
		<p align="right"><b><?php echo $yazar; ?></b></p>
		<p align="justfy"> <?php echo $icerik; ?> </p>

		<!-- devamını oku linkinde sayfalar php ye get ile başlığın id nosunu yolluyoruz -->
		<p align="right" ><a href="sayfalar.php?id=<?php echo $id; ?>" style="font-size: 18px; color: blue; font-weight: bold;"> Devamını Oku </a></p>
		<!-- devamını oku kısmı -->

		<center> <img src="images/<?php echo $image; ?>" alt="" width="500" height="400"> </center>

	<?php } ?>

</div>