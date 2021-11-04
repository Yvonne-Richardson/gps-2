<?php

echo "<!doctype html>
<html>
<head>
	<meta charset=\"utf-8\">
	<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
	<title>The Gardener's Planting System</title>
	<meta name=\"description\" content=\"Gardeners Planting System\">";
	include "keywords.php";
	echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
   	<link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/faq.css\" rel=\"stylesheet\" type=\"text/css\">
		<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script>
	</head>"; 

echo "<body>";
$webPageTitle = "Frequently Asked Questions";
include "header.php";

	echo	"<main>	<h1>Frequently Asked Questions</h1> ";
	
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What are the main plant types?</div>  
	<div class=\"faqAnswer\">The botanical classification of what the plant is, instead of how it is used, results in 4 basic types of plants.<br><br>
	<img src=\"../images/PlantTypes.jpg\"  alt=\"Plant Types\" title=\"Plant Types\"/>  
	<ol><li>Either a plant has a vascular system or it doesn't. <br>
Non-vascular plants are the <b>Bryophytes</b>, like mosses, liverworts, and hornworts.<br></li>
<li>If a plant has a vascular system, then either it makes seeds or it doesn't.<br>
Plants that do not make seeds make spores.  These are <b>Pteridophytes</b>, like ferns.<br></li>
<li>Plants that make seeds either enclose the seeds in fruits or they don't.<br>Plants that do not make fruits are <b>Gymnosperms</b>, like hemlocks and spruce, and they store their seeds in cones.<br></li>
<li>The fourth classification, the <b>Angiosperms</b>, are vascular plants that enclose their seeds in fruits.</li></ol>
</div>
	</div>";
	echo " <br>";
	
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">Do all flowering plants produce fruit?</div>  
	<div class=\"faqAnswer\">ALL flowering plants produce fruits; however, not all fruits are edible.</div>
	</div>";
	echo " <br>";


	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is the difference between a fruit and a seed?</div>  
	<div class=\"faqAnswer\">Fruits are the means by which flowering plants disseminate seeds. Without a seed, the fruit cannot grow into a new plant. But, without a fruit, the seed can grow into a new plant.<br>
	<ul><li>After fertilization, the ovary of a flower becomes a fruit, and the ovule becomes the seed. </li>
	<ul>
	<li>In simple fruits, like plums, there is only one ovary. </li>
	<li>Aggregate fruits, like blackberries, develop from a single compound flower and contain many ovaries. </li>
	<li>Multiple fruits, like pineapples, are formed from a cluster of flowers. Each flower produces a fruit, but they mature into a single mass.</li>
	<li>False fruits, or accessory fruits, like pears, are derived from tissues that are adjacent to the ovary. Cashews, figs, and strawberries are false fruits.</li>
	<li>Seedless fruits, like navel oranges, are grown by grafting.</li>
	</ul>
	<li>Not all fruits contain seeds, and not all seeds are enclosed by fruits. For example, fruitless seed plants include gymnosperms like pine trees and gingko trees. </li></div>
	</div>";
	echo " <br>";

	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is the difference between a fruit and a vegetable?</div>  
	<div class=\"faqAnswer\">A fruit develops from the flower of a plant, while the other parts of the plant are categorized as vegetables. Fruits contain seeds, while vegetables consist of roots, stems and leaves. This site labels fruits and vegetables as \"edibles\".</div>
	</div>";
	echo " <br>";

	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is a flower?</div>  
	<div class=\"faqAnswer\">A flower is the reproductive part of flowering plants. A flower is a special part of the plant that has petals. Inside the petals are the parts which produce pollen, fruit (if appropriate) and seeds.<br><br>No one terminology really fits the enormous variety that is found among plants. For the purposes of this site, a flower is not the same category as an edible or a tree. Flowers mostly produce more flowers.</div>
	</div>";
	echo " <br>";
	
			echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is a weed?</div>  
	<div class=\"faqAnswer\">A weed is a plant growing where it is not wanted, and competes with cultivated plants. Many plants that are considered to be weeds are also considered to be invasive. For this site, weeds are not categorized as edibles.</div>
	</div>";
	echo " <br>";
	
	
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">How accurate is the Gardener's Planting System?</div>  
	<div class=\"faqAnswer\">This web site is not intended to be the tiebreaker when discovering new plants.  Consequently, its information may drill down to genus, but not species, when a plant is not completely unique. For example, the prickly pear genus includes the dune prickly pear, the calico cactus, and the pancake prickly pear, among others. If a flower is not from the plant that is being described, it is probably from another species within the same genus.
	</div>
	</div>";
	echo " <br>";
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">Let me rephrase that. How does the site relate its information to the Plant Kingdom?</div>  
	<br><img src=\"../images/PlantParts.jpg\" alt=\"Plant Parts\" title=\"Plant Parts\"/> <br>
	<div class=\"faqAnswer\">There are 6 basic parts to a plant. The Plant Kingdom being what it is, there will be exceptions to each of the 6 guidelines.
	<ul>
	<li><b><i>Roots</b></i> -<br>Roots are structures that anchor a plant, help it absorb water and minerals that are  conducted by the stem, and store reserve food. Roots often become bulbs, tubers or rhizomes that create new plants.<br></li>
	<li><b><i>Stems</b></i> -<br>Stems are vascular plant structures that supports leaves, flowers and fruits. They  transport water and dissolved substances between the roots and the leaves, store nutrients, and produce new living tissue. Trunks, stalks, and shoots are also considered to be stems.<br></li>
	<li><b><i>Leaves</b></i> -<br>Leaves are flat green outgrowths from the stem that manufacture food by photosynthesis.<br></li>
	<li><b><i>Flowers</b></i> -<br>Flowers are responsible for making new seeds, usually by becoming seed-bearing fruit after pollination.<br></li>
	<li><b><i>Fruits</b></i> -<br>Fruits are the portion of a plant that encloses the seed or seeds. Apricots, bananas, corn grains, tomatoes, acorns, and almonds are all technically fruits.<br></li>
	<li><b><i>Seeds</b></i> - <br>Seeds are small embryonic plants that are enclosed in seed coats, usually with stored nutrients. Occasionally this site does not differentiate between seeds, tubers, and bulbs, although there are plants that create both bulbs and seeds.<br></li>
	</ul>
	</div>
	</div>";
	echo " <br>";
	

	/*
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">&nbsp; Plant&nbsp;</div>  
	<div class=\"faqAnswer\">&nbsp; Fruit&nbsp;</div>
	</div>";
	echo " <br>";
	*/


	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is the difference between a vine and a tree?</div>  
	<div class=\"faqAnswer\">A tree is a plant that typically is perennial, has a trunk, and branches on top. It may also have secondary growth, when growing tissue(this year's greenery) joins structural tissue (woody stems).<br><br>A vine is a plant that grows with support on another structure, sometimes with specialized stems that anchor into another material or wrap around it.<br><br>
	For the purposes of this site, if a vine does not have edible fruit or pretty flowers, it is classified as a tree.
	</div>
	</div>";
	echo " <br>";
	
		echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is the difference between a sprout and a seedling?</div>  
	<div class=\"faqAnswer\">When a shoot reaches the surface, it becomes a sprout. The sprout will eventually take on a green color when it develops its first true leaves, at which time it is considered to be a seedling.</div>
	</div>";
	echo " <br>";
	echo " <br>";
	
	echo "<div class=\"row\" >
	<div class=\"faqQuestion\">What is the definition of toxicity?</div>  
	<div class=\"faqAnswer\"><ul><li>One definition of toxicity is \"the quality, state, or relative degree of being poisonous.\" </li>
<li>Any plant that is medicinal might also be toxic, depending on your point of view. Medicinal uses for plants require scientific evidence, which is beyond the scope of this Website. For example, gastrointestinal upset occurs when cats nibble on lawn grass; this behavior is often considered medicinal instead of toxic.</li>
<li>Plant oils or saps may contain concentrated chemicals whose effects are more drastic than if a pet is exposed to the living plant. This is similar to consuming mass quantities of plants that might not have negative effects in smaller amounts.</li>
<li>Allergies are not toxicity.</li>
<li>Most Internet sites do not suggest how a pet might be exposed in a manner that toxicity becomes an issue. For example, some sites suggested that licking or inhaling a plant is not ingesting it.  When in doubt about how a pet might interact with a plant, it is a good idea to keep the plant away from pets altogether.</li>
<li>This site is not an authority on plant toxicity. It categorizes plants as being \"non-toxic\", \"mildly toxic\", \"somewhat toxic\", \"highly toxic\", or \"deadly\". Sources like <a href=\"https://www.wikipedia.org\" target='_blank'>Wikipedia</a>  and <a href=\"https://www.aspca.org \"target='_blank'>Aspca.org</a> are quoted when it is discovered that a plant has toxic effects.</li>

</div>
	</div>";
	echo " <br>";
	



	echo " <br> <br>
	</main>";


include 'footer.php';
echo "	</body></html> ";
?>


