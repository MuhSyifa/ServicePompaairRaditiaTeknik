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


		
		<?php
		$aksi="modul/mod_gallery/aksi_gallery.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">gallery</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Tittle</th> 
    				<th width="30%">Thumbnail</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$gallery = mysql_query("SELECT * FROM gallery ORDER BY id_gallery ASC");
				while($s=mysql_fetch_array($gallery)){
				
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[judul]" ?></td> 
    				<td width="30%"><img height="120px" src="../joimg/gallery/<?php echo"$s[gambar]" ?>"></td> 
    				<td style="text-align:center"><a href="<?php echo"$aksi?module=gallery&act=hapus&id=$s[id_gallery]";?>" onclick="return confirm('Apakah anda yakin menghapus gallery ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Tambahkan Foto Baru</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_gallery/aksi_gallery.php?module=gallery&act=insertnew'>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input name="judul" type="text">
						</fieldset>
	
						
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Thumbnail</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<p style="text-align:center; color: #ff0000;">(* Ukuran Gambar harus 800x500 px. *)</p>
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
		
		<?php break; 
		case"edit":
			$galleryshow = mysql_query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
				$g=mysql_fetch_array($galleryshow);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit gallery</h3>
				
				<input style="float:right; margin: -27px 10px 0px 0px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_gallery/aksi_gallery.php?module=gallery&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id_gallery]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input name="judul" type="text" value="<?php echo"$g[judul]" ?>">
						</fieldset>
<fieldset>				
<select name='id_album'>
			
 <?php 
          $tampil=mysql_query("SELECT * FROM album ORDER BY judul");
          if ($g['id_album']==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   
          while($w=mysql_fetch_array($tampil)){
            if ($g['id_album']==$w['id_album']){
              echo "<option value=$w[id_album] selected>$w[judul]</option>";
            }
            else{
              echo "<option value=$w[id_album]>$w[judul]</option>";
            }
          }
          ?>
</select>
</fieldset>
				
						
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Thumbnail</label><br /><br />
							<img width="200px" style="margin-left:5px;" src="../joimg/gallery/<?php echo"$g[gambar]" ?>">
							
						</fieldset>
							
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Change Thumbnail</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<p style="text-align:center; color: #ff0000;">(* Ukuran Gambar harus 800x500 px. *)</p>
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		<br />
		
		<?php
		
		break; 
		 } ?>
		
<?php } ?>