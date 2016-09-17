
		<div id="post">
				<?php 
					$artikel=mysql_query("SELECT * FROM artikel WHERE id_artikel = '$_GET[id]'");
					$m=mysql_fetch_array($artikel);
				?>
				
				<h1 style="font-size:24px; font-weight:bold; color:#000000; margin:5px;"><?php echo"$m[judul]" ?></h1>
				<div id="detail">
					<img style="float:left; margin-right:20px; margin-bottom:20px; border:2px solid #000000; max-width:165px"src="joimg/artikel/<?php echo"$m[gambar]" ?>">
					<p style="font-size: 14px;color: #000000;"><?php echo"$m[isi]" ?></p>
					<div class="clear"></div>
				</div>				
				
				<br />
				<!-- <h1 style="font-size:24px; font-weight:bold; color:#000000">Lainya</h1> -->
				<?php 
					$artikel=mysql_query("SELECT * FROM artikel WHERE id_kategori = '$m[id_kategori]' and id_artikel <> '$m[id_artikel]' ORDER BY id_artikel DESC LIMIT 2");
					while($m=mysql_fetch_array($artikel)){
							$isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$m["isi"])));
							$isi = substr($isi,0,strrpos(substr($isi,0,200)," "));
				?>
				<div id="news">
					<div id="pict">
						<a href="detail-artikel-<?php echo"$m[id_artikel]" ?>"><img src="joimg/artikel/<?php echo"$m[gambar]" ?>"></a>
					</div>
					<div id="more">
						<h3><a href="detail-artikel-<?php echo"$m[id_artikel]" ?>"><?php echo"$m[judul]" ?></a></h3>
						<p style="font-size: 14px;color: #000000;"><?php echo"$isi . . ." ?></p>
					</div>
				</div>
				<?php } ?> 
		</div>
				