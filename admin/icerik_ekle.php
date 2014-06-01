
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
	<link rel="stylesheet" type="text/css" href="admin_style.css" media="all" />
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
		<h2><a href="icerikler.php"> İçerikler</a></h2>
		<h2><a href="">  Yorumlar </a></h2>


	</div>
	
	<form method="post" action="ekle_sonuc.php" enctype="multipart/form-data">

	<table width="650" align="center" border="0">

		<tr>
			<td align="center" bgcolor="PowderBlue" colspan="6">  <h1> İçerik Ekle </h1> </td> 
			
		</tr>
		
		<tr>
			<td align="right"> Başlık </td>
			<td><input type="text" name="baslik" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">  Yazar </td>
			<td><input type="text" name="yazar" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">  Keyword </td>
			<td><input type="text" name="keyword" size="30"></td>
		</tr>
	
		<tr>
			<td align="right"> İmage </td>
			<td><input type="file" name="image"></td>
		</tr>
		
		<tr>
			<td  align="right"> İçerik </td>
			<td><textarea name="icerik" cols="30" rows="15"> </textarea></td>
		</tr>
		
		<tr>
			
	<td align="center" colspan="6"><input type="submit" name="submit" value="Gönder"></td>
		</tr>
		
	
	</table>
</form>
</body>
</html>

<?php  } ?> 