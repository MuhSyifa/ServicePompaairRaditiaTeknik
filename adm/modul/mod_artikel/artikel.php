<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
<style type="text/css" title="currentStyle">
    @import "media/css/demo_table_jui.css";
    @import "media/css/smoothness/jquery-ui-1.8.4.custom.css";
</style>

<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js">
</script>

<script>
$(document).ready( function () {
     var oTable = $('#example').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>

		<!-- TinyMCE 4.x -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
	
	<script type="text/javascript">
	tinymce.init({
			selector: "textarea",
			plugins: "table",
			tools: "inserttable",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages",
				"textcolor",
				"autoresize",
				"pagebreak",
				
			],

			//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
<!-- /TinyMCE -->
		
		<?php
		$aksi="modul/mod_artikel/aksi_artikel.php";
		switch($_GET[act]){
			default:
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Daftar artikel</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Insert New' onclick="location.href='?module=artikel&act=insertnew'">
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Thumbnail</th> 
    				<th>Artikel</th> 
    				<th>Kategori</th> 
    				<th>Aksi</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$artikel = mysql_query("SELECT * FROM artikel m JOIN kategori k ON m.id_kategori=k.id_kategori ORDER BY id_artikel");
				while($m=mysql_fetch_array($artikel)){
				
				
				?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td align="center"><img width="100px" src="../joimg/artikel/<?php echo"$m[gambar]" ?>"></td> 
    				<td><?php echo"$m[judul]" ?></td> 
    				<td><?php echo"$m[nama_kategori]" ?></td> 
    				<td align="center"><a href="<?php echo"?module=artikel&act=edit&id=$m[id_artikel]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo"$aksi?module=artikel&act=hapus&id=$m[id_artikel]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			</div><!-- end of #tab1 -->
			<div class="clear"></div>
		</div><!-- end of .tab_container -->
		</article>
		<br />
		<div class="clear"></div>
		
		<?php break; 
		case"insertnew":
		?>
		
		<article class="module width_full">
			<header><h3>Tambahkan Artikel</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=artikel&act=insertnew'>
				<div class="module_content">
						
						<table>
							
<tr><td style="width:20%;">
<label>Nama Artikel</label></td> 
<td style="width:50%; margin-bottom:8px;">
<input style="width:100%; margin-bottom:8px;" name="nama" type="text" >
</td>
</tr>					
						
<tr><td style="width: 20%">
<label>Kategori</label></td> 
<td style="width:50%; margin-bottom:8px;">
<select style=" width: 93%; height: 26px;" name='jenis'>

<?php
$tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
while($w=mysql_fetch_array($tampil)){
echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
}
?>

 </select><br />
</td>
</tr>




						</table>
						
						
						
						<fieldset><label>Keterangan</label><br /><br />
							<textarea name="isi" style="height:200px"></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Upload Gambar</label><br /><br />
							<input style="margin-left:10px;" type="file" name="fupload" size=40>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 500x375px.
						</fieldset>
						
						
						
						
						<!----  KATEGORI DIBAWAH DIMATIKAN ----------------------------
						
						<fieldset style="float:left; width:30%; margin-right: 3%;"> 
							<label>Kategori</label><br /><br />
							<select style="margin-bottom:15px; width: 93%; height: 26px;" name='jenis'>
								<?php
								  $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
									while($w=mysql_fetch_array($tampil)){
									echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
									}
								  ?>
						   </select><br />
						</fieldset> 
						----->
						
						
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<?php break; 
		case"edit":
			$artikel = mysql_query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
			$r=mysql_fetch_array($artikel);
			
		?>
		<?php
			switch($_GET[act2]){
				default:
		?>
		
		<article class="module width_full">
			<header><h3>Edit Artikel</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=artikel&act=update'>
				<input type='hidden' name='id' value='<?php echo"$r[id_artikel]" ?>'>
				<div class="module_content">
<table>						
<tr><td style="width:20%;"><label>Nama artikel</label></td> <td style="width:50%; margin-bottom:8px;"><input style="width:100%; margin-bottom:8px;" name="nama" type="text" value="<?php echo"$r[judul]" ?>"></td></tr>	


<!---- KATEGORI ----------------------------------------------------->
<tr><td style="width: 20%">
<label>Kategori</label></td> 
<td style="width:50%; margin-bottom:8px;">
<select style=" width: 93%; height: 26px;" name='jenis'>
 
							  <?php $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
							  if ($r[id_kategori]==0){
								echo "<option value=0 selected>- Pilih Album -</option>";
							  }   

							  while($w=mysql_fetch_array($tampil)){
								if ($r[id_kategori]==$w[id_kategori]){
								  echo "<option value=$w[id_kategori] selected>$w[nama_kategori]</option>";
								}
								else{
								  echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
								}
							  }
								echo "</select>"?><br />
 </select>
</td>
</tr>
					
</table>


						<fieldset><label>Keterangan</label><br /><br />
							<textarea name="isi" style="height:200px;"><?php echo"$r[isi]" ?></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							&nbsp;&nbsp;<img width="270px" src="../joimg/artikel/<?php echo"$r[gambar]" ?>">
							<br /><br /><label>Ganti Gambar</label><input style="margin-left:10px;" type="file" name="fupload" size=40>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 500x375px.
						</fieldset>
							
						<!---- KATEGORI DIPINDAH ATAS ------------------>
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<!-- galleri 
		<article class="module width_full" style="width:525px;float:left; margin-right:0px;">
			<header><h3 class="tabs_involved">Gallery</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Insert New' onclick="location.href='?module=artikel&act=edit&act2=insertnew2&id=<?php echo"$_GET[id]" ?>'">
				
			</header>
			<table class='display'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Thumbnail</th> 
    				<th>Aksi</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$gm = mysql_query("SELECT * FROM gallery WHERE id_artikel='$_GET[id]' ORDER BY id_gallery");
				while($gg=mysql_fetch_array($gm)){
				
				
				?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td align="center"><img width="100px" src="../joimg/gallery/<?php echo"$gg[gambar]" ?>"></td> 
					<td align="center"><a href="<?php echo"$aksi?module=artikel&act=hapusgambar&id=$gg[id_gallery]&d=$_GET[id]";?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
		</article>
		
		
		end gallery -->
		
		<br/><br/>
		
		<div class="clear"></div><br/><br/><br/><br/>
		
		<?php break; 
			case"insertnew2":
		?>
			
			
<!---- Insert Gallery ------------------------------------------------------------------->	
			<!-- <article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Tambah Gallery</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_artikel/aksi_artikel.php?module=artikel&act=insertnew2'>
				<input type="hidden" name="id" value='<?php echo"$_GET[id]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input name="judul" type="text">
						</fieldset>
							
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly 
							<label>Gambar</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 220x150 px.
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn"><input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
		
		
		<?php	
			break;
			}
		break;
		 } ?>
		
<?php } ?>