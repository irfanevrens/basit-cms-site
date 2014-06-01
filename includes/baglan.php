<?php

	$baglan = @mysql_connect("localhost","root","") or die(mysql_error());

	$sec    = @mysql_select_db("cms",$baglan) or die(mysql_error());


	@mysql_query("SET NAMES 'utf8'");
	@mysql_query("SET CHARACTER SET utf8");

?>