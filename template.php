<!DOCTYPE php>

<head>
    <meta charset="utf-8">
    <title><?php include('title.php'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php include('diskripsi.php'); ?>">
    <meta name="keyword" content="<?php include('keyword.php'); ?>">
    <meta name="author" content="batikandeville.com">
	<META NAME="ROBOTS" CONTENT="INDEX, DOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- date-->
        <link rel="stylesheet" href="scripts/datetime/examples/public/css/reset.css" type="text/css">
        <link rel="stylesheet" href="scripts/datetime/examples/public/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="scripts/datetime/examples/public/css/style.css" type="text/css">

        <link type="text/css" rel="stylesheet" href="scripts/datetime/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

     
        <!--end-->

    <!-- Le php5 shim, for IE6-8 support of php5 elements -->
    <!--[if lt IE 9]>
      <script src="http://php5shim.googlecode.com/svn/trunk/php5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" type="text/css" href="engine1/stylewow.css" />
  <script type="text/javascript" src="engine1/jquerywo.js"></script>
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

	<link rel="shortcut icon" href="joimg/6.png">
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
	
   <link rel="stylesheet" href="scripts/cssmenu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="scripts/cssmenu/script.js"></script>
	
    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="scripts/FlexSlider-master/flexslider.css" type="text/css" media="screen" />
  <script defer src="scripts/FlexSlider-master/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<style>

  #batiklogo{
    margin-left: 29%; 
    margin-bottom: -12px;

  }
  #bgheader{
    background:url(joimg/2.png);


  }

  .Zebra_DatePicker.dp_hidden{

    left:396.234375px; 
    top: 726px;
  }

button.Zebra_DatePicker_Icon{ display: block; position: absolute; width: 16px; height: 16px; background: url('scripts/datetime/calendar.png') no-repeat left top; text-indent: -9000px; border: none; cursor: pointer; padding: 0; line-height: 0; vertical-align: top }
button.Zebra_DatePicker_Icon_Disabled{ background-image: url('scripts/datetime/calendar-disabled.png') }

  
  @media (max-width: 767px){
  #batiklogo{
  margin-left: 0;
    margin-bottom: -12; } 
  }
</style>

</head>
<body id="pageBody">

<div id="divBoxed" class="container">
<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>


    <div class="divPanel notop nobottom">
            <div class="row-fluid">		
			<div class="span12" id="bgheader">
				<div class="span5">
<div align="left" id="divLogo" style="color:black;"><a href="home" id="divSiteTitle" ><img src="joimg/13.png" /></a>Jl. Pangeran Antasari, Cipete Utara, Kebayoran Baru, Jakarta Selatan 12150
HP. 0852 1557 3803, 0817 499 1283</div>
</div>
<div align="right" style="margin-top:11%; margin-right:26px; color:black; font-size:15px;">
Melayani Jasa : <br>
Service Pompa Air<br>
Pengeboran Air Tanah<br>
Pemanas Air, dll</div>
<div class="5" id="information">

</div>
</div>
</div>
<div id='cssmenu' >
<ul>
   <li class="home" ><a href='home-service-pompaair-jakarta'><span>Home</span></a></li>
   <li><a href='tentang-service-pompaair-jakarta'><span>Tentang Kami</span></a></li>
   <li><a href='produkjasa-service-pompaair-jakarta'><span>Produk dan jasa</span></a></li>
   <li><a href='pengalaman-service-pompaair-jakarta'><span>Pengalaman</span></a></li>
   <li ><a href='galeri-service-pompaair-jakarta'><span>Galeri</span></a></li>
   <li><a href='articles-service-pompaair-jakarta'><span>Artikel</span></a></li>
   <li class='last'><a href='kontak-service-pompaair-jakarta'><span>Kontak Kami</span></a></li>
</ul>
</div>
<div class="contentArea">
<div class="divPanel notop page-content">
            	<?php include("joinc/mainContent.php"); ?>               
</div>
 </div>
  
    <div id="divFooter" class="footerArea">
        <div class="footer" style="padding: 10px;">
		
  
<div class="row-fluid" z-index:100;">
<div id="f" class="span7">
		<?php include("joinc/statistik.php"); ?>
		<p class="copyright"> 
		Copyright © 2015 <a href="http://servicepompaairjakarta.com">- servicepompaairjakarta.com</a> | Developer By <a href="http://jogjasite.com">Jogjasite.com</a> 
		</p>
</div>

<div class="span5">
		<p class="social_bookmarks">
		<?php
		//mod sosial media
		$sql=mysql_query("SELECT * FROM mod_sosial");
		while($s=mysql_fetch_arraY($sql))
		{
		echo "<a href='$s[link]' target='_blank' title='$s[nama]' class='sosmed-link'><img src='joimg/$s[gambar]' alt='$s[nama]' /></a>";
		}
		?>
		</p>
</div>
</div>

</div>
</div>
</div>


<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
<script src="scripts/fancybox/jquery.fancybox.js" type="text/javascript"></script>

<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/scriptwo.js"></script>

<script src="scripts/camera/scripts/jquery.mobile.customized.min.js" type="text/javascript"></script>

<link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
<link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
<link href="scripts/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>

<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>


<script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">
function startCamera() {
	$('#camera_wrap').camera({ 
	
	time: 2000, 
	loader: 'bar', 
	playPause: false, 
	navigation: true, 
	height: '35%', 
	pagination: false, 
	thumbnails: true
	});}
	$(function(){startCamera()});
</script> 

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>




</body>