<?php
$sql = mysql_query("SELECT * FROM modul WHERE id_modul='10'");
		$s=mysql_fetch_array($sql);
		$cek = mysql_num_rows($sql);
		
		echo $s['static_content']; 
?>