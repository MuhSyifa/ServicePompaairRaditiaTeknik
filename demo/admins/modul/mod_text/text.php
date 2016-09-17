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
		$aksi="modul/mod_text/aksi_text.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Tulisan Berjalan ( Maksimal 2 )</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Tulisan</th> 
    				<th>Link</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$marquee = mysql_query("SELECT * FROM marquee ORDER BY id ASC");
				while($s=mysql_fetch_array($marquee)){
				
				?>
<tr>  
<th><?php echo"$no" ?></th>
<td><?php echo"$s[tulisan]" ?></td> 
<td><?php echo"$s[link]" ?></td> 

<td style="text-align:center">
<a href="<?php echo"?module=marquee&act=edit&id=$s[id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=marquee&act=hapus&id=$s[id]";?>" onclick="return confirm('Apakah anda yakin menghapus Text ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
<!-- INSERT MESSANGER BARU -------------------------------------------------->
<article style="min-width:260px;" class="module width_quarter">
<header><h3>Tambah Tulisan Berjalan</h3></header>
<form method='POST' enctype='multipart/form-data' action='modul/mod_text/aksi_text.php?module=marquee&act=insertnew'>
				<div class="module_content">

<fieldset style="float:left; width:30%; margin-right: 3%;">
<label>Tulisan</label>
<input name="tulisan" type="text">
</fieldset>

<fieldset style="float:left; width:30%; margin-right: 3%;">
<label>Link</label>
<input name="link" type="text">
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
			$marqueeshow = mysql_query("SELECT * FROM marquee WHERE id='$_GET[id]'");
				$g=mysql_fetch_array($marqueeshow);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit Tulisan </h3>
				
				<input style="float:right; margin: -27px 10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_text/aksi_text.php?module=marquee&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id]" ?>'>
				<div class="module_content">
				
<fieldset>
<label>Tulisan</label>
<input name="tulisan" type="text" value="<?php echo"$g[tulisan]" ?>">
</fieldset>

<fieldset>
<label>Link</label>
<input name="link" type="text" value="<?php echo"$g[link]" ?>">
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