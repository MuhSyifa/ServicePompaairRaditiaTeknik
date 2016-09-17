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

$module=$_GET['module'];
$act=$_GET['act'];

// Update Sosmed
if ($module=='sosmed' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 

  
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM mod_sosial WHERE id='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/$ex[gambar]");
		}
	
	UploadSosial($nama_file_unik);
  
    mysql_query("UPDATE mod_sosial SET 	nama	= '$_POST[nama]',
    									link = '$_POST[link]',
										gambar	= '$nama_file_unik'
                           		        WHERE id= '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE mod_sosial SET 	nama 	= '$_POST[nama]',
	                                    link    = '$_POST[link]'
                            WHERE id  = '$_POST[id]'");
	}
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='sosmed' AND $act=='hapus'){
  
    $tampil=mysql_query("SELECT * FROM mod_sosial WHERE id='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/$ex[gambar]");
	mysql_query("DELETE FROM mod_sosial WHERE id='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM mod_sosial WHERE id='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Tambah Sosmed
if ($module=='sosmed' AND $act=='insertnew'){
  
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
  
 
  
	if(!empty($lokasi_file)){
  
	UploadSosial($nama_file_unik);
  
    mysql_query("INSERT INTO mod_sosial (nama, link, gambar) 
	VALUES 	('$_POST[nama]', '$_POST[link]', '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO mod_sosial(nama) 
                            VALUES('$_POST[nama]')");
	}
  header('location:../../media.php?module='.$module);
}

}
?>
