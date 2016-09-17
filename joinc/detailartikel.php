<div id="post">
<?php
							$artikel2=mysql_query("SELECT * FROM artikel where id_artikel='$_GET[id]' ORDER BY id_artikel DESC");
							$tartikel2=mysql_fetch_array($artikel2);
						?>
						
						<div id="boxprogram" style="width:98%; min-height:100px; margin:10px; border-bottom:1px solid #DDD; padding-bottom:10px;">
							<span style="font-weight:bold;"><a href="detailartikel-<?php echo $tartikel2['id_artikel']; ?>" style="text-decoration:none; color:#B11017;"><?php echo $tartikel2['judul']; ?></a></span><br />
							
							
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
						
							<img src="joimg/artikel/<?php echo $tartikel2['gambar']; ?>" style="float:left; margin-right:15px; margin-bottom:10px; width: 100%;margin-top: 5px;">
							<?php echo $tartikel2['isi']; ?>
</div>