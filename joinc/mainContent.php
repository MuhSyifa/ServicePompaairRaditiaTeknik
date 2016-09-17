

<?php if($_GET['module']=='home') { ?>

<div class="row-fluid">
<div class="span12" style="margin-left: -3%; width: 106%;">
<div id="wowslider-container1" style="margin-top:10px; margin-bottom:15px;">
	<div class="ws_images">
		<ul>
		
			<?php
			$slide = mysql_query("SELECT * FROM slide ORDER BY id_slide ASC");
			while($s=mysql_fetch_array($slide)){
			?>
			<li><img src="joimg/slide/<?php echo"$s[gambar]"; ?>" alt="" title="" id="<?php echo"$s[id_slide]"; ?>"/></li> <!-- <?php //echo"$s[judul]"; ?> --> 
		<?php } ?>

	</ul>
</div>
	</div>	         
</div>
</div>



<div class="row-fluid">
<div class="span8" id="divMain">
		<h1>Selamat Datang</h1>
		<?php 
		$home = mysql_query("SELECT * FROM modul WHERE id_modul = '2'");
		$s=mysql_fetch_array($home);
		echo"$s[static_content]";
		?> 
<br/>
<br/>
</div>

<div class="span4 sidebar" >
	
	<div id="bar">
	<h1>Kontak Informasi</h1>
    <br />                   
                        <?php 
				$home = mysql_query("SELECT * FROM modul WHERE id_modul = '6' ");
				$s=mysql_fetch_array($home);
				echo"$s[static_content]";
			   ?> 
                       
                        <address> 
                        <?php include"ym.php"; ?></address>  
                    </p>
         <!--maps-->     
         <h1>Peta</h1><br />
        <div class="google-maps">
       <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d1976.3879461322927!2d110.38333497460067!3d-7.813531629444713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!1i0!3e6!4m3!3m2!1d-7.8134599!2d110.3838392!4m3!3m2!1d-7.813443899999999!2d110.38381779999999!5e0!3m2!1sid!2sid!4v1420200925911" width="600" height="450" frameborder="1" style="border:1;">
       </iframe>
<br/>

</div>
</div>

</div>


				
<div class="row-fluid">                 
<div class="span12" id="divMain">
	<hr style="background:#FDA249; height:1px; "/>
<div class="yoxview">
		<?php 
			$gallery=mysql_query("SELECT * FROM gallery ORDER BY id_gallery limit 4");
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
			
<?php } 				
	//modul Desgin
	elseif($_GET['module']=='profil') { ?>
		<?php include("joinc/profil.php"); ?>  	
<?php } 
	//modul Desgin
	elseif($_GET['module']=='produkjasa') { ?>
		<?php include("joinc/produkjasa.php"); ?> 
<?php } 
	//modul Desgin
	elseif($_GET['module']=='pengalaman') { ?>
	<?php include("joinc/pengalaman.php"); ?>  
<?php } 
   //modul Desgin
elseif($_GET['module']=='reservasi') { ?>
	<?php include("joinc/reservasi.php"); ?>  
<?php } 

	//modul Desgin
elseif($_GET['module']=='kontak') { ?>
	<?php include("joinc/kontak.php"); ?>  
<?php } 

    //modul Desgin
elseif($_GET['module']=='articles') { ?>
	<?php include("joinc/articles.php"); ?>  
<?php } 


elseif($_GET['module']=='detailartikel') { ?>
<?php include("joinc/detailartikel.php"); ?>   			
<?php } 

elseif($_GET['module']=='galeri') { ?>
<?php include("joinc/gallery.php"); ?> 

<?php } 
 ?>