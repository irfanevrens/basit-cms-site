<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all"/>

	</head>

	<body>

		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/menu.php"); ?></div>

		<div id="icerik">

			<h2> aramanızın sonucu </h2>

			<?php

			include('includes/baglan.php');

			if (isset($_GET['ara'])) {

				echo $arama_id = $_GET['value'];

				$arama_sorgu = mysql_query("SELECT * FROM icerikler WHERE keyword LIKE '%$arama_id%'") or die(mysql_error());

				while ($arama_row = mysql_fetch_array($arama_sorgu)) {

					$id = $arama_row['id'];
					$baslik = $arama_row['baslik'];
					$image = $arama_row['image'];
					$icerik = substr($arama_row['icerik'], 0, 150);

					?>

					<h3 align="center">
						<a href="sayfalar.php?id=<?php echo $id; ?>"> <?php echo $baslik; ?>  </a>
					</h3>

					<center><img src="images/<?php echo $image; ?>" width="300" height=110 alt=""/></center>

					<center><p><?php echo $icerik; ?> </p></center>

				<?php

				}

			}

			?>

		</div>

		<div> <?php include("includes/sidebar.php"); ?></div>

		<div id="footer"> Footer</div>

	</body>

</html>