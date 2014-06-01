<?php 
session_start();
//     9AFEFF PowderBlue


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style type="text/css">
	 	#tablo{ border-radius: 8px; padding: 12px; width: 400px; margin-top:50px; background-color: #1999E5; text-align: center;
				font-family: arial;
	 	}
		#renk { color: #000066; }


	</style>

</head>
<body bgcolor="PowderBlue">

	<form action="login.php" method="post">
		
		<table id="tablo" border="0"  align="center" >
			
			<tr> 
				<td id="renk" colspan="4" align="center"><h2> Admin </h2> </td>
			
			</tr>
			<tr>
				<td> Kullanici Adı</td>
				<td> <input type="text" name="kadi" /> </td>
			</tr>
			<tr>
				<td> Kullanici Şifre</td>
				<td> <input type="password" name="sifre" /> </td>
			</tr>

			<tr>
				
				<td colspan="2"><center><input type="submit" name="login" value="Gönder" /></center> </td>
			</tr>

		</table>

	</form>


	
</body>
</html>
<?php 

 include "../includes/baglan.php";

 		if (isset($_POST['login'])) {
 			
 			$kadi = mysql_real_escape_string(strip_tags(trim($_POST['kadi'])));
 			$sifre = mysql_real_escape_string(strip_tags(trim($_POST['sifre'])));

 			$encrypt = md5($sifre);

 			$admin = mysql_query("SELECT * FROM admin_giris WHERE kadi='$kadi' AND sifre='$sifre'");

 				if (mysql_num_rows( $admin) > 0) { // böle bir kayıt varsa eğer kadi yi bir session a atıyoruz
 					
 					$_SESSION['kadi'] = $kadi;

 					header("location: admin.php"); // admin sayfasına yönlendiriyoruz.

 				}else{

 						echo"<script>  alert(' Kullanıcı Adı veya Şifre Yanlış ')  </script>" ;	

 				}
 		}

 		// güvenlik için bir kaç sefer yanlış girince şifreyi bloke etme yi yap



?>
