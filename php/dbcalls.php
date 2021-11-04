<?php

include 'dbopen.php';
	
if (isset($_POST["cVar"])) {
	$plantIdx = $_POST["cVar"];
} else if (isset($_POST["dVar"])) {
	$plantIdx = $_POST["dVar"];
} else if (isset( $_POST["lVar"])) {
	$plantIdx =  $_POST["lVar"];
} else {
	var_dump($_POST);
}
$commonName            = "";
if ($plantIdx >=1) {
	$toBeDone = "/gps/images/imgUnderConstruction.jpg";
	if (isset( $plantIdx)) {
		if  ( $plantIdx > 0){
			$sqlPlantId = "SELECT * FROM plantId where recordID = '". $plantIdx . "'";

			$j=0;
			// Perform queries
			$result = $conn -> query($sqlPlantId );
			// compute number of rows and columns in grid

			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;

			$plantScientific       = "";
			$plantHeight	       = "";
			$plantDiameter	       = "";
			$plantBloomDescription = "";
			$plantBloomsWhen       = "";	
			$pollinationType	   = "";
			$plantComments         = "";
			
			if ( $row_count > 0) {

				$row = $result -> fetch_assoc();
				$commonName            = $row["commonName"];
				$suffix                = $row["suffix"];
				$plantScientific       = $row["scientificName"];
				$cycle                 = $row["lifeCycle"];
				$cat                   = $row["category"];
				$plantHeight	       = $row["plantHeight"];
				$plantDiameter         = $row["plantDiameter"];
				$plantBloomDescription = $row["plantBloomDescription"];
				$plantBloomsWhen       = $row["plantBloomsWhen"];
				if 	(is_numeric($plantBloomsWhen)) { 
					$plantBloomsWhen = $plantBloomsWhen  ." days after planting";
				}
				$pollination           = $row["plantBloomDescription"];
				$plantComments         = $row["plantComments"];
				
				$displayName = $commonName;
				
				if (strlen(trim($suffix)) > 0 ) {
					$displayName = $displayName . ", " . $suffix;
				}

			   // Free result set  
				$result -> free_result();
				
			} else if ( $row_count == 0) {
				  echo "plantId rows is zero<br>";
			} else {
				echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
			}
	 
			$sqlsowing = "SELECT * FROM sowing where recordID = ".$plantIdx ;
			$result = $conn -> query($sqlsowing);
			// compute number of columns in grid
			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;
			$j=0;

			$sowIndoors                = "";
			$sowOutdoorsWhen	       = "";
			$sowLastFrostWeeks         = "";
			$sowAmendments             = "";
			$sowGerminationMin         = "";
			$sowGerminationMax         = "";
			$sowTransplantOutdoorsWhen = "";
			$sowTogether	           = "";
			$holeDiameter              = "";
			$holeDepth	               = "";
			$holeDistance              = "";
			$harvestMin	               = "";
			$harvestMax	               = "";
			$sowComments               = "";

			if ($row_count > 0) {

				$row = $result->fetch_assoc();
				 
				$sowIndoors                = $row["sowIndoors"];

				$sowOutdoorsWhen           = $row["sowOutdoorsWhen"];	
				$sowLastFrostWeeks         = $row["sowLastFrostWeeks"];	
				if ($sowLastFrostWeeks < 0) {
					$sowLastFrostWeeks     = $sowLastFrostWeeks . " before last frost";
				} else {
					$sowLastFrostWeeks     = $sowLastFrostWeeks . " after last frost";
				}

				$sowAmendments             = $row["sowAmendments"];	
				$sowGerminationMin         = $row["sowGerminationMin"];	
				$sowGerminationMax         = $row["sowGerminationMax"];	
				$plantOutdoors             = $row["sowTransplantOutdoorsWhen"];	
				$sowTogether               = $row["sowTogether"];		
				$holeDiameter              = $row["holeDiameter"];	
				$holeDepth	               = $row["holeDepth"];	
				$holeDistance              = $row["holeDistance"];	
				$harvestMin	               = $row["harvestMin"];	
				$harvestMax	               = $row["harvestMax"];	
				$sowComments               = $row["sowComments"];	
			   // Free result set  
				$result -> free_result();
			} else if ( $row_count == 0) {
				  echo "sowing rows is zero<br>";
			} else {
				echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
			}

			$sqlcompanion = "SELECT * FROM companion where recordID = ".$plantIdx;
			$result = $conn -> query($sqlcompanion);
			// compute number of columns in grid
			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;
			$j=0;

			$companionTo = "";
			$benefits	 = "";
			$opponentOf	 = "";
			$harms       = "";

			if ( $row_count > 0) {

				$row = $result->fetch_assoc();
				
				$companionTo = $row["companionTo"];

				$benefits    = $row["benefits"];
				$opponentOf  = $row["opponentOf"];	
				$harms       = $row["harms"];	
				
			   // Free result set  
				$result -> free_result();
			} else if ( $row_count == 0) {
				  echo "companion rows is zero<br>";
			} else {
				echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
			}

			$sqltoxicity = "SELECT * FROM toxicity where recordID = ".$plantIdx;
			$result = $conn -> query($sqltoxicity);
			// compute number of columns in grid
			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;
			$j=0;

			$toxAmt	   = "";
			$toxToWhat = "";
			$toxParts  = "";
			$toxString = "";

			if ( $row_count > 0) {

				$row = $result->fetch_assoc();
				$col_count = $result -> field_count;
				$toxAmt    = $row["toxAmt"];
				$toxToWhat = $row["toxToWhat"];
				$toxParts  = $row["toxParts"];	
				
			   // Free result set  
				$result -> free_result();
			} else if ( $row_count == 0) {
				 $toxAmt    = "N";
			} else {
				echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
			}
					
			$sqlplantImage = "SELECT * FROM plantImage where recordID = ".$plantIdx ;
			$result = $conn -> query($sqlplantImage);
			// compute number of columns in grid
			$row_count = $result -> num_rows;
			$col_count = $result -> field_count;
			$j=0;

			$imageMain       = $commonName.".jpg";
			$imageFruit      = $commonName."Fruit.jpg";
			$imageFlower     = $commonName."Flower.jpg";

			$imageSeed       = $commonName."Seeds.jpg";
			$imageCutting    = $commonName."Cutting.jpg";

			$imageSprout     = $commonName."Sprout.jpg";
			$imageSeedling   = $commonName."Seedling.jpg";
			$imageTransplant = $commonName."Transplant.jpg";

			if  ( $row_count > 0) {

				$row = $result->fetch_assoc();
				
				$imageMain=$row["imageMain"];
				$imageFruit=$row["imageFruit"];
				$imageFlower=$row["imageFlower"];	
				
				$imageSeed=$row["imageSeed"];
				$imageCutting=$row["imageCutting"];
					
				$imageSprout=$row["imageSprout"];
				$imageSeedling=$row["imageSeedling"];	
				$imageTransplant=$row["imageTransplant"];
				
			   // Free result set  
				$result -> free_result();
			} else if ( $row_count == 0) {
				$imageMain = $toBeDone;
			} else {
				echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
			}

			/*
			// same as gps.js values

			$colTogether = 16;
			$colDiameter = 17;
			$colDeep = 18;
			$colDistance = 19;
			*/

			$imgFile  = $toBeDone;	
			$imgFileFruit = $toBeDone;
			$imgFileFlower = $toBeDone;
				
			$imgFileSeed = $toBeDone;
			$imgFileCutting = $toBeDone;

			$imgFileSprout = $toBeDone;	
			$imgFileSeedling =  $toBeDone;	
			$imgFileTransplant = $toBeDone;	

			$imageMain = trim($imageMain);
	
			if (strlen($imageMain) > 0) {	
				$imgFile = "../images/".$imageMain ;
				if (!file_exists($imgFile)) {
				  $imgFile = $toBeDone ;	
				}
			}

			if (strlen(trim($imageFruit)) > 0) {
			  $imgFileFruit = "../images/".trim($imageFruit );
			  if (!file_exists($imgFileFruit)) {
				$imgFileFruit = $toBeDone ;	
			  }	
			}

			if (strlen(trim($imageFlower)) > 0) {
			  $imgFileFlower = "../images/".trim($imageFlower );
			  if (!file_exists($imgFileFlower)) {
				$imgFileFlower = $toBeDone ;	
			  }	
			}

			if (strlen(trim($imageSeed)) > 0) {	
			  $imgFileSeed = "../images/".trim($imageSeed);
			  if (!file_exists($imgFileSeed)) {
				$imgFileSeed = $toBeDone ;	
			  }	
			}

			if (strlen(trim($imageCutting)) > 0) {	
			  $imgFileCutting = "../images/".trim($imageCutting);
			  if (!file_exists($imgFileCutting)) {
				$imgFileCutting = $toBeDone ;	
			  }	
			}

			if (strlen(trim($imageSprout)) > 0) {
			  $imgFileSprout = "../images/".trim($imageSprout);
			  if (!file_exists($imgFileSprout)) {
				$imgFileSprout = $toBeDone ;	
			  }	
			}

			if (strlen(trim($imageSeedling)) > 0) {
			  $imgFileSeedling = "../images/".trim($imageSeedling );
			  if (!file_exists($imgFileSeedling)) {
				$imgFileSeedling = "../images/imgSeedlingUnderConstruction.jpg";	
			  }	
			}

			if (strlen(trim($imageTransplant)) > 0){	
			  $imgFileTransplant = "../images/".trim($imageTransplant );
			  if (!file_exists($imgFileTransplant)) {
				$imgFileTransplant = $toBeDone ;	
			  }	
			}

		// print page title and column headers

			$toxString =   "";

			if (substr_count($toxParts,"A") > 0) {
				 $toxString = $toxString . "Any or All parts-";
			 }
			 if (substr_count($toxParts,"B") > 0) {
				 $toxString = $toxString . "Branches-";
			 } 
			 if (substr_count($toxParts,"F") > 0) {
				 $toxString = $toxString . "Fruits-";
			 } 
			 if (substr_count($toxParts,"K") > 0) {
				 $toxString = $toxString . "Bark-";
			 }
			 if (substr_count($toxParts,"L") > 0) {
					$toxString =   $toxString . "Leaves-";
			 } 
			 if (substr_count($toxParts,"O") > 0) {
					$toxString =   $toxString . "Oil-";
			 } 
			 if (substr_count($toxParts,"P") > 0) {
					$toxString =   $toxString . "Sprouts-";
			 } 
			 if (substr_count($toxParts,"R") > 0) {
					$toxString =   $toxString . "Roots-";
			 }
			 if (substr_count($toxParts,"S") > 0) {
					$toxString =   $toxString . "Seeds-";
			 } 
			 if (substr_count($toxParts,"T") > 0) {
					$toxString =   $toxString . "Trunks, Stalks, Stems-";
			 } 
			 if (substr_count($toxParts,"W") > 0) {
				$toxString = $toxString . "Flowers-";
			 } 

			$toxVerb = " are ";
		
			if ($toxString == "Oil-") {
				$toxString = "Oil ";
				$toxVerb = " is ";	
			} else if ($toxString == "Bark-") {
				$toxString = "Bark ";
				$toxVerb = " is ";	
			} else if ($toxString == "") {
				$toxString = "Some portion of the plant";
				$toxVerb = " is ";	
			}
			
			$one_dash = "-";
			
			$toxDashes = substr_count($toxString, $one_dash);
			
			if ($toxDashes <=1) {
				$toxString = str_replace($one_dash,' ',$toxString );
			} else {
				$toxString = str_replace($one_dash,', ',$toxString);
			}
			$toxString  = $toxString  . $toxVerb ;
			
			if ($toxAmt == 'N') {
				 $toxString = $toxString . "non-toxic";
			} else if ($toxAmt == 'D') {
				 $toxString = $toxString . "medicinal";
			} else if ($toxAmt == 'M') {
				 $toxString = $toxString . "mildly toxic";
			} else if ($toxAmt ==  'S') {
				 $toxString = $toxString . "somewhat toxic";
			} else if ($toxAmt ==  'H') {
				 $toxString = $toxString . "highly toxic";
			} else if ($toxAmt == 'L') {
				 $toxString = $toxString . "deadly";
			} else {
				 $toxString = $toxString . "non-toxic";
			}

			$toxString  = $toxString  . " to ";
			
			$toxMammal = "";

			if (substr_count($toxToWhat,"C") > 0) {
				 $toxMammal = "cats-";
			} 
			if (substr_count($toxToWhat,"D") > 0) {
				 $toxMammal = $toxMammal . "dogs-";
			} 
			if (substr_count($toxToWhat,"H") > 0) {
				  $toxMammal = $toxMammal . "horses-";
			}
			if (substr_count($toxToWhat,"P") > 0) {
				$toxMammal = $toxMammal . "people (regardless of size)";
			}
			
			$toxDashes = substr_count($toxMammal, "-");
			
			if (substr_count($toxMammal, "-people") >=1 ) {
				$toxMammal = str_replace('-people', ' and people',$toxMammal );
			}
			
			if  (substr($toxMammal,strlen($toxMammal)-1) == $one_dash) {
				$toxMammal = substr($toxMammal,0,strlen($toxMammal)-1);
			}
			
			if (substr_count($toxMammal,$one_dash) > 0) {
				$toxMammal = str_replace($one_dash,', ',$toxMammal);
			}
			
			$toxString = $toxString . $toxMammal;
			if (trim($toxString) == "Some portion of the plant is non-toxic to") {
				$toxString = "";
			}
	
	
     }

	}
}
?>
