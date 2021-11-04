<?php
include "dbcalls.php";

echo "<!doctype html><html><head><meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\"><title>The Gardener's Planting System</title><meta name=\"description\" content=\"Gardeners Planting System\">";
include "keywords.php";
echo "<link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\"> <link href=\"/gps/css/rcdLookup.css\" rel=\"stylesheet\" type=\"text/css\"> <link href=\"/gps/css/dbdetails.css\" rel=\"stylesheet\" type=\"text/css\">
<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script></head>";

echo "<body>";
$webPageTitle = "More Information about . . .";
include "header.php";    

echo "<main>  
  <form action=\"selectdb.php\" method=\"post\" autocomplete=\"on\">";
include "homeNav.php";

echo "  </ul>";	
echo "  </form>";	
echo "<div class=\"dbEntries\">";
$cycleType = array("A","P","B");
$cycleArray = array("Annual","Perennial","Biennial");

$catType = array("E","F","G", "M", "R", "T", "W");
$catArray = array("Edible Plant","Flower","Grain","Moss", "Fern", "Tree", "Weed");

$cycleString = $cycleArray[(array_search($cycle, $cycleType))];
$categoryString = $catArray[(array_search($cat, $catType))];

// print page title and column headers
echo "<h3>" . $displayName . ", a";
if ($cycleString == "Annual") {
	echo "n";
}
echo " " . $cycleString . " " . $categoryString . "</h3>";
echo "<div class=\"compContainer\">
		<div class=\"compQ\">
			<div class=\"dbCompQ\">
				<h4>Common Name </h4>
				<p>".$displayName."</p>
			</div>
		<div class=\"dbCompQ\">
			<h4>Scientific Name </h4>
			<p>".$plantScientific."</p>
		</div>
		<div class=\"dbCompQ\">
			<h4>Height</h4>
			<p>".$plantHeight."</p>
		</div>
		<div class=\"dbCompQ\">
			<h4>Width</h4>
			<p>".$plantDiameter."</p>
		</div>
		</div>";
echo "<div class=\"compPair\">
		<div class=\"dbCompP\">
			<h4>Image </h4>";
echo		 "<img src=\"" .$imgFile. "\"  alt=\"".$commonName."\" title=\"".$commonName."\" />";
echo 	"</div>
		<div class=\"dbCompP\">
			<div class=\"vert3\">
				<div>
					<h4>Pollination type </h4>
					<p>".$pollination."</p>
				</div>
				<div>
					<h4>When it Blooms </h4>
					<p>".$plantBloomsWhen."</p>
				</div>
				<div>
					<h4>Flower Color </h4>
					<p>".$plantBloomDescription . "</p>
				</div>
			</div>
		</div>
	</div>";
echo "<div class=\"compPair\"><h2>Planting Information</h2>
		<div class=\"dbCompP\">
			<div class=\"vert3\">
				<div><b>Diameter of Planting Hole</b>:&nbsp;&nbsp;".$holeDiameter."</div>
				<div><b>Planting Hole Depth</b>:&nbsp;&nbsp;".$holeDepth."</div>
				<div><b>Distance between Plants</b>:&nbsp;&nbsp;".$holeDistance."</div>
			</div>
		</div>
		<div class=\"dbCompP\">
			<div class=\"vert3\">
				<div><b>Number of Seeds to Sow Together</b>:&nbsp;&nbsp;".$sowTogether."</div>
				<div><b>Days to Germination </b>:&nbsp;&nbsp;".$sowGerminationMin." - ".$sowGerminationMax."</div>
				<div><b>Days to Harvest</b>:&nbsp;&nbsp;".$harvestMin." - " .$harvestMax."</div>
			</div>
		</div>
	</div>";
echo "<div class=\"compPair\"><h2>When and Where to Plant</h2>
		<div class=\"dbCompP\">
			<div class=\"vert3\">
				<div><b>Indoor Planting</b>:&nbsp;&nbsp;";
					if ($sowIndoors==0) {
						echo "Outdoors only";
					} else {
						echo "Indoors or outdoors";
					}
					echo "</div>
				<div><b>Outdoor Planting</b>:&nbsp;&nbsp;".$sowOutdoorsWhen."</div>
			</div>
		</div>
		<div class=\"dbCompP\">
				<div class=\"vert3\">
					<div><b>Transplant Indoors to Outdoors (if applicable)</b>:&nbsp;&nbsp;".$sowTransplantOutdoorsWhen."</div>
				<div><b>When to start seeds (weeks)</b>:&nbsp;&nbsp;".$sowLastFrostWeeks."</div>
		</div>
		</div>
	</div>";
echo "<div class=\"compPair\">
	  <div class=\"dbCompP\">
		<h4>Toxicity </h4>
		<p>".$toxString ."</p>
	</div>
	<div class=\"dbCompP\">
		<h4>Comments </h4>
		<p>".$plantComments."</p>
	</div>		
	</div>";
echo "</div>
<div  id=\"detailsIdx\">";
echo $plantIdx ;

echo "</div></main>";
include 'footer.php';
echo "	</body></html> ";


?>
