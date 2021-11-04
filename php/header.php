<?php 

echo "<header class=\"mainHeader\">
 <img src=\"/gps/images/gpsLogo.gif\" width=\"200\" height=\"135\" alt=\"Class Logo\" title=\"GPS Logo\" />
 <h1>". $webPageTitle ."</h1>
	 <div class=\"table\">
	 <ul id=\"mainNav\">   
<li><a href=\"/gps/index.html\">Home</a></li>
<li><form action=\"/gps/php/compdetails.php\" method=\"post\"   autocomplete=\"on\">
 <button class=\"button\" type=\"submit\" id=\"companions\" onclick=\"sendPlantInfo();\" value=\"Companions\">Companions</button>";
 if(isset($plantIdx)){
	echo "<input class=\"mainHidden\" type=\"hidden\" name=\"cVar\" id=\"cVar\"    value=\"$plantIdx\">";
 } else {
	echo "<input class=\"mainHidden\" type=\"hidden\" name=\"cVar\" id=\"cVar\" value=\"\">";
 }
 echo "</form>
 </li>	
<li> 
<form action=\"/gps/php/stagedetails.php\" method=\"post\"   autocomplete=\"on\">
<button class=\"button\" type=\"submit\" id=\"lifestages\"  onclick=\"sendPlantInfo();\"  value=\"Life Stages\">Life Stages</button>";
 if(isset($plantIdx)){
	echo "<input  class=\"mainHidden\" type=\"hidden\" name=\"lVar\" id=\"lVar\"  value=\"$plantIdx\">";
 } else {
	echo "<input  class=\"mainHidden\" type=\"hidden\" name=\"lVar\" id=\"lVar\"  value=\"\">";	
 }	
 echo "</form>
 </li> 
<li><a href=\"/gps/php/faq.php\">FAQs</a></li>
<li><a href=\"/gps/php/about.php\">About</a></li> 
<li><form action=\"/gps/php/sitecredits.php\" method=\"post\"   autocomplete=\"on\"> <button class=\"button\" type=\"submit\" id=\"sitecredits\" value=\"Site Credits\">Site Credits</button> </form></li>
<li><a href=\"/gps/contact.html\">Contact Us!</a></li> 
</ul>
</div>
</header>";
?>