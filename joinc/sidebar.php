				
<div class="kontent_kanan"> 								<!---- KONTENT KANAN---------------->
<div class="hotline1">
<div id="hcaption" class="hcs">
<h2>Informasi</h2>
</div>				
</div>

<div class="hotline2">
<br/>
<div style="text-align: center;">
<strong style="font-family: tahoma, arial, helvetica, sans-serif; font-size: medium;"><span style="color: #000000;">Chatting</span></strong>
<?php include ("joinc/ym.php"); ?> 			
</div>
</div>



<div class="hotline3">
<tr>
<td>
	
	<?php
//mod sosial media
$sql=mysql_query("SELECT * FROM mod_sosial");
	while($s=mysql_fetch_arraY($sql))
	{
		echo "<a href='$s[link]' target='_blank' title='$s[nama]' class='sosmed-link'><img src='joimg/$s[gambar]' alt='$s[nama]' /></a>";
	}

?>	
</td>
</tr>
</div>

<div class="hotline2">

					<?php
						$slide = mysql_query("SELECT * FROM banner ORDER BY id_banner ASC");
						while($s=mysql_fetch_array($slide)){
					?>
<img style="display:block; margin-left:auto; margin-right:auto; width:250px; height: 150px;" src="joimg/banner/<?php echo"$s[gambar]"; ?>">
					<?php } ?>	

</div>
</div>