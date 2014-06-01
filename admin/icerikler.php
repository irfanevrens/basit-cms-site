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
		th{ color: white; font-family: calibri;}


	</style>
</head>
<body>
	

	<div id="header">
	<a href="admin.php">
	 <h1> Admin Panel </h1>  
	</a>
	</div>
	<div id="sidebar">
		<h2 class="hg"> <?php  echo "Hoşgeldin ".$_SESSION['kadi'];  ?> </h2>
		<h2><a href="logout.php"> Çıkış yap </a></h2>
		<h2><a href="icerik_ekle.php"> İçerik Ekle</a></h2>
		<h2><a href="">  Yorumlar </a></h2>


	</div>

	
	</div>
		
	<table class="tablo" width="750" border="1" align="center" bgcolor="PowderBlue">
			
			<tr>
				<td colspan="10" align="center" bgcolor="PowderBlue"> <h2 style="color :#3B5998; font-family: calibri;"> İçerikleri Yönet </h2></td>
			</tr>
			<tr bgcolor="#3B5998">
				<th> id </th>
				<th> Tarih </th>
				<th> Yazar </th>
				<th> Baslik </th>
				<th> İmage </th>
				<th> İçerik </th>
				<th> Düzenle </th>
				<th> Sil </th>
			</tr>

			
<?php 
	
	include("../includes/baglan.php");

	$query = mysql_query("SELECT * FROM icerikler");

	while ( $row = mysql_fetch_array($query)){

		$id = $row['id'];
		$tarih = $row['tarih'];
		$yazar = $row['yazar'];
		$baslik = $row['baslik'];
		$image = $row['image'];
		$icerik = substr($row['icerik'],0,100);
		
	
?>

	<tr align="center">	

	<td> <?php  echo $id; ?> </td>
	<td> <?php  echo $tarih; ?> </td>
	<td> <?php  echo $yazar; ?> </td>
	<td> <?php  echo $baslik; ?> </td>
	<td> <img src="../images/<?php  echo $image; ?>" alt="" width="80" height="80" /> </td>
	<td> <?php  echo $icerik; ?> </td>
	<td> <a href="duzenle.php?edit=<?php echo $id; ?>"> Düzenle</a> </td>
	<td><a href="sil.php?sil=<?php echo $id; ?>"> Sil</a> </td>
	
				
			</tr>
<?php } ?> 

		</table>




</body>
</html>

<?php   }   ?>