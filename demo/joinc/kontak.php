 <?php
 if(isset($_POST['submit']))
 {
   	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="edyz.reiko@gmail.com";
 $subject="Client Message";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	   
         <br>
 		 Email-Id:
		 $email 	   
         <br> 
         	Phone-Id:
		 $phone	   
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:kontak?msg=Successful Submission! Thankyou for contacting us.");
	else
		header("Location:kontak?msg=Error To send Email !");
		//contact:-your-email@your-domain.com
		
		mysql_query("INSERT INTO kontak (nama, phone, email, subjek, pesan, tanggal) 
VALUES('$_POST[name]','$_POST[phone]', '$_POST[email]', '$subject', '$_POST[message]', now())");
		
		
 }
?>
      
       
       
       
       
       
       <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contact Us</h1>
                   	<h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
			<!--Start Contact form -->		                                                
<form name="enq" method="POST" action="kontak" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <input type="text" name="phone" id="phone" value="" class="input-block-level" placeholder="Phone" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contact Information</h3>
                    <p>
                        <address>
                        <strong>Grand Marto</strong><br />
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
        <h4 class="sidebox-title">Map</h4>
        <div class="google-maps">
       <iframe src="https://mapsengine.google.com/map/embed?mid=zz54kkirWLgQ.kxdgKe5Q8EaQ" width="400" height="300"></iframe></div>



					<!-- End Side Categories -->
                    					
                    </div>           
                </div>
			<!--/End Sidebar Content-->		
            </div>		
            


<script src="joinc/validation.js" type="text/javascript"></script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

            
            
            
            
            	