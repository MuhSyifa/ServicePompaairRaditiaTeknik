<?php

$sql = mysql_query("SELECT * FROM modul WHERE id_modul='9'");
$s=mysql_fetch_array($sql);

$default = trim($s['static_content']) ;


	if($_GET['module']=='home')
	{
		echo "$default";
	}
	
	//else if($_GET['module']=='detailproduk')
	//{
	//	$sql = mysql_query("select * from produk where id_produk='$_GET[id]'");
	//	$j   = mysql_fetch_array($sql);
	//	echo "$j[judul] | ".$default;
	//}
	
	else if($_GET['module']=='detailartikel')
	{
		$sql = mysql_query("select * from berita where id_berita='$_GET[id]'");
		$j   = mysql_fetch_array($sql);
		echo "$j[judul] | ".$default;
	}
	
	else {
	
		echo "$default";
	}

?>
