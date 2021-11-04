 <?php
echo " <ul class=\"nav2\">
		<li>	   
		<ul class=\"homeNav\">     
			<li><input type=\"submit\"  class=\"dbselect\" name=\"lifecycle\" value=\"Annuals\"></li>     
			<li><input type=\"submit\"  class=\"dbselect\" name=\"lifecycle\" value=\"Perennials\"></li>      
			<li><input type=\"submit\"  class=\"dbselect\" name=\"lifecycle\" value=\"Biennials\"></li>  ";
			echo "	<li id=\"plantDetails1\">
		<input type=\"submit\" id=\"plantDetails\" class=\"inp\"  value=\"More about\" onclick=\"sendPlantInfo();\" formmethod = \"post\" formaction=\"/gps/php/dbdetails.php\"> <li id=\"mainHidden\"><input class=\"mainHidden\" type=\"hidden\" name=\"dVar\" id=\"dVar\">	
			</li>";
echo "	</ul>	</li>  ";
	
echo "	<li class=\"plantType\" >	   
		<ul class=\"homeNav\" >		 
			<li><input type=\"submit\" class=\"dbselect\" name=\"category\" value=\"Edibles\"></li>     
			<li><input type=\"submit\"  class=\"dbselect\" name=\"category\" value=\"Flowers\"></li>		
			<li><input type=\"submit\"  class=\"dbselect\" name=\"category\" value=\"Grains\"></li>	  
			<li><input type=\"submit\"  class=\"dbselect\" name=\"category\" value=\"Trees\"></li>      
		</ul>  
	</li>
		<li class=\"plantType\" >	   
		<ul class=\"homeNav\" >		 
			<li><input type=\"submit\" class=\"dbselect\" name=\"category\" value=\"Weeds\"></li>     
			<li><input type=\"submit\"  class=\"dbselect\" name=\"category\" value=\"Ferns\"></li>      
			<li><input type=\"submit\" class=\"dbselect\" name=\"category\" value=\"Moss\"></li>     
		</ul>  
	</li>
	</ul> ";
 ?>