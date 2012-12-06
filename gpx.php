<?php
$current_map=$_GET["track"];
$url_query=$_SERVER["QUERY_STRING"];
$url_url=$_SERVER["SERVER_NAME"];
$url_script=$_SERVER["SCRIPT_NAME"];

$URL="http://".$url_url.$url_script."?".$url_query;

/*  debug stuff:  */
if (isset($current_map))
{
//echo "isset: $current_map </br> \n";
//echo "</br> \n";
}
else
{
$current_map=$argv[1];
//echo "argv: $current_map </br> \n";
//echo "</br> \n";
}
echo "<script>var url='$URL'</script>";
include 'openlayers.php';

//echo "</br> share link:<a href=\"$URL\" targe=\"_blank\">$URL </a>";
//echo "</br> <a href=\"index.php\"> home </a>";
?>
