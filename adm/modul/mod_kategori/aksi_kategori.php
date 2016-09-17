<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";
include "../../../josys/fungsi_thumb.php";

$module= $_GET['module'];
$act= $_GET['act'];

// Hapus
if ($module=='kategori' AND $act=='hapus'){
	
	mysql_query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}

// Update Page Room
if ($module=='kategori' AND $act=='update'){
  
	mysql_query("UPDATE kategori SET nama_kategori= '$_POST[nama]'
								
											WHERE id_kategori    	= '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='kategori' AND $act=='insertnew'){

	mysql_query("INSERT INTO kategori(
								nama_kategori) 
                            VALUES('$_POST[nama]')");
  header('location:../../media.php?module='.$module);
}
}
?>