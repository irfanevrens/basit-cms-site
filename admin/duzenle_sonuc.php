<?php
	
	 include"../includes/baglan.php";

	if (isset($_POST['duzenle'])) {
			
		date_default_timezone_set( 'Europe/Istanbul' ); 

			$id = @$_GET['id'];
			$baslik = mysql_real_escape_string(strip_tags(trim($_POST['baslik'])));
			$tarih = date("d.m.y H:i:s");
			$yazar = mysql_real_escape_string(strip_tags(trim($_POST['yazar'])));
			$keyword = mysql_real_escape_string(strip_tags(trim($_POST['keyword'])));
			$icerik =   mysql_real_escape_string(strip_tags(trim($_POST['icerik'])));
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			
		
		if ($baslik =="" or $yazar =="" or $keyword =="" or $image =="" or  $icerik =="") {
				
			echo "Lütfen boş alan bırakmayınız..";
			header("Refresh: 2; icerikler.php");

		}else{

			 move_uploaded_file($image_tmp,"../images/$image");

			 $query = mysql_query("UPDATE icerikler SET baslik='$baslik', tarih='$tarih', 
			 	yazar='$yazar',image='$image', keyword='$keyword', icerik='$icerik' WHERE id='$id'");

			 if ($query) {
			 		
			 		echo " Başarıyla Güncellendi ";
	
			 		header("Refresh: 2; icerikler.php");
			 }else{

			 		echo "duzenle hatası".mysql_error();
			 }

		}
		



			
}		

	
/*
		

		if ($baslik =="" or $yazar =="" or $keyword =="" or $image =="" or  $icerik =="") {
				
			echo "Lütfen boş alan bırakmayınız..";
			header("Refresh: 2; icerikler.php");

		}else{

			 move_uploaded_file($image_tmp,"../images/$image");

			 $query = mysql_query("UPDATE icerikler SET baslik='$baslik', tarih='$tarih', 
			 	yazar='$yazar',image='$image', keyword='$keyword', icerik='$icerik' WHERE id='$id'");

			 if ($query) {
			 		
			 		echo " Başarıyla Güncellendi ";
	
			 		header("Refresh: 2; icerikler.php");
			 }else{

			 		echo "duzenle hatası".mysql_error();
			 }

		}




*/	



?>
