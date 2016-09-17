 <?php
 if(isset($_POST['submit']))
 {
   	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $jml_orang = $_POST['jml_orang'];
    $paket = $_POST['paket'];
    $extra_bed = $_POST['extra_bed'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="erric.aron@gmail.com";
 $to2="erric.aron@gmail.com";
 $subject="Client Reservasi";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	
         <br> 
        Phone-Id:
         $phone    
         <br>
 		 Email-Id:
		 $email 	   
            
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:reservasi?msg=Successful Submission! Thankyou for contacting us.");
	else
		header("Location:reservasi?msg=Error To send Email !");
		//contact:-your-email@your-domain.com
		
		mysql_query("INSERT INTO reservasi (nama, phone, email, alamat, tgl_pesan, paket, jml_orang, extra_bed, subjek, pesan, tanggal) 
VALUES('$_POST[name]','$_POST[phone]', '$_POST[email]','$_POST[alamat]','$_POST[tgl_pesan]','$_POST[paket]','$_POST[jml_orang]','$_POST[extra_bed]', '$subject', '$_POST[message]', now())");
		
		
 }
?>
      
       
       
       
       
       
       <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Reservasions</h1>
                   	<h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
			<!--Start Contact form -->		                                                
<form name="enq" method="POST" action="reservasi" onsubmit="return validation();">
  <fieldset>
    <h5 style="text-align:center; font-weight:bold;">Nama</h5>
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Nama" />
    <h5 style="text-align:center; font-weight:bold;">Phone</h5>   
    <input type="text" name="phone" id="phone" value="" class="input-block-level" placeholder="Phone" />
    <h5 style="text-align:center; font-weight:bold;">E-mail</h5>  
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="E-mail" />
    <h5 style="text-align:center; font-weight:bold;">Alamat</h5>  
    <textarea rows="6" name="alamat" id="alamat" class="input-block-level" placeholder="Alamat"></textarea>

<h5 style="text-align:center; font-weight:bold;">Tanggal</h5>  

<form action="javascript:void(0)" method="post">
<div><input id="datepicker-example2" type="text" name="tgl_pesan" class="input-block-level" placeholder="Tanggal Reservasi"></div> <!-- style="left: 396.234375px; top: 726px; -->
</form>
<!--datetime -->

<hr/>

    <h5 style="text-align:center; font-weight:bold;">Jumlah Orang</h5>  
    <select type="text" name="jml_orang" id="jml_orang" value="" class="input-block-level" placeholder="Jumlah Orang">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
</select>
<h5 style="text-align:center; font-weight:bold;">Menu Paket</h5>  
<select type="text" name="paket" id="Paket" value="" class="input-block-level" placeholder="Pilih Paket">
  <option>2 rooms</option>
  <option>3 rooms</option>
</select>
<h5 style="text-align:center; font-weight:bold;">Extra Bed</h5>  
<select type="text" name="extra_bed" id="extra_bed" value="" class="input-block-level" placeholder="extra_bed">
 <option>tidak</option>
  <option>1 extra bed</option>
  <option>2 extra bed</option>
  <option>3 extra bed</option>
</select>
<h5 style="text-align:center; font-weight:bold;">Pesan / Catatan</h5>  
    <textarea rows="6" name="message" id="message" class="input-block-level" placeholder="Pesan / catatan"></textarea>
    <div class="actions">
	<input type="submit" value="Kirim Reservasi" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox" style="background: #FDA249; margin-bottom:10px;">
                        <h3 class="sidebox-title">Contact Hotline</h3>
                    <p>
                        <address>
                        
                        <?php 
				$home = mysql_query("SELECT * FROM modul WHERE id_modul = '6' ");
				$s=mysql_fetch_array($home);
				echo"$s[static_content]";
			   ?> 
                        </address>    
                        <address> 
                        <?php include"ym.php"; ?></address>  
                    </p>     
                     
					 <!-- Start Side Categories -->
       <h5 >Maps Batikan De Ville</h5>
        <div class="google-maps">
       <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d1976.3879461322927!2d110.38333497460067!3d-7.813531629444713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!1i0!3e6!4m3!3m2!1d-7.8134599!2d110.3838392!4m3!3m2!1d-7.813443899999999!2d110.38381779999999!5e0!3m2!1sid!2sid!4v1420200925911" width="600" height="450" frameborder="0" style="border:0">
       </iframe>
          <!-- End Side Categories -->
                              
                    </div> 


					<!-- End Side Categories -->
                    					
                    </div>           
                </div>
			<!--/End Sidebar Content-->		
            </div>		
            


<script src="joinc/validation.js" type="text/javascript"></script>

<!--date-->
  <script type="text/javascript" src="scripts/datetime/examples/public/javascript/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="scripts/datetime/public/javascript/zebra_datepicker.js"></script>
  <script type="text/javascript" src="scripts/datetime/examples/public/javascript/core.js"></script>

        <script type="text/javascript" src="scripts/datetime/examples/libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
        <script type="text/javascript" src="scripts/datetime/examples/libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
        <script type="text/javascript" src="scripts/datetime/examples/libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
        <script type="text/javascript" src="scripts/datetime/examples/libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
        <script type="text/javascript" src="scripts/datetime/examples/libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>
        <script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
       <script>
  $('#datepicker-example2').Zebra_DatePicker({
  direction: 1    // boolean true would've made the date picker future only
                  // but starting from today, rather than tomorrow
}); </script>


<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

            
            
            
            	