
<div class="row-fluid">
<div class="span12" id="divMain">
<div id="footerOuterSeparator"></div>
		<img src="joimg/header/page-profile.jpg"/>
<br/>
</div>
</div>



<h1>Profile</h1>
<div class="caption"/><br>
		<?php 
			$home = mysql_query("SELECT * FROM modul WHERE id_modul = '3'");
			$s=mysql_fetch_array($home);
			echo"$s[static_content]";
			?> 

	

