<?php

$baglan = @mysql_connect("localhost","cms","cms") or die(mysql_error());

$sec    = @mysql_select_db("cms",$baglan) or die(mysql_error());

@mysql_query("SET NAMES 'utf8'");
@mysql_query("SET CHARACTER SET utf8");