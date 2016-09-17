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

$module=$_GET[module];
$act=$_GET[act];

// Update Banner
if ($module=='banner' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM banner WHERE id_banner='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/banner/$ex[gambar]");
		}
	
	UploadBanner($nama_file_unik);
  
    mysql_query("UPDATE banner SET 	judul 	= '$_POST[judul]',
									gambar	= '$nama_file_unik'
                            WHERE id_banner = '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE banner SET 	judul 	= '$_POST[judul]'
                            WHERE id_banner  = '$_POST[id]'");
	}
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='banner' AND $act=='hapus'){
  
    $tampil=mysql_query("SELECT * FROM banner WHERE id_banner='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/banner/$ex[gambar]");
	mysql_query("DELETE FROM banner WHERE id_banner='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM banner WHERE id_banner='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Tambah banner
if ($module=='banner' AND $act=='insertnew'){
  
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	UploadBanner($nama_file_unik);
  
    mysql_query("INSERT INTO banner(judul,
									gambar) 
                            VALUES('$_POST[judul]',
									'$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO banner(judul) 
                            VALUES('$_POST[judul]')");
	}
  header('location:../../media.php?module='.$module);
}

}
?>
