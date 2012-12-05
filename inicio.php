<?php
	echo "<h2>Select the track to display </h2>\n";
	$gpsext=".gpx";
	foreach (new DirectoryIterator("./") as $fn) {
	     $file= $fn->getFilename();
	     //echo "$file \n";
	     if(strpos($file,$gpsext) !== false){
	   		echo 	"<a href=\"index.php?op=track&track=$file\" class=\"preview_traza\">".
						"<span>$file</span>".
						"<div><img src=\"img/mountain-bike-bariloche2.jpg\" alt=\"\"></div>".
					"</a>";
		}
	 }

	echo "<h2>Select the track elevation data to display </h2>\n";
	echo "<form action=\"filereader.php\" method=\"get\">";
	echo "</br></br>";
	echo "<select name=\"elev\">";
	foreach (new DirectoryIterator("./") as $fn) {
	     $file= $fn->getFilename();
	     //echo "$file \n";
	     if(strpos($file,$gpsext) !== false)
	       echo "<option value=\"$file\">$file</option>";
	 }
	echo "</select>";
	echo "<input type=\"submit\" />";
	echo "</form>";
?>
