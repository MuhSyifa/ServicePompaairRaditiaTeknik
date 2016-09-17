	
<div class="row-fluid">
<div class="span12" id="divMain">
<div id="footerOuterSeparator"></div>
		<?php 
			$gallery=mysql_query("SELECT * FROM galeri_pengalaman ORDER BY id desc");
			while($g=mysql_fetch_array($gallery)){
		?>

        <a class="fancybox" href="joimg/gallery/<?php echo"$g[gambar]" ?>"><img src="joimg/gallery/<?php echo"$g[gambar]" ?>" alt="image" /></a>
        
        <?php } ?>
<br/>
</div>
</div>

	
<h1>Pengalaman</h1>
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
				$home = mysql_query("SELECT * FROM modul WHERE id_modul = '5' ");
				$s=mysql_fetch_array($home);
				echo"$s[static_content]";
				?> 