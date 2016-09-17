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



// Hapus header
if ($module=='artikel' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/artikel/$ex[gambar]");
	mysql_query("DELETE FROM artikel WHERE id_artikel='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM artikel WHERE id_artikel='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}


// Hapus 2
if ($module=='artikel' AND $act=='hapusgambar'){
	
	$tampil=mysql_query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/gallery/$ex[gambar]");
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}
  header("location:../../media.php?module=artikel&act=edit&id=$_GET[d]");
}


// Update Page Room
if ($module=='artikel' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM artikel WHERE id_artikel='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/artikel/$ex[gambar]");
		}
	
	UploadArtikel($nama_file_unik);
  
    mysql_query("UPDATE artikel SET 	id_kategori		 	= '$_POST[jenis]',
									judul			 	= '$_POST[nama]',
									isi				 	= '".mysql_real_escape_string($_POST[isi])."',
									gambar				= '$nama_file_unik'
                            WHERE id_artikel		       	= '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE artikel SET 	id_kategori		 	= '$_POST[jenis]',
									judul			 	= '$_POST[nama]',
									isi				 	= '".mysql_real_escape_string($_POST[isi])."'
                            WHERE id_artikel		       	= '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='artikel' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	UploadArtikel($nama_file_unik);
  
    mysql_query("INSERT INTO artikel(id_kategori,
									judul,
									isi,
									gambar) 
                            VALUES('$_POST[jenis]',
                                   '$_POST[nama]',
                                   '".mysql_real_escape_string($_POST[isi])."',
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO artikel(id_kategori,
									judul,
									isi) 
                            VALUES('$_POST[jenis]',
                                   '$_POST[nama]',
                                   '".mysql_real_escape_string($_POST[isi])."')");
	}
	
	
  header('location:../../media.php?module='.$module);
}

// Update insert gallery



}
?>
