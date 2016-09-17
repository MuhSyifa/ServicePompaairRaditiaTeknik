

<h1>Galeri</h1>
<br />
<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
						<!-- AddThis Button END --><br />
		<?php 
			$gallery=mysql_query("SELECT * FROM gallery ORDER BY id_gallery DESC");
			while($g=mysql_fetch_array($gallery)){
		?>

<ul class="album">
	<li><a class="fancybox" href="joimg/gallery/<?php echo"$g[gambar]" ?>"><em><?php echo"$g[judul]"; ?></em><img src="joimg/gallery/<?php echo"$g[gambar]" ?>" alt="image" /></a></li>
</ul>
<?php } ?>
				<div class="clear"></div>


