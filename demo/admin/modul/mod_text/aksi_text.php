<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Update marquee
if ($module=='marquee' AND $act=='update'){
  
  
    mysql_query("UPDATE marquee SET 	tulisan 		= '$_POST[tulisan]',
    									link			= '$_POST[link]'
                            			WHERE id		= '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='marquee' AND $act=='hapus'){
  
	mysql_query("DELETE FROM marquee WHERE id='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}

// Update Tambah marquee
if ($module=='marquee' AND $act=='insertnew'){
  
  
  
    mysql_query("INSERT INTO marquee(tulisan, link) 
                            VALUES('$_POST[tulisan]', '$_POST[link]')");
	
	
  header('location:../../media.php?module='.$module);

	}
}
?>
