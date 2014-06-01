<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title> Admin </title>
	<link rel="stylesheet" type="text/css" href="admin_style.css"media="all" />
</head>
<body>
	

	<div id="header">
	<a href="admin.php">
	 <h1> Admin Panel </h1>  
	</a>
	</div>
	<div id="sidebar">
		<a href="icerikler.php" alt="vazgeç"><div align="center"><h2 style="color: red; font-weight: bold;"> Vazgeç </h2></div></a>
		<h2><a href=""> Çıkış yap </a></h2>
		<h2><a href="icerikler.php"> İçerikler</a></h2>
		<h2><a href="icerik_ekle.php"> İçerik Ekle</a></h2>
		<h2><a href="">  Yorumlar </a></h2>


	</div>
	<?php 

		include "../includes/baglan.php";

		if(isset($_GET['edit'])){

			$duzenle_id = $_GET['edit'];

			$query = mysql_query("SELECT * FROM icerikler WHERE id='$duzenle_id'");

				while ( $row =  mysql_fetch_array($query)) {
						
						$id = $row['id'];
						$baslik = $row['baslik'];
						$yazar = $row['yazar'];
						$keyword = $row['keyword'];
						$image = $row['image'];
						$icerik = $row['icerik'];
						

		
	?>

	
	<form method="post" action="duzenle_sonuc.php?id=<?php  echo $id;  ?>" enctype="multipart/form-data">

	<table width="600" bgcolor="white" align="center" border="3">

		<tr>
			<td align="center" bgcolor="PowderBlue" colspan="6">  <h1 style="color:blue"> İçerik Düzenle </h1> </td> 
			
		</tr>
		
		<tr>
			<td align="center"> Başlık </td>
			<td><input type="text" name="baslik"  size="30" value="<?php echo $baslik; ?>"></td>
		</tr>
		
		<tr>
			<td align="center">  Yazar </td>
			<td><input type="text" name="yazar" size="30" value="<?php echo $yazar; ?>"></td>
		</tr>
		
		<tr>
			<td align="center">  Keyword </td>
			<td><input type="text" name="keyword" size="30" value="<?php echo $keyword; ?>"></td>
		</tr>
	
		<tr>
			<td align="center"> İmage </td>
			<td> 
				<input type="file"  name="image"  /> <br />
				<img src="../images/<?php  echo $image; ?>" alt="" width="200" height="200" />
			</td>
		</tr>
		
		<tr>
			<td  align="center"> İçerik </td>
			<td><textarea name="icerik" cols="30" rows="15"> <?php echo $icerik; ?></textarea></td>
		</tr>
		
		<tr align="center">
			
			<td align="center" colspan="5" ><input type="submit" name="duzenle" value="Gönder"></td>
			
			
		</tr>
		
	
	</table>
</form>

<?php  }}  ?> 


</body>
</html>

