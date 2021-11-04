<?php 
	echo "<!doctype html>
	<html>
	<head>
	<meta charset=\"utf-8\">
	<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
	<title>The Gardener's Planting System</title>
	<meta name=\"description\" content=\"Gardeners Planting System\">";
	include "keywords.php";
	echo "<link href=\"/gps/css/colors.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
	<link href=\"/gps/css/about.css\" rel=\"stylesheet\" type=\"text/css\">
<script type=\"text/javascript\" src=\"/gps/js/gps.js\"></script>
</head>";
	echo "<body>";
$webPageTitle = "About Us";
include "header.php";
echo "<main><div class=\"facts\">
<div class=\"heroImage\">
  <div class=\"heroText\">About the Designer: <br>Yvonne V. Richardson, BSCS, M. Ed.</div>
  Hello!<br>

I have always been in Information Technologies in one facet or another. I designed, developed, documented, and deployed computer systems for several years.  I have worked in aerospace, education, hospitals, insurance, publishing, software and telecommunications. I taught introductory computer science for about 14 school quarter; students appreciate the survey that uses competency-based education techniques to enable student-centered learning.
<br><br>
My Bachelor of Science in Computer Science is from Western Washington University, my Masters in Education is from the University of Washington Bothell, and I have certificates in Project Management and Web and Mobile Design. 
  </div>
  <div class=\"heroImage\">
  <div class=\"heroText\">About the Website </div>
 
Growers Planning Solutions is a fictitious company, designed for the purpose of making a really cool logo whose acronym is the same as the site. The site was prototyped for the Lake Washington Institute of Technologies DreamWeaver class, DSGN 233. At the time, the site used a file system to store information, but it has been updated to retrieve data from a MySQL database.
<br><br>
The original purpose of the website was to provide facts that the average gardener needs for about plants that they are likely to grow.  It is of assistance in purchasing and landscaping decisions, without running all over the Internet seeking answers.
<br><br>
Since then, plants were added to satisfy curiosity about what may be in your environment, regardless of whether you were going to grow them in a garden. An FAQ page has been added, in addition to a page of credits for people who want to find out more about the plants and images that are on the site.
<br><br>
The user can pick a type of plant on the main page, and then display different types of information about that plant on any of several pages.
<br><br>
The Gardener's Planting System website is located at www.ormer.net/gps.
<br>
<br>
  
  </div>
</div>";

echo "</main>";
include 'footer.php';
echo "	</body></html> ";


?>