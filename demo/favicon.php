<?php
$sql = mysql_query("SELECT * FROM modul WHERE id_modul='414'");
		$s=mysql_fetch_array($sql);
		
		echo "joimg/favicon/$s[gambar]"; 
?>