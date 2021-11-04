<?php
include 'dbcalls.php';

/*
// same as gps.js values

$colTogether = 16;
$colDiameter = 17;
$colDeep = 18;
$colDistance = 19;

*/

echo "<!doctype html>
<html>
<head>
	<meta charset=\"utf-8\">
	<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
	<title>The Gardener's Planting System</title>
	<meta name=\"description\" content=\"Gardeners Planting System\">";
	include "keywords.php";
	echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
	<link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/companion.css\" rel=\"stylesheet\" type=\"text/css\">
	<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script>
	</head>"; 

echo "<body>";
$webPageTitle = "Plant Companions";
include "header.php";
if (strlen($commonName)<1)  {
	header("Refresh:5; url=http://ormer.net/gps/index.html");
	echo "<h1 class=\"explain\">You did not select a plant from the Home page. You will be redirected to it in 5 seconds so that you can select a plant and then click on the Companions link.</h1>";					
} else {
	echo	"<main>
			<div class=\"companionIntro\" id=\"companionIntro\">";
	
	echo "<div class=\"row\" >
	<div class=\"columnSpace\">  &nbsp;</div>  
	<div class=\"column\">
	<div class=\"columnName\"><b>&nbsp; Mature Plant: " . $commonName ;
	if (strlen($suffix) > 0) {
		echo ", " . $suffix;
	}
	echo " &nbsp</b></div><img src=\"" .$imgFile. "\"  alt=\"".$imgFile."\" title=\"".$imgFile."\"/>  </div>
	<div class=\"columnSpace\">  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </div>  
	<div class=\"column\">
	<div class=\"columnName\"><b>Scientific Name: &nbsp;" . $plantScientific ." &nbsp;</b></div>
	<img  src=\"" .   $imgFileFruit . "\"  alt=\"".$imgFileFruit."\" title=\"".$imgFileFruit."\"/>
	 </div>
	<div class=\"columnSpace\">    &nbsp;</div>  
	</div>
	</div>";
	echo " <br>";
	echo "<div class=\"dbNames\"><b>Companion Plant<br></b> As a companion plant, $commonName helps these plants with pest and disease control, pollination, provides habitat for beneficial creatures, increases yields, or suppresses weeds.
		
	<div class=\"explain\">	" . $companionTo . "</div>
		<b>Opponent Plant<br></b>As an opponent,  $commonName competes for shade, water, or nutrients, or chemically interferes with the vital systems of these plants.			<div class=\"explain\">	" . $opponentOf . "</div> </div>";
			
	echo "<div class=\"dbNames\"><b>Benefits<br></b> 
	<div class=\"explain\">	" .  $benefits. "</div>
	<b>Harms<br></b>	<div class=\"explain\">	" .  $harms . "</div>	</div>";
			
	echo "	<div id=\"detailsIdx\">" . $plantIdx  .  "</div>
			
			</main>";
}
include 'footer.php';
echo "	</body></html> ";


?>
