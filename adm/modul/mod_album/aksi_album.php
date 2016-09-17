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

// Update album
if ($module=='album' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM album WHERE id_album='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/album/$ex[gambar]");
		}
	
	UploadAlbum($nama_file_unik);
  
    mysql_query("UPDATE album SET 	judul 	= '$_POST[judul]',
									gambar	= '$nama_file_unik'
                            WHERE id_album = '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE album SET 	judul 	= '$_POST[judul]'
                            WHERE id_album  = '$_POST[id]'");
	}
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='album' AND $act=='hapus'){
  
    $tampil=mysql_query("SELECT * FROM album WHERE id_album='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/album/$ex[gambar]");
	unlink("../../../joimg/album/kecil_$ex[gambar]");
	mysql_query("DELETE FROM album WHERE id_album='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM album WHERE id_album='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Tambah album
if ($module=='album' AND $act=='insertnew'){
  
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	UploadAlbum($nama_file_unik);
  
    mysql_query("INSERT INTO album(judul,
									gambar) 
                            VALUES('$_POST[judul]',
									'$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO album(judul) 
                            VALUES('$_POST[judul]')");
	}
  header('location:../../media.php?module='.$module);
}

}
?>
