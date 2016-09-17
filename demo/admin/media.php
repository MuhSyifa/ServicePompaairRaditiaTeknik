<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'><link href='css/reset.css' rel='stylesheet' type='text/css'>
 <center>Anda harus login dulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard Admin Grand Marto</title>
	<link rel="shortcut icon" href="../grandmarto-icon.ico">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="?module=halamanadmin">Halaman Admin</a></h1>
			<h2 class="section_title">
			<?php if ($_GET[module]=='halamanadmin') {?>
			Dashboard
			<?php } elseif ($_GET[module]=='profil'){?>
			Edit Profil
			<?php } elseif ($_GET[module]=='welcome'){?>
			Edit Welcome
			<?php } elseif ($_GET[module]=='artikel'){?>
			Edit Artikel
			<?php } elseif ($_GET[module]=='kontak'){?>
			Edit Kontak
			<?php } elseif ($_GET[module]=='kategori'){?>
			Edit Kategori
			<?php } elseif ($_GET[module]=='slideshow'){?>
			Edit Slideshow
			<?php } elseif ($_GET[module]=='title'){?>
			Edit Title Website
			<?php } elseif ($_GET[module]=='description'){?>
			Edit Description Website
			<?php } elseif ($_GET[module]=='keyword'){?>
			Edit Keyword Website
			<?php } elseif ($_GET[module]=='user'){?>
			Edit Change Password
			<?php } elseif ($_GET[module]=='banner'){?>
			Edit Change Banner
			<?php } elseif ($_GET[module]=='gallery'){?>
			Edit Change Gallery
			
		
			
			<?php } elseif ($_GET[module]=='fasilitas'){?>
			Edit Fasilitas
			<?php } elseif ($_GET[module]=='room'){?>
			Edit Room
			<?php } elseif ($_GET[module]=='sosmed'){?>
			Edit Sosial Media
			<?php } elseif ($_GET[module]=='ym'){?>
			Edit Sosial Media
			
			
			<?php } ?>
			
			</h2><div class="btn_view_site"><a href="../" target="_blank">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="?module=halamanadmin">Halaman Admin</a> <div class="breadcrumb_divider"></div> <a class="current">
			<?php if ($_GET[module]=='halamanadmin') {?>
			Dashboard
			<?php } elseif ($_GET[module]=='profil'){?>
			Edit Profil
			<?php } elseif ($_GET[module]=='welcome'){?>
			Edit Welcome
			<?php } elseif ($_GET[module]=='artikel'){?>
			Edit Artikel
			<?php } elseif ($_GET[module]=='kontak'){?>
			Edit Kontak
			<?php } elseif ($_GET[module]=='kategori'){?>
			Edit Kategori
			<?php } elseif ($_GET[module]=='slideshow'){?>
			Edit Slideshow
			<?php } elseif ($_GET[module]=='title'){?>
			Edit Title Website
			<?php } elseif ($_GET[module]=='description'){?>
			Edit Description Website
			<?php } elseif ($_GET[module]=='keyword'){?>
			Edit Keyword Website
			<?php } elseif ($_GET[module]=='user'){?>
			Edit Change Password
			<?php } elseif ($_GET[module]=='banner'){?>
			Edit Change Banner
			<?php } elseif ($_GET[module]=='gallery'){?>
			Edit Change Gallery
			
			<?php } elseif ($_GET[module]=='fasilitas'){?>
			Edit Fasilitas
			<?php } elseif ($_GET[module]=='room'){?>
			Edit Room		
			<?php } elseif ($_GET[module]=='sosmed'){?>
			Edit Sosial Media
			<?php } elseif ($_GET[module]=='ym'){?>
			Edit Sosial Media
		
			
			<?php } ?>
			</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<!-- <form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/> -->
		
		<h3>Main Menu</h3>
		<ul class="toggle">
			<li class="icn_categories"><a href="?module=welcome">Home</a></li>
			<li class="icn_categories"><a href="?module=profil">Profil</a></li>
			<li class="icn_categories"><a href="?module=kontak">Kontak</a></li>
		</ul>
		
		<h3>Menu Service</h3>
		<ul class="toggle">
			<li class="icn_photo"><a href="?module=room">Room Rates</a></li>
			<li class="icn_photo"><a href="?module=fasilitas">Fasilitas</a></li>
		</ul>
		
		<h3>Menu Support</h3>
		<ul class="toggle">
			<li class="icn_photo"><a href="?module=slideshow">Slideshow</a></li>
			<li class="icn_photo"><a href="?module=album">Album</a></li>
			<li class="icn_photo"><a href="?module=gallery">Gallery</a></li>
			<li class="icn_photo"><a href="?module=sosmed">Sosial Media</a></li>
			<li class="icn_photo"><a href="?module=banner">Banner</a></li>
			<li class="icn_photo"><a href="?module=ym">Yahoo Messanger</a></li>
		</ul>
		<h3>Menu Web</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="?module=title">Title</a></li>
			<li class="icn_settings"><a href="?module=description">Description</a></li>
			<li class="icn_settings"><a href="?module=keyword">Keyword</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="?module=user">Change Password</a></li>
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p style="margin-bottom:10px;"><strong>Copyright &copy; 2014 grandmarto.com</strong></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<?php include('content.php'); ?>
		
		
		
		
	</section>

</body>

</html>
<?php
}
?>