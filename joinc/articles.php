




<h1>Artikel</h1><br />
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
	

<div class="row-fluid  ">
        <ul class="thumbnails" style="margin-left:15px; margin-right:15px; ">

            <li class="span6" style="background:white;" >
                  <div class="thumbnail">
                <div class="blog">
          <?php
							
							
							$artikel3=mysql_query("SELECT * FROM artikel ORDER BY id_artikel DESC");
							while ($tartikel3=mysql_fetch_array($artikel3)){
								$isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tartikel3["isi"])));
								$isi = substr($isi,0,strrpos(substr($isi,0,250)," "));

								echo "
								<div id='boxprogram' style='width:98%; min-height:100px; margin:10px; border-bottom:1px solid #DDD; padding-bottom:10px;'>
									<span style='font-weight:bold;'><a href='detail-artikel-$tartikel3[id_artikel]' style='text-decoration:none; color:#3D3D3D; font-size:14px;'>$tartikel3[judul]</a></span><br />
									<div class='date' style='font-size:12px; color:#FAA308'></div>
									<img src='joimg/artikel/$tartikel3[gambar]' style='float:left; margin-right:15px; margin-bottom:10px; width: 200px;margin-top: 5px;'><br>
									<span style='font-weight:bold;'>$isi . . .</span> <a href=detail-artikel-$tartikel3[id_artikel]><i class='btn btn-primary btn-1' style='float:right;'>Selengkapnya</i></a>
									<div class='clear'></div>
								</div>
								";
							}
							?>
            
			

            </div>
                </section></div></li></ul>
              	
</div>
	            