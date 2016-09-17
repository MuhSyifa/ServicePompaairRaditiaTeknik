	
<div class="row-fluid">
<div class="span12" id="divMain">
<div id="footerOuterSeparator"></div>
		<img src="joimg/header/page-gallery.jpg"/>
<br/>
</div>
</div>

<!-- GALERI -->
<div class="row-fluid">
<div class="span12">
<div class="yoxview">
<h1>Gallery</h1><br>
		<?php 
			$gallery=mysql_query("SELECT * FROM gallery ORDER BY id_gallery DESC");
			while($g=mysql_fetch_array($gallery)){
		?>

<ul class="album">
	<li><a class="fancybox" href="joimg/gallery/<?php echo"$g[gambar]" ?>"><em><?php echo"$g[judul]"; ?></em><img src="joimg/gallery/<?php echo"$g[gambar]" ?>" alt="image" /></a></li>
</ul>
<?php } ?>
				<div class="clear"></div>

</div>		
</div>		
</div>

