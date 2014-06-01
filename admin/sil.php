<?php 


	include("../includes/baglan.php");


	if (isset($_GET['sil'])){
		
		$sil_id = $_GET['sil'];	// id yi alıp $sil_id degiskenine atıyoruz			

		$sil = mysql_query("DELETE FROM icerikler WHERE id='$sil_id'");

			if ($sil) {	

				echo "<script> alert('İçerik silindi')  </script>";
				header("Refresh: 0; url=icerikler.php");
			}

	}






?>