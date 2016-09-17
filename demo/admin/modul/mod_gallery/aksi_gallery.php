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

// Update gallery
if ($module=='gallery' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM gallery WHERE id_gallery='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/gallery/$ex[gambar]");
		}
	
	UploadGallery($nama_file_unik);
  
    mysql_query("UPDATE gallery SET judul = '$_POST[judul]', id_album = '$_POST[id_album]', gambar = '$nama_file_unik' 	
                            WHERE id_gallery = '$_POST[id]' ");
	}
	else{
	mysql_query("UPDATE gallery SET judul = '$_POST[judul]', id_album = '$_POST[id_album]' WHERE id_gallery = '$_POST[id]' ");
	}
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='gallery' AND $act=='hapus'){
  
    $tampil=mysql_query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/gallery/$ex[gambar]");
	unlink("../../../joimg/gallery/kecil_$ex[gambar]");
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Tambah gallery
if ($module=='gallery' AND $act=='insertnew'){
  
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	UploadGallery($nama_file_unik);
  
    mysql_query("INSERT INTO gallery(judul, gambar) 
                            VALUES('$_POST[judul]', '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO gallery(judul) 
                            VALUES('$_POST[judul]')");
	}
  header('location:../../media.php?module='.$module);
}

}
?>
