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

// Update ym
if ($module=='ym' AND $act=='update'){
  
  
    mysql_query("UPDATE ym SET 	nama 		= '$_POST[nama]',
								username	= '$_POST[username]'
                            WHERE id		= '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='ym' AND $act=='hapus'){
  
	mysql_query("DELETE FROM ym WHERE id='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}

// Update Tambah ym
if ($module=='ym' AND $act=='insertnew'){
  
  
  
    mysql_query("INSERT INTO ym(nama,
									username) 
                            VALUES('$_POST[nama]',
									'$_POST[username]')");
	
	
  header('location:../../media.php?module='.$module);

	}
}
?>
