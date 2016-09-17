
<div class="row-fluid">
<div class="span12" id="divMain">
<div id="footerOuterSeparator"></div>
		<img src="joimg/header/page-facilities.jpg"/>
<br/>
</div>
</div>




<h1>Facilities</h1>
		<?php 
			$home = mysql_query("SELECT * FROM modul WHERE id_modul = '4' ");
			$s=mysql_fetch_array($home);
			echo"$s[static_content]";
			?> 

