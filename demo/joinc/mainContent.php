

<?php if($_GET['module']=='home') { ?>

<div class="row-fluid">
<div class="span12" >
<div id="headerSeparator"></div> 
        <div class="flexslider" style="margin-top:25px;margin-bottom:15px;">
          <ul class="slides">
		 <?php
		$slide = mysql_query("SELECT * FROM slide ORDER BY id_slide ASC");
		while($s=mysql_fetch_array($slide)){
		echo "
        <li data-thumb=joimg/slide/$s[gambar]>
  	    	    <img src=joimg/slide/$s[gambar] />
  	    		</li>
		";}?>
          </ul>
        </div>            
</div>
</div>



<div class="row-fluid">
<div class="span8" id="divMain">
		<h1>Welcome</h1>
		<?php 
		$home = mysql_query("SELECT * FROM modul WHERE id_modul = '2'");
		$s=mysql_fetch_array($home);
		echo"$s[static_content]";
		?> 
<br/>
<br/>
</div>

<div class="span4" id="divMain">
		<h1>Information</h1>
		<?php 
			$gallery=mysql_query("SELECT * FROM banner");
			while($g=mysql_fetch_array($gallery)){
		?>
		<a href="home"><img src="joimg/banner/<?php echo"$g[gambar]" ?>"  /></a>
		<?php } ?>
<br/>
<br/>
</div>

</div>
	

				
<div class="row-fluid">                 
<div class="span12" id="divMain">
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
	elseif($_GET['module']=='fasilitas') { ?>
		<?php include("joinc/fasilitas.php"); ?> 
<?php } 
	//modul Desgin
	elseif($_GET['module']=='room') { ?>
	<?php include("joinc/room.php"); ?>  
<?php } 


	//modul Desgin
elseif($_GET['module']=='kontak') { ?>
	<?php include("joinc/kontak.php"); ?>  
<?php } 


elseif($_GET['module']=='detailartikel') { ?>
<?php include("joinc/detailartikel.php"); ?>   			
<?php } 

elseif($_GET['module']=='galeri') { ?>
<?php include("joinc/gallery.php"); ?>   			
<?php } 
 ?>