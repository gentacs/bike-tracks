<?php
echo '<div>';
echo "select the track to display \n";
echo "</br></br>";
$gpsext=".gpx";
echo "<form action=\"gpx.php\" method=\"get\">";
echo "<select name=\"track\">";
foreach (new DirectoryIterator("./") as $fn) {
     $file= $fn->getFilename();
     //echo "$file \n";
     if(strpos($file,$gpsext) !== false)
       echo "<option value=\"$file\">$file</option>";
 }
echo "</select>";
echo "<input type=\"submit\" />";
echo "</form>";
echo "</br></br>";

echo "select the track elevation data to display \n";
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
echo "</div>";
?>
