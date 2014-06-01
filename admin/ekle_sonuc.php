<?php

	 include"../includes/baglan.php";
	
	if (isset($_POST['submit'])) {
		
			date_default_timezone_set( 'Europe/Istanbul' );  // saati ayarladık

		//mysql_real_escape_string(unescaped_string)
		$baslik = mysql_real_escape_string(strip_tags(trim($_POST['baslik'])));
		$tarih = date("d.m.y H:i:s");
		$yazar =  mysql_real_escape_string(strip_tags(trim($_POST['yazar'])));
		$image= $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];

	    $keyword =  mysql_real_escape_string(strip_tags(trim($_POST['keyword'])));
		$icerik =  mysql_real_escape_string(strip_tags(trim($_POST['icerik'])));
	// bunları fonksiyon ile yapıcaz
		
		if ($baslik =="" or $yazar =="" or $icerik =="" or $image =="" ) {
				
				echo "Lütfen Boş Alan Bırakmayın";
				header("Refresh:2; icerik_ekle.php");

				exit();

		}else{

			move_uploaded_file($image_tmp, "../images/$image");

			$ekle = mysql_query("INSERT INTO icerikler (baslik, tarih, yazar, image, keyword, icerik) VALUES ('$baslik', '$tarih', 
				'$yazar', '$image', '$keyword', '$icerik')");		

			if ($ekle) {
					
					echo "<center> <h2>   Başarıyla eklendi </h2>  </center>";
					include"icerik_ekle.php";
					header("Refresh: 3; icerikler.php");

			}else{

				echo "<center> kayıt ekleme hatası </center><br>".mysql_error();
				header("Refresh: 5; icerik_ekle.php");

			}



		}



	}




?>