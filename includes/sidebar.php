<div id="sidebar">

	<div id="arama">

		<form action="arama.php" method="get" enctype="multipart/form-data">

			<input type="text" name="value" placeholder="Sitede Ara" size="25">
			<input type="submit" name="ara" value="Ara">

		</form>

	</div>

	<div id="social">

		<h3>Bizi Takip Edin</h3>

		<a href="https://www.facebook.com/bahadir.kirlibal?fref=ts" target="_blank"><img src="images/facebook.png"
																						 alt=""> </a>
		<a href="https://twitter.com/" target="_blank"> <img src="images/twitter.png" alt=""> </a>
		<a href="https://tr.pinterest.com/" target="_blank"><img src="images/pin.jpg" alt=""> </a>
		<a href="https://plus.google.com/" target="_blank"> <img src="images/googleplus.jpg" alt=""></a>


	</div>

	<div>

		<center><h2> Son Eklenenler </h2></center>

		<?php

		include "includes/baglan.php";

		// icerikler sayfasına son eklenen 5  veriyi listeliyoruz
		$query = mysql_query("SELECT * FROM icerikler ORDER BY id DESC LIMIT 0, 5");

		while ($row = mysql_fetch_array($query)) {

			// $row dizisindeki tablo alanlarını aynı isimli degiskenlere atıyoruz
			$id = $row['id'];
			$baslik = $row['baslik'];
			$resim = $row['image'];

			?>

			<center>

				<a href="sayfalar.php?id=<?php echo $id; ?>">
					<h4> <?php echo $baslik; ?></h4>
				</a>

			</center>

			<center>
				<a href="sayfalar.php?id=<?php echo $id; ?>">
					<img src="images/<?php echo $resim; ?>" width="140" height="140" alt="">
				</a>
			</center>

			<!-- while dongusunu kapatıyoruz -->

		<?php } ?>

	</div>

</div>