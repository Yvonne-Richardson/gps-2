<?php
include 'dbopen.php';


echo "<!doctype html>
<html>
<head>
	<meta charset=\"utf-8\">
	<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
	<title>The Gardener's Planting System</title>
	<meta name=\"description\" content=\"Gardeners Planting System\">";
	include "keywords.php";
	echo "	<meta name=\"keywords\" content=\"garden,planting,planning,fruit,vegetable,flower,edible,tree,herb,annual,perennial,biennial\">
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
	<link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/credits.css\" rel=\"stylesheet\" type=\"text/css\">
	<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script>
	</head>"; 

echo "<body>";
$webPageTitle = "Web Site Credits";

include 'header.php';
  
echo "<main>
<h2>Research URLs</h2>
<div >
<p>This site is a guide for the basic gardener, rather than a detailed reference for biologists. Even so, a significant amount of research was conducted to compile this information into this Web site. </p>
<p>No one Internet source contains all of this information about each and every plant, and some sites have more detailed information, and better plant images, than others. The Educational Fair Use Law, and similar practices, allow the use of content from other sites, especially when they are listed as references. If the Gardener's Planting System has used images that cannot be used from your site, please use the Contact Form to notify us and we will remove it at your request.</p>
<p>In summary, the content of this site is reasonable, and if you need more detailed information, you can do your own Internet searches. </p>
<p>The following is a partial list of Internet sources that indicate whether a plant is edible or transplantable, what a plant looks like at various stages of growth, and other topics. </p>";
echo "<div class=\"pageIndex\">
<h2>Index</h2>
<div id=\"navCC\" class=\"CharacterContainer\">";
$numberArray = ["#"];
$ltrArray = range('A','Z');

$letters = array_merge($numberArray,$ltrArray);
$lettersActive = ['#', 'A', 'B', 'C', 'D', 'E', 'G', 'I', 'K', 'M', 'P', 'S', 'W'];

foreach ($letters as $letter) {
	if (in_array($letter,$lettersActive)) {
echo "<div class='CharacterElement' data-filter='" . $letter . "' onclick=\"jumptoAnchor('" . $letter . "')\" >" . $letter . "</div>";

	
	} else {
		echo "<div class='CharacterElement Inactive' data-filter='" . $letter . "'>" . $letter . "</div>";
	}
}
echo "</div>
<br>
</div>
<br><br>
<div id=\"AppComponent\"></div>
<br>
	
</div>";

foreach ($letters as $letter) {
	if (in_array($letter,$lettersActive)) {
		$sqlLink = "SELECT linkName FROM sources where linkStart = '". $letter . "'";
		
	// Perform queries

		echo	"<script> 
			document.getElementById('AppComponent').innerHTML += \"<div class='AppElement' id='$letter'>$letter</div> ";
	   
			$result = $conn -> query($sqlLink );
			// compute number of rows and columns in grid

			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;

		if ( $result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<a href='" . $row['linkName'] . "' target='_blank'>" .  $row['linkName'] .  "</a><br>"; 
		
	
			}   
			// Free result set  
			$result -> free_result();
	
		} else {
			echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
		}   
	  
	   
		echo "   \";   </script> ";
	

	}
}
echo "</main>";
include 'footer.php';
echo "	</body></html> ";


?>
