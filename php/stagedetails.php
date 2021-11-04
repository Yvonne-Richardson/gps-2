<?php

include 'dbcalls.php';
$toBeDone = "/gps/images/imgUnderConstruction.jpg";
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
	<link href=\"/gps/css/lifestage.css\" rel=\"stylesheet\" type=\"text/css\">
	<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script>
	</head>"; 

echo "<body>";
$webPageTitle = "Life Stages of a Plant";
include "header.php";
if (strlen($commonName)<1)  {
	header("Refresh:5; url=http://ormer.net/gps/index.html");
	echo "<h1 class=\"explain\">You did not select a plant from the Home page. You will be redirected to it in 5 seconds so that you can select a plant and then click on the Life Stages link.</h1>";					
} else {
	echo	"<main>	<div class=\"stage\"><h1> 	" . $commonName;
	if (strlen($suffix) > 0) {
		echo ", " . $suffix;
	}
	echo " - " . 	$plantScientific  ;
	echo "	</h1> </div>";

	echo "<div class=\"row\" >
	<div class=\"columnSpace\">  &nbsp;</div>  
	<div class=\"column\"><div class=\"columnName\">&nbsp; Plant&nbsp;</div><img src=\"" .$imgFile. "\"  alt=\"".$imgFile."\" title=\"".$imgFile."\"/>  </div>
	<div class=\"columnSpace\">  &nbsp;  </div>  
	<div class=\"column\">
	<div class=\"columnName\">&nbsp; Fruit&nbsp;</div>
	<img  src=\"" .   $imgFileFruit . "\"  alt=\"".$imgFileFruit."\" title=\"".$imgFileFruit."\"/>
	 <h6>All flowering plants produce fruits; however, not all fruits are edible. </h6> 
	 </div>
	<div class=\"columnSpace\">    &nbsp;</div>  
	<div class=\"column\">
	<div class=\"columnName\">Flower</div>
	<img    src=\"".$imgFileFlower."\"  alt=\"". $imgFileFlower."\" title=\"" . $imgFileFlower ."\"/>
	<h6> Hundreds of plants do not make flowers. </h6>
	</div>
	<div class=\"columnSpace\">  &nbsp; </div>  
	</div>";
	echo " <br>";

	echo "<div class=\"row2\" >
	<div class=\"columnSpace\">  &nbsp;   </div>  
	<div class=\"column2\"><div class=\"columnName2\">&nbsp; Seed or Pod&nbsp; </div><img    src=\"" . $imgFileSeed . "\"  alt=\"". $imgFileSeed ."\" title=\"". $imgFileSeed ."\"/> <h6>Seeds that are preferred over cuttings. </h6></div>
	<div class=\"columnSpace\">  &nbsp;   </div>  
	<div class=\"column2\">
	<div class=\"columnName2\">&nbsp; Cutting &nbsp; </div>
	<img  src=\"" . $imgFileCutting . "\"  alt=\"". $imgFileCutting ."\" title=\"". $imgFileCutting ."\"/>
	 <h6>Technically, nearly any plant can be sprouted from cuttings.   </h6> </div>
	<div class=\"columnSpace\">  &nbsp;   </div>  
	 
	</div>";

	echo "<div class=\"row3\" >
	<div class=\"columnSpace\">  &nbsp;   </div>  
	<div class=\"column\"><div class=\"columnName\">Sprout</div><img src=\"" . $imgFileSprout . "\"  alt=\"" . $imgFileSprout . "\" title=\"" . $imgFileSprout . "\"/> <h6>A shoot from a seed breaks through the surface of the earth. </h6></div>
	<div class=\"columnSpace\">  &nbsp;   </div>  
	<div class=\"column\">
	<div class=\"columnName\"> Seedling</div><img src=\"" . $imgFileSeedling . "\"  alt=\"" . $imgFileSeedling . "\" title=\"" . $imgFileSeedling . "\"/><h6>When a plant develops its first true leaves.   </h6>   </div>
	<div class=\"columnSpace\">    &nbsp;     </div>  
	<div class=\"column\"><div class=\"columnName\">Transplant</div><img src=\"" . $imgFileTransplant . "\"  alt=\"" . $imgFileTransplant ."\" title=\"" . $imgFileTransplant ."\"/>  </div>
	<div class=\"columnSpace\">  &nbsp;   </div>  
	</div>";
	echo " <br> <br>";
	echo "		<div id=\"detailsIdx\">" . $plantIdx  . "</div>
	</main>";
}
echo "<div class=\"stage\">";
include 'footer.php';
echo "</div></body></html> ";
?>


