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
		$aksi="modul/mod_ym/aksi_ym.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Yahoo Messanger</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Nama</th> 
    				<th>Username</th>  
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$ym = mysql_query("SELECT * FROM ym ORDER BY id ASC");
				while($s=mysql_fetch_array($ym)){
				
				?>
<tr>  
<th><?php echo"$no" ?></th>
<td><?php echo"$s[nama]" ?></td> 
<td style="text-align: center;"><?php echo"$s[username]" ?></td> 

<td style="text-align:center">
<a href="<?php echo"?module=ym&act=edit&id=$s[id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=ym&act=hapus&id=$s[id]";?>" onclick="return confirm('Apakah anda yakin menghapus ym ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
<!-- INSERT MESSANGER BARU -------------------------------------------------->
<article style="min-width:260px;" class="module width_quarter">
<header><h3>Tambah Yahoo Messanger</h3></header>
<form method='POST' enctype='multipart/form-data' action='modul/mod_ym/aksi_ym.php?module=ym&act=insertnew'>
				<div class="module_content">

<fieldset style="float:left; width:30%; margin-right: 3%;">
<label>Nama</label>
<input name="nama" type="text">
</fieldset>

<fieldset style="float:left; width:30%; margin-right: 3%;">
<label>Username</label>
<input name="username" type="text">
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
			$ymshow = mysql_query("SELECT * FROM ym WHERE id='$_GET[id]'");
				$g=mysql_fetch_array($ymshow);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit Messanger </h3>
				
				<input style="float:right; margin: -27px 10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_ym/aksi_ym.php?module=ym&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id]" ?>'>
				<div class="module_content">
				
<fieldset>
<label>Nama</label>
<input name="nama" type="text" value="<?php echo"$g[nama]" ?>">
</fieldset>
				
<fieldset>
<label>Username</label>
<input name="username" type="text" value="<?php echo"$g[username]" ?>">
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