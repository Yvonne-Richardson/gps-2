<?php
include 'dbopen.php';

$sql = 'SELECT * FROM plantId where ';

// build query 


$dimension = '';
$cycle = '';
$cat = '';
$btnTitle = '';
$cVar = '';
$dVar = '';
$lVar = '';

foreach($_POST as $key => $value) {
	  $dimension = substr ($value ,0,1);

	  if ( $key == 'lifecycle') {
		  $btnTitle = $value;
		  $cycle = $dimension;
		  $sql = $sql . "lifeCycle = '" . $dimension . "' order by commonName";
	  } else if ($key == 'category'){
		  $btnTitle = $value;
		  if ($btnTitle=="Ferns") {
			  $dimension="R";
		  }
		   $cat = $dimension;
		  $sql = $sql . "category = '" . $dimension . "' order by commonName"; 
	  } else if (strlen($value)> 0) {
		  echo "<br>key is  " . $key .  " and value length is " . strlen($value);
		  if (isset($_POST["cVar"])) {
			$plantIdx = $_POST["cVar"];
		} else if (isset($_POST["dVar"])) {
			$plantIdx = $_POST["dVar"];
		} else if (isset( $_POST["lVar"])) {
			$plantIdx =  $_POST["lVar"];
		}
		$sql = $sql . "plantIdx = '" . $plantIdx;
	  }
} 

echo "<!doctype html><html><head><meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\"><title>The Gardener's Planting System</title><meta name=\"description\" content=\"Gardeners Planting System\">";
include "keywords.php";
echo "<meta name=\"keywords\" content=\"garden,planting,planning,fruit,vegetable,flower,edible,tree,herb,annual,perennial,biennial\">  <link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\"> 
<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
 <link href=\"/gps/css/select.css\" rel=\"stylesheet\" type=\"text/css\">
 <link href=\"/gps/css/rcdLookup.css\" rel=\"stylesheet\" type=\"text/css\"> 
 <script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script></head>";

echo "<body>";
$webPageTitle = "Select a Plant";
include "header.php";  

echo "<main>";
echo " <form action=\"selectdb.php\" method=\"post\"   autocomplete=\"on\"> ";

include "homeNav.php";

echo "</form>";
echo "<div class=\"dbEntries\">";

// print page title and column headers
echo "<h3>Plants that are " . $btnTitle ."</h3>";
echo "<p>Click on the plant name, then click on \"More About...\", \"Companions\" or \"Life Stages\"  get more information about the plant.</p>";

echo "<table><tr ><td >&nbsp;</td>  <td  ><b>Common Name </b></td> </tr>";

$i=1;
// Perform query
$result = $conn -> query($sql );

// compute number of columns in grid
$j=0;

		$row_count = $result -> num_rows;
		$col_count = $result -> field_count;

if ( $row_count  > 0) {

    while($row = $result->fetch_assoc()) {
		if   ((strlen($cycle) > 0 ) or  (strlen($cat) > 0 ) ) {
			if (($cycle==$row["lifeCycle"]) or ($cat==$row["category"])) {
				echo "<tr class=\"pretty-table\">";
				echo "<td  id=\"plantIndex" .$j . "\">" .$row["recordID"]."</td>";
				echo "<td id=\"cell"      .$j . "\" onclick=\"saveContent(id)\">" . $row["commonName"];
	  	
				if (strlen(trim($row["suffix"]))> 0) {
					echo ", " . $row["suffix"];
				}
					echo  "</td></tr>";
				$j=$j+1;
			}
		}
	}   
   // Free result set  
    $result -> free_result();
	
  } else {
    echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
  }
  
echo "</table><br>";

echo "</div><div  id=\"detailsIdx\">";
echo $btnTitle;
echo "</div></main>";

include "footer.php";
echo "</body></html> ";
exit();

?>
